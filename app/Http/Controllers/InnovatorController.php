<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Innovators;
use Validator;
use Log;

class InnovatorController extends Controller
{
    public function setActive($id)
    {
        $v = Innovators::find($id);
        $v->active = 1;
        $v->save();

        return redirect()->back();

    }

    public function setInactive($id)
    {
        $v = Innovators::find($id);
        $v->active = 0;
        $v->save();

        return redirect()->back();
    }

    public function index()
    {
        $innovator = Innovators::paginate(15);

        return view('admin.innovators.index',[
            'innovator' => $innovator
        ]);
    }
    
    public function create()
    {
        return view('admin.innovators.create');
    }


    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'image' => 'required',
            'iname' => 'required',
            'tag' => 'required',
            'position' => 'required',
            'about' => 'required',
            'accomplishments' => 'required',
        ]);
        
        if ($validator->fails()) {
			return redirect()
				->back()
			    ->withErrors($validator)
				->withInput();
        }else{
            $destinationPath = 'uploads/innovators';
            $photoExtension = $request->file('image')->getClientOriginalExtension(); 
            $file = 'image'.uniqid().'.'.$photoExtension;
            $request->file('image')->move($destinationPath, $file);
            
            Innovators::firstOrCreate([
                'iname' => $request->input('iname'),
                'tag'  =>  $request->input('tag'),
                'date'  =>  $request->input('date'),
                'position'  =>  $request->input('position'),
                'accomplishments'  =>  $request->input('accomplishments'),
                'about'  =>  $request->input('about'),
                'linkedin'  =>  $request->input('linkedin'),
                'facebook'  =>  $request->input('facebook'),
                'youtube'  =>  $request->input('youtube'),
                'email'  =>  $request->input('email'),
                'website'  =>  $request->input('website'),
                'image' => $file
            ]);
        }

   

        return redirect()->route('admin.innovator.index')->with('flash_message', 'Successfully Added Innovator');

    }

    public function edit($id)
    {
        $innovator = Innovators::find($id);

        return view('admin.innovators.edit',[
            'innovator' => $innovator
        ]);
    }

    public function update(Request $request, $id)
    {
     
        $validator = Validator::make($request->all(), [
            'iname' => 'required',
            'tag' => 'required',
            'position' => 'required',
            'about' => 'required',
            'accomplishments' => 'required',
        ]);
        
        if ($validator->fails()) {
			return redirect()
				->back()
			    ->withErrors($validator)
				->withInput();
        }

        $innovator = Innovators::find($id); 

        if($request->file('image')!=''){
            $destinationPath = 'uploads/innovators';
            $photoExtension = $request->file('image')->getClientOriginalExtension(); 
            $file = 'image'.uniqid().'.'.$photoExtension;
            $request->file('image')->move($destinationPath, $file);

            $innovator->image = $file;
        }

        $innovator->iname = $request->input('iname');
        $innovator->tag  =  $request->input('tag');
        $innovator->date  =  $request->input('date');
        $innovator->position  =  $request->input('position');
        $innovator->accomplishments  =  $request->input('accomplishments');
        $innovator->about  =  $request->input('about');
        $innovator->linkedin  =  $request->input('linkedin');
        $innovator->facebook  =  $request->input('facebook');
        $innovator->youtube  =  $request->input('youtube');
        $innovator->email  =  $request->input('email');
        $innovator->website =  $request->input('website');
        $innovator->save();

        return redirect()->route('admin.innovator.index')->with('flash_message', 'Successfully Updated Innovator');

    }
    public function delete($id){
        
        $x = Innovators::find($id);
        $x->delete();

        return redirect()->route('admin.innovator.index')->with('flash_message', 'Successfully Deleted Innovator');
    }
}
