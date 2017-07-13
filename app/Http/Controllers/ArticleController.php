<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Article;
use App\Tag;
use Auth;
use Validator;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles =  Article::paginate(10);
        return view('ui_back.articles.index')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cates = Category::all()->where('status', 1);
        return view('ui_back.articles.create')->with(['cates' => $cates]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = array(
            'title.required' => 'Give title to user know that article towards its content',
            'title.min' => 'Title minimum is :min character',
            'title.max' => 'Title maximum is :max character',
            'title.unique' => 'Title already exists in website',
            'description.min' => 'Description minimum is :min character',
            'description.max' => 'Description maximum is :max character',
            'content.required' => 'Content is empty. Please input content for this.',
            'content.min' => 'Content is too short. Please do this more detail.',
            'category.choose' => 'Choose a category to classtify article',
            'thumbnail.mimes' => 'Format of file incorrect. Please try again! (.jpg, jpeg, .png, .gif, .bmp)',
            'tag.required' => 'Add least to a tag relate to article'
            );
        Validator::extend('choose', function($attribute, $value){
            return $value > 0;
        });
        
        $this->validate($request, [
            'title' => 'required|min:10|max:100|unique:articles,title',
            'description' => 'min:10|max:200',
            'content' => 'required|min:20',
            'category' => 'choose',
            'thumbnail' => 'mimes:jpg,png,gif,jpeg,bmp',
            'tag' => 'required'
            ], $messages);
        $a = new Article;
        $a->title = $request->get('title');
        $a->alias = $request->get('slug');
        $a->user_id = auth()->user()->id;
        // $a->description = empty($request->get('description'))?substr($request->content, 0, 200):$request->get('description');
        $a->content = $request->content;
        // $a->category = $request->get('category');
        $public_url = url('/').'/public/images/upload_xBnm92Ht';
        $f = ($request->hasFile('thumbnail'))?$request->file('thumbnail'):NULL;
        $fn = ($request->hasFile('thumbnail'))?md5(strtolower(preg_replace('/.png+$|.jpg+$|.jpeg+$|.gif+$|.bmp+$/', '', $f->getClientOriginalName()))):NULL;
        $a->thumbnail = ($request->hasFile('thumbnail'))?$public_url.'/'.$fn.'.'.$f->getClientOriginalExtension():NULL;
        // $a->status = $request->get('status');
        $a->opencomment = $request->get('opencomment');
        if ($a->save()) {
            if($request->hasFile('thumbnail')){
                $f->move(public_path().'/images/upload_xBnm92Ht', $fn.'.'.$f->getClientOriginalExtension());
            }
            $lt = explode(',', $request->get('tag'));
            for ($i=0; $i < count($lt); $i++) { 
                $a->tags()->attach($lt[$i]);
            }
            $a->category()->attach($request->get('category'));

            return redirect()->route('ad.a.index')->with(['status' => '1', 'label' => 'Success!', 'message' => 'Add new article success', 'alert' => 'success']);
        }else{
            return redirect()->back()->with(['status' => '0', 'label' => 'Failed!', 'message' => 'Add new article fail', 'alert' => 'danger']);
        }
        

        // $f = ($request->hasFile('thumbnail'))?$request->file('thumbnail'):NULL;
        // $fn = md5(strtolower(preg_replace('/.png+$|.jpg+$|.jpeg+$|.gif+$|.bmp+$/', '', $f->getClientOriginalName())));
        // dd($fn.'.'.$f->getClientOriginalExtension());

    }

    public function active($id='')
    {
        $article  = Article::find($id);
        if ($article->status == 1) {
            $article->status = 0;
        }elseif($article->status == 0){
            $article->status = 1;
        }

        if ($article->save()) {
            return redirect()->back()->with(['status' => '1', 'label' => 'Success!', 'message' => 'Change status article success', 'alert' => 'success']);
        }else{
            return redirect()->back()->with(['status' => '0', 'label' => 'Failed!', 'message' => 'Change status article error', 'alert' => 'danger']);
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
    public function destroy($id)
    {
        $article = Article::find($id);
        if ($article->delete()) {
            return redirect()->back()->with(['status' => '1', 'label' => 'Success!', 'message' => 'Add new article success', 'alert' => 'success']);
        }else{
            return redirect()->back()->with(['status' => '0', 'label' => 'Failed!', 'message' => 'Add new article error', 'alert' => 'danger']);
        }
    }

    /**
     * Get article with status pending
     *
     * @return void
     * @author 
     **/
    public function pending()
    {
        $articles = Article::where('status', 0)->paginate(10);
        return view('ui_back.articles.pending')->with('articles', $articles);
    }
}
