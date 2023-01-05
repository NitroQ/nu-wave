<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Carousel;
use Validator;
use Log;
use DB;

class HomepageController extends Controller
{

    public function setActive($id)
    {
        $v = Carousel::find($id);
        $v->active = 1;
        $v->save();

        return redirect()->back();

    }

    public function setInactive($id)
    {
        $v = Carousel::find($id);
        $v->active = 0;
        $v->save();

        return redirect()->back();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousel = Carousel::get();

        return view('admin.carousel.index',[
            'carousel' => $carousel
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.carousel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required'
        ], [
			'image.required' => 'Image is required.'
		]);
        
        if ($validator->fails()) {
			return redirect()
				->back()
			    ->withErrors($validator)
				->withInput();
        }

        try {
			DB::beginTransaction();

            $destinationPath = 'uploads/carousel';
            $photoExtension = $request->file('image')->getClientOriginalExtension(); 
            $file = 'image'.uniqid().'.'.$photoExtension;
            $request->file('image')->move($destinationPath, $file);
            
            $carousel = Carousel::firstOrCreate([
                'image' => $file
            ]);

			DB::commit();
		
		} catch (\Exception $e) {
			Log::error($e);
			DB::rollback();

			return redirect()
				->back()
				->with('flash_message', 'Something went wrong, please try again later.')
				->withInput();
		}


   

        return redirect()->route('admin.carousel.index')->with('flash_message', 'Successfully Added Carousel Image');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $x = Carousel::find($id);
        $x->delete();

        return redirect()->route('admin.carousel.index')->with('flash_message', 'Successfully Deleted Carousel Image');
   
    }
}
