<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Alert;
use Validator;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $data=Slider::orderBy('id', 'desc')->get();
        // $data=null;
        return view('Admin.Slider', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storebanner(Request $request)
    {   
        
           $rules = array(
           'banner' => 'required|image|mimes:jpeg,png|dimensions:max_width=1920,min_width=1920,min_hight=801,max_height=1280',
           'scaption' => 'required|max:255',
           'bcaption' => 'required|max:255');
            
           $validator = Validator::make($request->all(), $rules);

            if($validator->fails()){
                
               Alert()->error('Please Enter The Data Correctley!!..')->persistent('Close');
                return redirect('admin/slider');

            }
            else{
                
            if($request->hasfile('banner')) 
            {  
              $bigcaption=$request->get('bcaption');
              $smallcaption=$request->get('scaption');
             
              
              $file = $request->file('banner');
            
              $extension = $file->getClientOriginalExtension(); // getting image extension
              $filename =time().'.'.$extension;
              $file->move('uploads/images/banner/', $filename);
              // dd($filename);
              $newdata=new Slider(); 
              $newdata->bcaption=$bigcaption;
              $newdata->scaption=$smallcaption;
              $newdata->banner= 'uploads/images/banner/'.$filename;
              $newdata->save();
              alert()->success('Banner Added .', 'Congrats!');
              return redirect('admin/slider');
           }
    
        }

    }

    // public function data(){
    //     $data=Slider::orderBy('id', 'desc')->first();
    //     dd($data->id);
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Slider::findOrFail($id);
      
      if($data->delete()) {
        alert()->success('DATA DELETED .', 'DELETED!');
        return redirect('admin/slider');
      } 




    }
}
