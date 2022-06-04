<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Articles;

class PagesController extends Controller
{
    public function home(){

        $articles = Articles::where('category','=','Article')->latest()->limit(5)->get();
        $products = Articles::where('category','=','Products')->latest()->limit(3)->get();
        $innovator = Articles::where('category','=','Innovators')->latest()->limit(1)->get();
       
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

        $articles = Articles::where('category','=','Article')->latest()->get();

        return view('public.article' , [
            'articles' => $articles
        ]);
    }
    public function products(){

        $products= Articles::where('category','=','Products')->latest()->get();

        return view('public.products' , [
            'products' => $products
        ]);
    }
    public function innovators(){

        $innovators= Articles::where('category','=','Innovators')->latest()->get();

        return view('public.innovators' , [
            'innovators' => $innovators
        ]);
    }
    public function soon(){
        return view('soon');
    }
    public function exhibits(){
        return view('public.exhibits');
    }
    public function about(){
        return view('public.about');
    }
}
