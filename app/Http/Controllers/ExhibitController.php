<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Exhibits;
use Validator;
use Log;
use DB;

class ExhibitController extends Controller
{
    public function setActive($id)
    {
        $v = Exhibits::find($id);
        $v->active = 1;
        $v->save();

        return redirect()->back();

    }

    public function setInactive($id)
    {
        $v = Exhibits::find($id);
        $v->active = 0;
        $v->save();

        return redirect()->back();
    }

    public function index()
    {
        $exhibit = Exhibits::paginate(15);

        return view('admin.exhibits.index',[
            'exhibit' => $exhibit
        ]);
    }
    
    public function create()
    {
        return view('admin.exhibits.create');
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

        $destinationPath = 'uploads/exhibits';
        $photoExtension = $request->file('image')->getClientOriginalExtension(); 
        $file = 'image'.uniqid().'.'.$photoExtension;
        $request->file('image')->move($destinationPath, $file);
        
        Exhibits::firstOrCreate([
            'title' => $request->input('title'),
			'tag'  =>  $request->input('tag'),
            'category'  =>  $request->input('category'),
            'shop'  =>  $request->input('shop'),
            'abstract'  =>  $request->input('abstract'),
            'purpose'  =>  $request->input('purpose'),
            'date'  =>  $request->input('date'),
            'image' => $file
        ]);

        return redirect()->route('admin.exhibit.index')->with('flash_message', 'Successfully Added Exhibit');

    }

    public function edit($id)
    {
        $exhibit = Exhibits::find($id);

        return view('admin.exhibits.edit' , [
            'exhibit' => $exhibit
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
            $destinationPath = 'uploads/exhibits';
            $photoExtension = $request->file('image')->getClientOriginalExtension(); 
            $file = 'image'.uniqid().'.'.$photoExtension;
            $request->file('image')->move($destinationPath, $file);

            $exhibit = Exhibits::find($id); 
            $exhibit->title = $request->input('title');
            $exhibit->tag = $request->input('tag');
            $exhibit->date = $request->input('date');
            $exhibit->category = $request->input('category');
            $exhibit->shop  = $request->input('shop');
            $exhibit->abstract = $request->input('abstract');
            $exhibit->purpose = $request->input('purpose');
            $exhibit->image = $file;
            $exhibit->save();
        }
        else{
            $exhibit = Exhibits::find($id); 
            $exhibit->title = $request->input('title');
            $exhibit->tag = $request->input('tag');
            $exhibit->date = $request->input('date');
            $exhibit->category = $request->input('category');
            $exhibit->shop  = $request->input('shop');
            $exhibit->abstract = $request->input('abstract');
            $exhibit->purpose = $request->input('purpose');
            $exhibit->save();
        }


        return redirect()->route('admin.exhibit.index')->with('flash_message', 'Successfully Updated Exhibit');

    }
    public function delete($id){
        
        $x = Exhibits::find($id);
        $x->delete();

        return redirect()->route('admin.exhibit.index')->with('flash_message', 'Successfully Deleted Exhibit');
    }
}
