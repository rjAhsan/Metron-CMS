<?php

namespace App\Http\Controllers;

use App\first;
use Illuminate\Http\Request;

use Alert;
use Validator;

use App\services;
use App\certification;
use App\projects;
use App\client;

class FirstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function seo()
    {
         return view('Admin.Pages.seo');
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

     public function dashboard(){

        $clients=count(client::all());
        $projects=count(projects::all());
        $service=count(services::all());
        $certificaion=count(certification::all());

        // dd($certificaion) ;
        Alert()->success('Welcome Please Read Documentaion Carefully!!..')->persistent('Close');
        return view('Admin.Dashboard',['data1'=>$clients,'data2'=>$projects,'data3'=>$service,'data4'=>$certificaion]);
     }
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\first  $first
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data= first::findOrFail(1);
        // $data=null;
        return view('Admin.Pages.AdminHome',['data'=>$data]);
    }

   
    public function update(Request $request)
    {
        // dd($request->all());

        $rules = array(
            'img' => 'image|mimes:jpeg,png|dimensions:max_width=960,min_width=960,min_hight=647,max_height=647',
            'heading' => 'required|',
            'intro' => 'required|');
             
            $validator = Validator::make($request->all(), $rules);
            if($validator->fails()){
                Alert()->error('Please Enter The Data Correctley!!..')->persistent('Close');

                return redirect('admin/homepage');
            }
              elseif($request->hasfile('img')){
                  
             
                    $file = $request->file('img');
                    $extension = $file->getClientOriginalExtension(); // getting image extension
                    $filename =time().'.'.$extension;
                    $file->move('uploads/images/Homepage/', $filename);
                    $homedata=first::findOrFail(1);
                    $homedata->heading=$request->get('heading');
                    $homedata->intro=$request->get('intro');
                    $homedata->img='uploads/images/Homepage/'.$filename;
                    $homedata->update();
                    alert()->success('HomePage Data Updated.', 'Congrats!');
                    return redirect('admin/homepage');

             
            }
            else{
                    $homedata=first::findOrFail(1);
                    $homedata->heading=$request->get('heading');
                    $homedata->intro=$request->get('intro');
                    $homedata->update();
                    alert()->success('HomePage Data Updated.', 'Congrats!');
                    return redirect('admin/homepage');
            }
                
    }

    
}
