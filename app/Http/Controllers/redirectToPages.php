<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class redirectToPages extends Controller
{


    public function contact(){
        return view('pages.contact');
    }

    public function  search(){
        return view('pages.search');
    }
    public function categories(){
        return view('pages.categories');
    }
    public function single_post(){
        return view('pages.single_post');
    }

    public function about(){
        return view('pages.about');
    }
    public function index(){
        return view('pages.index');
    }

}
