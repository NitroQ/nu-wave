<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Products;
use Validator;
use Log;
use DB;

class ProductController extends Controller
{
    public function setActive($id)
    {
        $v = Products::find($id);
        $v->active = 1;
        $v->save();

        return redirect()->back();

    }

    public function setInactive($id)
    {
        $v = Products::find($id);
        $v->active = 0;
        $v->save();

        return redirect()->back();
    }

    public function index()
    {
        $product = Products::paginate(15);

        return view('admin.products.index',[
            'product' => $product
        ]);
    }
    
    public function create()
    {
        return view('admin.products.create');
    }


    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'image' => 'required',
            'title' => 'required',
            'tag' => 'required',
            'category' => 'required',
            'abstract' => 'required', 
            'purpose' => 'required'
            
        ]);
        
        if ($validator->fails()) {
			return redirect()
				->back()
			    ->withErrors($validator)
				->withInput();
        }

        $destinationPath = 'uploads/products';
        $photoExtension = $request->file('image')->getClientOriginalExtension(); 
        $file = 'image'.uniqid().'.'.$photoExtension;
        $request->file('image')->move($destinationPath, $file);
        
        Products::firstOrCreate([
            'title' => $request->input('title'),
			'tag'  =>  $request->input('tag'),
            'category'  =>  $request->input('category'),
            'shop'  =>  $request->input('shop'),
            'abstract'  =>  $request->input('abstract'),
            'purpose'  =>  $request->input('purpose'),
            'date'  =>  $request->input('date'),
            'image' => $file
        ]);

        return redirect()->route('admin.product.index')->with('flash_message', 'Successfully Added Product');

    }

    public function edit($id)
    {
        $product = Products::find($id);

        return view('admin.products.edit' , [
            'product' => $product
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required',
            'title' => 'required',
            'tag' => 'required',
            'category' => 'required',
            'abstract' => 'required', 
            'purpose' => 'required'
            
        ]);
        
        if ($validator->fails()) {
			return redirect()
				->back()
			    ->withErrors($validator)
				->withInput();
        }

        if($request->file('image')!=''){
            $destinationPath = 'uploads/products';
            $photoExtension = $request->file('image')->getClientOriginalExtension(); 
            $file = 'image'.uniqid().'.'.$photoExtension;
            $request->file('image')->move($destinationPath, $file);

            $product = Products::find($id); 
            $product->title = $request->input('title');
            $product->tag = $request->input('tag');
            $product->date = $request->input('date');
            $product->category = $request->input('category');
            $product->shop  = $request->input('shop');
            $product->abstract = $request->input('abstract');
            $product->purpose = $request->input('purpose');
            $product->image = $file;
            $product->save();
        }
        else{
            $product = Products::find($id); 
            $product->title = $request->input('title');
            $product->tag = $request->input('tag');
            $product->date = $request->input('date');
            $product->category = $request->input('category');
            $product->shop  = $request->input('shop');
            $product->abstract = $request->input('abstract');
            $product->purpose = $request->input('purpose');
            $product->save();
        }

        return redirect()->route('admin.product.index')->with('flash_message', 'Successfully Updated Product');

    }
    public function delete($id){
        
        $x = Products::find($id);
        $x->delete();

        return redirect()->route('admin.product.index')->with('flash_message', 'Successfully Deleted Product');
    }
}
