<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class admincontroller extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=News::all();

        return view('national.index',compact('data'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('national.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



    if ($request->hasFile('photo')) { // (img_name) == the name of the input field in my form
        $myFile = $request->file('photo');
        $extention = $myFile->getClientOriginalExtension(); // for getting the image extention ex:(jpg, png, ...)
        $file_name = time() . '.' . $extention; //setting a now name for the image which is the timestamp and extention
        $myFile->move('uploads/', $file_name);
        News::create([
            'photo' => '/uploads/' . $file_name,
            'title_name' => $request->title_name,
            'news_body' => $request->news_body
        ]);
    }
    else{
        News::create($request->all());
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
        $data=News::find($id);
        return view('national.edit',compact('data'));
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
        $data=News::find($id);
        $data->update($request->all());
        return redirect('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data=News::find($id);
        $data->delete();
        return redirect('admin');
    }
}
