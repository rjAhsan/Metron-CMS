<?php

namespace App\Http\Controllers;

use App\services;
use Illuminate\Http\Request;
use Alert;
use Validator;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  
    /**
     * Display the specified resource.
     *
     * @param  \App\services  $services
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=services::orderBy('id', 'desc')->get();
    //    $data=null;
        // alert()->success('You have been logged out.', 'Good bye!');
        return view('Admin.pages.AdminServices',['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit(services $services)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $rules = array(
            'img' => 'required|image|mimes:jpeg,png|dimensions:max_width=490,min_width=270,min_hight=180,max_height=340',
            'title' => 'required|max:255',
            'description' => 'required');
             
            $validator = Validator::make($request->all(), $rules);

            if($validator->fails()){
                Alert()->error('Please Enter The Data Correctley!!..')->persistent('Close');
                return redirect('/admin/services');
            }

            else{
                    
          if($request->hasfile('img')){
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =$request->get('title').time().'.'.$extension;
            $file->move('uploads/images/Services/', $filename);
           }
           $Servicedata=new services();
           $Servicedata->title=$request->get('title');
           $Servicedata->description=$request->get('description');
           $Servicedata->img='uploads/images/Services/'.$filename;
           $Servicedata->save();
           alert()->success('Service Added .', 'Congrats!');
           return redirect('/admin/services');

            }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        $servicesdata=services::findOrFail($id);
        
        if($servicesdata->delete()){
            alert()->success('DATA DELETED ', 'DELETED!');
            return redirect('/admin/services');
     
        }
        
        
        //
    }
}
