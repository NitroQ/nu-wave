<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Articles;
use Validator;
use Log;
use DB;

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
        $article = Articles::paginate(15);

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
            'tag' => 'required',
            'author' => 'required',
            'title' => 'required',
            'description' => 'required'
        ], [
			'image.required' => 'Image is required.',
            'tag.required' => 'Tag is required.',
            'author.required' => 'Author is required.',
            'title.required' => 'Title is required.',
            'description.required' => 'Description is required.'
		]);
        if ($validator->fails()) {

			return redirect()
				->back()
			    ->withErrors($validator)
				->withInput();
        }else{
            $destinationPath = 'uploads/articles';
            $photoExtension = $request->file('image')->getClientOriginalExtension(); 
            $file = 'image'.uniqid().'.'.$photoExtension;
            $request->file('image')->move($destinationPath, $file);
            
            DB::beginTransaction();
            Articles::firstOrCreate([
                'title' => $request->input('title'),
                'tag'  =>  $request->input('tag'),
                'author' => $request->input('author'),
                'date'  =>  $request->input('date'),
                'description'  =>  $request->input('description'),
                'image' => $file
            ]);
            DB::commit();
            Log::info("image loaded");
            return redirect()->route('admin.article.index')->with('flash_message', 'Successfully Added Article');
        }

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
            'author' => 'required',
            'description' => 'required'
        ]);
        
        if ($validator->fails()) {
			return redirect()
				->back()
			    ->withErrors($validator)
				->withInput();
        }
        DB::beginTransaction();
        if($request->file('image')!=''){
            $destinationPath = 'uploads/articles';
            $photoExtension = $request->file('image')->getClientOriginalExtension(); 
            $file = 'image'.uniqid().'.'.$photoExtension;
            $request->file('image')->move($destinationPath, $file);

            $article = Articles::find($id); 
            $article->title = $request->input('title');
            $article->tag = $request->input('tag');
            $article->author = $request->input('author');
            $article->date = $request->input('date');
            $article->description = $request->input('description');
            $article->image = $file;
            $article->save();
        }
        else{
            $article = Articles::find($id); 
            $article->title = $request->input('title');
            $article->author = $request->input('author');
            $article->tag = $request->input('tag');
            $article->date = $request->input('date');
            $article->description = $request->input('description');
            $article->save();
        }
        DB::commit();
        return redirect()->route('admin.article.index')->with('flash_message', 'Successfully Updated Article');

    }
    public function delete($id){
        
        $x = Articles::find($id);
        $x->delete();

        return redirect()->route('admin.article.index')->with('flash_message', 'Successfully Deleted Article');
    }
}
