<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getCategories(){
        $categories = Categories::where('active',1)->get();
        $hot_news = News::where('is_hot',1)->first();
        $feature_post = News::where('cat_id',6)->take(3)->get();
        return view('welcome',compact('categories','hot_news','feature_post'));
    }

    public function getSinglePost($id){
        $categories = Categories::where('active',1)->get();
        $news = News::find($id);
        return view('single_post',compact('categories','news'));
    }
}
