<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Category;
use App\Article;
use App\Tag;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(10);
        return view('ui_back.categories.index')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ui_back.categories.create');
    }

    public function pending()
    {
        $categories = Category::where('status', 0)->paginate(10);
        return view('ui_back.categories.pending')->with('categories', $categories);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        // return 'fsfsdf';
        if ($request->isMethod('post')) {
            $title = $request->get('title');
            $desc = ($request->has('description'))?$request->get('description'):NULL;
            $thumb = ($request->hasFile('thumbnail'))?$request->file('thumbnail'):NULL;
            $status = $request->get('status');
            $cate = new Category;
            $cate->title = $title;
            $cate->alias = str_slug($title);
            $cate->status = $status;
            $public_url = url('/').'/public/images/upload_xBnm92Ht/';
            if (!is_null($thumb)) {
                $fn = md5(preg_replace('/.jpg$|.png$|.gif$|.bmp$|.jpeg$/', '', strtolower($thumb->getClientOriginalName()))).'.'.$thumb->getClientOriginalExtension();

            }else{
                $fn = NULL;
            }

            $cate->image = $public_url.$fn;
            if ($cate->save()) {
                if (!is_null($fn)) {
                    $request->file('thumbnail')->move(public_path().'/images/upload_xBnm92Ht/', $fn);
                }
                return redirect()->back()->with(['status' => '1', 'label' => 'Success!', 'message' => 'Add new category success', 'alert' => 'success']);
            }else{
                return redirect()->back()->with(['status' => '0', 'label' => 'Failed!', 'message' => 'Add new category error', 'alert' => 'danger']);
            }


        }
    }

    public function active($id='')
    {
        $category = Category::find($id);
        if ($category->status === 1) {
            $category->status = 0;
        }else{
            $category->status = 1;
        }
        if ($category->save()) {
            return redirect()->back()->with(['status' => '1', 'label' => 'Success!', 'message' => 'Change status category success', 'alert' => 'success']);
        }else{
            return redirect()->back()->with(['status' => '0', 'label' => 'Failed!', 'message' => 'Change status category error', 'alert' => 'danger']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $category = Category::find($id);
        if ($category->delete()) {
            return redirect()->back()->with(['status' => '1', 'label' => 'Success!', 'message' => 'Delete category success', 'alert' => 'success']);
        }else{
            return redirect()->back()->with(['status' => '0', 'label' => 'Failed!', 'message' => 'Delete category error', 'alert' => 'danger']);
        }
    }
}
