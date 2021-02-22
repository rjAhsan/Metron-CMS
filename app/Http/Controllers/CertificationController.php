<?php

namespace App\Http\Controllers;

use App\certification;
use Illuminate\Http\Request;
use Alert;
use Validator;

class CertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   

        $rules = array(
            'img' => 'required|image|mimes:jpeg,png|dimensions:max_width=300,min_width=280,min_hight=280,max_height=300',
            'name' => 'required',
            );
             
            $validator = Validator::make($request->all(), $rules);
            if($validator->fails()){
                Alert()->error('Please Enter The Data Correctley!!..')->persistent('Close');
                return redirect('/admin/certification');
            }

            else{
                if($request->hasfile('img')) {
                
                    $file = $request->file('img');          
                    $extension = $file->getClientOriginalExtension(); // getting image extension
                    $filename =$request->get('name').time().'.'.$extension;
                    $file->move('uploads/images/Certification/', $filename);
                    
                    $certificationdata=new certification();
                    $certificationdata->name=$request->get('name');
                    $certificationdata->img='uploads/images/Certification/'.$filename;
                    $certificationdata->save();
                    alert()->success('Certfication  Added .', 'Congrats!');
                    return redirect('/admin/certification');
                } 
        
            }   
        
        
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
     * @param  \App\certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $data=certification::orderBy('id', 'desc')->get();
        // $data=null;
        return view('Admin.pages.AdminCertification',['data' => $data]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function edit(certification $certification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, certification $certification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        $cerdata=certification::findOrFail($id);
        
        if($cerdata->delete()){
            alert()->success('DATA DELETED .', 'DELETED!');
            return redirect('/admin/certification');
        }
    
        
    }
}
