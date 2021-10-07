<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = News::get();
        return view('admin.blog.index', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::where('active', 1)->get();
        return view('admin.blog.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new News();
        $post->cat_id = $request->cat_id;
        $post->title = $request->title;
        $post->description = $request->description;
        if ($request->hasFile('photo')) { // (img_name) == the name of the input field in my form
            $myFile = $request->file('photo');
            $extention = $myFile->getClientOriginalExtension(); // for getting the image extention ex:(jpg, png, ...)
            $file_name = time() . '.' . $extention; //setting a now name for the image which is the timestamp and extention
            $myFile->move('uploads/', $file_name);
            $post->photo = '/uploads/' . $file_name;
        }

        $post->active = $request->active == 'on' ? 1 : 0;
        $post->is_hot = $request->is_hot == 'on' ? 1 : 0;
        $post->save();

        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = News::find($id);
        $categories = Categories::where('active', 1)->get();
        return view('admin.blog.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = News::find($id);
        $post->cat_id = $request->cat_id;
        $post->title = $request->title;
        $post->description = $request->description;
        if ($request->hasFile('photo')) { // (img_name) == the name of the input field in my form
            $myFile = $request->file('photo');
            $file_name = time().$myFile->getClientOriginalName(); // for getting the image extention ex:(jpg, png, ...)
//            $file_name = time() . '.' . $extention; //setting a now name for the image which is the timestamp and extention
            $myFile->move('uploads/', $file_name);
            $post->photo = '/uploads/'.$file_name;
        }

        $post->active = $request->active == 'on' ? 1 : 0;
        $post->is_hot = $request->is_hot == 'on' ? 1 : 0;
        $post->save();

        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = News::find($id);
        $post->delete();
        return redirect()->route('news.index');
    }
}
