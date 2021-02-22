<?php

namespace App\Http\Controllers;

use App\Header;
use Illuminate\Http\Request;
use Alert;
use Validator;
class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Header::findOrFail(1);
        return view('Admin.topheader', ['data' => $data]);
    
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
     * @param  \App\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function show(Header $header)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function edit(Header $header)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {       
        $rules = array( 
            'Address' => 'required|max:255',
            'phone' => 'required|email');
            $validator = Validator::make($request->all(), $rules);

              if($validator->fails())
              {
                
                alert()->error('Please enter data carefully', 'NOT Submit');
                return redirect('admin/header');
             }

            $address=$request->get('Address');
            $email=$request->get('phone');
            $Headerdata=  Header::findOrFail(1);
            $Headerdata->Address=$address;
            $Headerdata->phone=$email;
            $Headerdata->save();
            alert()->success('Top Header Updated Successully.', 'Congrats!');
            return redirect('admin/header');
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function destroy(Header $header)
    {
        //
    }
}
