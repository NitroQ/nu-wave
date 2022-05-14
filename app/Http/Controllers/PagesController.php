<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Articles;

class PagesController extends Controller
{
    public function home(){

        $articles = Articles::where('category','=','Article')->latest()->limit(3)->get();
        $products = Articles::where('category','=','Products')->latest()->limit(3)->get();
        $innovator = Articles::where('category','=','Innovators')->latest()->limit(3)->get();
       
        return view('home', [
            'articles' => $articles,
            'products' => $products,
            'innovator' => $innovator
        ]);
    }
    public function articleView($id){

        $articles = Articles::find($id);

        return view('public.articles.view' , [
            'article' => $articles
        ]);
    }

    public function articles(){

        $articles = Articles::get();

        return view('public.article' , [
            'articles' => $articles
        ]);
    }

}
