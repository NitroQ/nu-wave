<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Articles;
use Validator;
use Log;

class ArticleController extends Controller
{
    public function setActive($id)
    {
        $v = Articles::find($id);
        $v->active = 1;
        $v->save();

        return redirect()->back();

    }

    public function setInactive($id)
    {
        $v = Articles::find($id);
        $v->active = 0;
        $v->save();

        return redirect()->back();
    }

    public function index()
    {
        $article = Articles::get();

        return view('admin.articles.index',[
            'article' => $article
        ]);
    }
    
    public function create()
    {
        return view('admin.articles.create');
    }


    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'image' => 'required',
            'title' => 'required',
            'category' => 'required',
            'tag' => 'required',
            'description' => 'required'
        ]);
        
        if ($validator->fails()) {
			return redirect()
				->back()
			    ->withErrors($validator)
				->withInput();
        }

        $destinationPath = 'uploads/articles';
        $photoExtension = $request->file('image')->getClientOriginalExtension(); 
        $file = 'image'.uniqid().'.'.$photoExtension;
        $request->file('image')->move($destinationPath, $file);
        
        $alerts = Articles::firstOrCreate([
            'title' => $request->input('title'),
			'tag'  =>  $request->input('tag'),
            'category'  =>  $request->input('category'),
            'description'  =>  $request->input('description'),
            'image' => $file
        ]);

        return redirect()->route('admin.article.index')->with('flash_message', 'Successfully Added Alert');

    }

    public function edit($id)
    {
        $article = Articles::find($id);

        return view('admin.articles.edit' , [
            'article' => $article
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'tag' => 'required',
            'category' => 'required',
            'description' => 'required'
        ]);
        
        if ($validator->fails()) {
			return redirect()
				->back()
			    ->withErrors($validator)
				->withInput();
        }

        if($request->file('image')!=''){
            $destinationPath = 'uploads/articles';
            $photoExtension = $request->file('image')->getClientOriginalExtension(); 
            $file = 'image'.uniqid().'.'.$photoExtension;
            $request->file('image')->move($destinationPath, $file);

            $alert = Articles::find($id); 
            $alert->title = $request->input('title');
            $alert->tag = $request->input('tag');
            $alert->category  = $request->input('category');
            $alert->description = $request->input('description');
            $alert->image = $file;
            $alert->save();
        }
        else{
            $alert = Articles::find($id); 
            $alert->title = $request->input('title');
            $alert->tag = $request->input('tag');
            $alert->category = $request->input('category');
            $alert->description = $request->input('description');
            $alert->save();
        }

        return redirect()->route('admin.article.index')->with('flash_message', 'Successfully Updated Alert');

    }
    public function delete($id){
        
        $x = Articles::find($id);
        $x->delete();

        return redirect()->route('admin.article.index')->with('flash_message', 'Successfully Deleted Alert');
    }
}
