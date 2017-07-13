<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    	return view('ui_back.partials.home');
    }

    public function getLogin()
    {
    	return view('ui_back.users.login');
    }
}
