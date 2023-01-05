<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Articles;
use App\Innovators;
use App\Products;
use App\Carousel;
use App\Exhibits;

class PagesController extends Controller
{
    public function home(){
        $carousel = Carousel::where('active', '=', '1')->orderBy('created_at', 'desc')->get();
        $articles = Articles::where('active', '=', '1')->latest()->limit(5)->get();
        $products = Products::where('active', '=', '1')->latest()->limit(3)->get();
        $innovator = Innovators::where('active', '=', '1')->latest()->limit(1)->get();
       
        return view('home', [
            'carousel' => $carousel,
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

    public function articlelatest(){

        $articles = Articles::latest()->first();
        $latest = Articles::find($articles->id);

        return view('public.articles.view' , [
            'article' => $latest
        ]);
    }

    public function articles(){

        $articles = Articles::latest()->paginate(10);

        return view('public.articles.index' , [
            'articles' => $articles
        ]);
    }
    

    public function productsView($id){

        $products = Products::find($id);

        return view('public.products.view' , [
            'products' => $products
        ]);
    }

    public function productslatest(){

        $products = Products::latest()->first();
        $latest = Products::find($products->id);

        return view('public.products.view' , [
            'products' => $latest
        ]);
    }

    public function products(){

        $products= Products::latest()->paginate(10);

        return view('public.products.index' , [
            'products' => $products
        ]);
    }

    public function innovatorsView($id){

        $innovators = Innovators::find($id);

        return view('public.innovators.view' , [
            'innovators' => $innovators
        ]);
    }
    public function innovators(){

        $innovators= Innovators::latest()->paginate(10);

        return view('public.innovators.index' , [
            'innovators' => $innovators
        ]);
    }

    public function exhibits(){

        $exhibits= Exhibits::latest()->paginate(10);

        return view('public.exhibits.index' , [
            'exhibits' => $exhibits
        ]);
    }
    public function soon(){
        return view('soon');
    }

    public function contact(){
        return view('contact');
    }
}
