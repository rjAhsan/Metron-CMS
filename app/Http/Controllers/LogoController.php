<?php

namespace App\Http\Controllers;

use App\logo;
use Illuminate\Http\Request;
use Alert;
use Validator;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $logo=logo::findOrFail(1);
   
        return view('Admin.logo',['logo'=>$logo]);
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function show(logo $logo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function edit(logo $logo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
           $rules = array( 
                'logoimg' => 'required|image|mimes:jpeg,png|dimensions:max_width=220,max_height=60',
                'logoname' => 'required|max:255|');
            
           $validator = Validator::make($request->all(), $rules);




            if($validator->fails()){
                
                alert()->error('LOGO SIZE OR Format Problem', 'Not Submit');
                return redirect('admin/logo');

               
            }

            if($request->hasfile('logoimg')) 
            {  
               $logoimg=$request->get('logoimg');
               $logoname=$request->get('logoname');
                
                   $file = $request->file('logoimg');
                 
                   $extension = $file->getClientOriginalExtension(); // getting image extension
                   $filename =$logoname.time().'.'.$extension;
                   $file->move('uploads/images/logo/', $filename);
                   // dd($filename);
                   $logodata=logo::find(1); 
                   $logodata->logoname=$logoname;
                   
                   $logodata->logoimage= 'uploads/images/logo/'.$filename;
                   $logodata->update();

                   alert()->success('Logo Updateed', 'Logo Updated successfully');
                   return redirect('admin/logo');
            
               }
              

      
                }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function destroy(logo $logo)
    {
        //
    }

}
