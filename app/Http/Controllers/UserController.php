<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;
use Mail;
use Auth;
// use App\Http\Controllers\HandleGeneralController;
class UserController extends Controller
{
    public function get_register()
    {
        if (Auth::check()) {
            return redirect()->route('ui.home');
        }
    	return view('users.register');
    }

    public function post_register(UserRequest $request)
    {
        $name = $request->get('username');
        $email = $request->get('email');
    	$password = $request->get('password');
        $user = new  User;
        $user->name = $name;
        $user->email = $email;
        $user->password = \Hash::make($password);
        $user->key_active = json_encode(array('session' => HandleGeneralController::rand_string(50), 'start' => date('d-m-Y')));
        if ($user->save()) {
            // Mail::send('users.login', array('firstname'=>$request->get('username')), function($message) use ($email){
            //         $message->to($email, 'Dung Luong Trendy Blog')->subject('Welcome to the Laravel 4 Auth App!');
            //     });
            return redirect()->route('ui.user.success_register')->with(['flash' => 'success']);
        }else{
            return redirect()->back()->with(['flash' => 'success']);
        }
    }

    public function success_register()
    {
        // echo HandleGeneralController::rand_string(50);
        return view('users.confirm-register');
    }

    public function get_login()
    {
        if (Auth::check()) {
            return redirect()->route('ui.home');
        }
    	return view('users.login');
    }

    public function post_login(Request $request)
    {
        $email = $request->get('email');
    	$password = $request->get('password');
        // $user = User::where('email', $email)->where('password', \Hash::make($password))->first();
        $temp = array('email' => $email, 'password' => $password);
        if (Auth::attempt($temp)) {
           return redirect()->intended();
        }else{
           return redirect()->back()->with('flash', 'error');
        }
    }
    public function logout()
    {
        if(Auth::logout()){
            return redirect()->intended();
        }else{
            return redirect()->route('ui.home');
        }
    }

    public function index()
    {
        $users = User::paginate(10);
        return view('ui_back.users.list')->with('users', $users);
    }

    public function pending()
    {
        $users = User::where('active', 0)->paginate(10);
        return view('ui_back.users.list')->with('users', $users);
    }

    public function active($id='')
    {
        $user = User::find($id);
        if ($user->active === 1) {
            $user->active = 0;
        }else{
            $user->active = 1;
        }

        if ($user->save()) {
            return redirect()->back()->with(['status'=>1, 'action' => 'Change status user']);
        }else{
            return redirect()->back()->with(['status'=>0, 'action' => 'Change status user']);
        }
    }

    public function lock($id='')
    {
        $user = User::find($id);
        if ($user->active < 2) {
            $user->active = 2;
        }else{
            $user->active = 1;
        }

        if ($user->save()) {
            return redirect()->back()->with(['status'=>1, 'action' => 'Change lock user']);
        }else{
            return redirect()->back()->with(['status'=>0, 'action' => 'Change lock user']);
        }
    }

    public function auth_view($id=''){
        $user = User::find($id);
        if ($user->count() > 0) {
            return view('ui_back.users.auth')->with('user', $user);
        }else{
            return redirect()->back()->with(['status' => 0, 'label' => 'Failed!', 'message' => 'User not found', 'alert' => 'warning']);
        }
    }

    public function auth_change($id='', Request $req)
    {
        // dd($request);
        $user = User::find($id);
        if ($user->count() > 0) {
            $auth = $req->get('auth', 0);
            $user->auth = $auth;
            if ($user->save()) {
                return redirect()->back()->with(['status' => 1, 'label' => 'Success!', 'message' => 'Authorization for user success', 'alert' => 'success']);
            }else{
                return redirect()->back()->with(['status' => 0, 'label' => 'Failed!', 'message' => 'Authorization for user error', 'alert' => 'danger']);
            }
        }else{
            return redirect()->back();
        }
    }
}
