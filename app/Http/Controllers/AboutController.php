<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Alert;
use Validator;

class AboutController extends Controller
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
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {   
        $data= About::findOrFail(1);
        // $data=null;
        return view('Admin.pages.AdminAbout',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)

    {
         // dd($request->all());
         
            
         $rules = array(
            'SM' => 'image|mimes:jpeg,png|dimensions:max_width=515,min_width=510,min_hight=370,max_height=375',
            'SSM' => 'image|mimes:jpeg,png|dimensions:max_width=375,min_width=370,min_hight=500,max_height=505',
            'SSMM' =>'image|mimes:jpeg,png|dimensions:max_width=195,min_width=190,min_hight=230,max_height=235',
            'SH' => 'required|max:255',
            'SP' => 'required',
            'SSP' => 'required',
            
              );
             
        $validator = Validator::make($request->all(), $rules);
         if($validator->fails()){
            Alert()->error('Please Enter The Data Correctley!!..')->persistent('Close');
            return redirect('/admin/About');

         }
         else{

         $sh=$request->get('SH');
         $sp=$request->get('SP');
         $sm=$request->get('SM');
         $ssm=$request->get('SSM');
         $ssmm=$request->get('SSMM');
         $ssp=$request->get('SSP');
         $ssproect=$request->get('SSprojects');
         $ssemploy=$request->get('SSEmploy');
         $sscustomer=$request->get('SSCustomer');
         $ssaward=$request->get('SSAward');
          
          if($request->hasfile('SM')) {
            
            $file1 = $request->file('SM');
            $extension = $file1->getClientOriginalExtension(); // getting image extension
            $fsimg ='sm'.time().'.'.$extension;
            $file1->move('uploads/images/about/', $fsimg);

            $Aboutdata=About::findOrFail(1);
            $Aboutdata->SH=$sh;
            $Aboutdata->SP=$sp;
            $Aboutdata->SM='uploads/images/about/'.$fsimg;;
            // $Aboutdata->SSM='uploads/images/about/'.$ssimg;;
            // $Aboutdata->SSMM='uploads/images/about/'.$ssecim2;;
            $Aboutdata->SSP=$ssp;
            $Aboutdata->SSprojects=$ssproect;
            $Aboutdata->SSEmploy=$ssemploy;
            $Aboutdata->SSCustomer=$sscustomer;
            $Aboutdata->SSAward=$ssaward;
            $Aboutdata->save();
            alert()->success('Services Updated .', 'Congrats!');
            return redirect('/admin/About');
           }

           elseif($request->hasfile('SSM')) {
            $file2 = $request->file('SSM');
            $extension = $file2->getClientOriginalExtension(); // getting image extension
            $ssimg ='ssm'.time().'.'.$extension;
            $file2->move('uploads/images/about/', $ssimg);

            $Aboutdata=About::findOrFail(1);
            $Aboutdata->SH=$sh;
            $Aboutdata->SP=$sp;
            // $Aboutdata->SM='uploads/images/about/'.$fsimg;;
            $Aboutdata->SSM='uploads/images/about/'.$ssimg;;
            // $Aboutdata->SSMM='uploads/images/about/'.$ssecim2;
            $Aboutdata->SSP=$ssp;
            $Aboutdata->SSprojects=$ssproect;
            $Aboutdata->SSEmploy=$ssemploy;
            $Aboutdata->SSCustomer=$sscustomer;
            $Aboutdata->SSAward=$ssaward;
            $Aboutdata->save();
            alert()->success('Services Updated .', 'Congrats!');
            return redirect('/admin/About');
      

          }

         elseif($request->hasfile('SSMM')) { 
            $file3 = $request->file('SSMM');
            $extension = $file3->getClientOriginalExtension(); // getting image extension
            $ssecim2 ='ssmm'.time().'.'.$extension;
            $file3->move('uploads/images/about/', $ssecim2);
           
            $Aboutdata=About::findOrFail(1);
            $Aboutdata->SH=$sh;
            $Aboutdata->SP=$sp;
            // $Aboutdata->SM='uploads/images/about/'.$fsimg;
            // $Aboutdata->SSM='uploads/images/about/'.$ssimg;
            $Aboutdata->SSMM='uploads/images/about/'.$ssecim2;
            $Aboutdata->SSP=$ssp;
            $Aboutdata->SSprojects=$ssproect;
            $Aboutdata->SSEmploy=$ssemploy;
            $Aboutdata->SSCustomer=$sscustomer;
            $Aboutdata->SSAward=$ssaward;
            $Aboutdata->save();
            alert()->success('Services Updated .', 'Congrats!');
            return redirect('/admin/About');
      
         

         }

          elseif(($request->hasfile('SM')) && ($request->hasfile('SSM'))) { 

            $file1 = $request->file('SM');
            $extension = $file1->getClientOriginalExtension(); // getting image extension
            $fsimg ='sm'.time().'.'.$extension;
            $file1->move('uploads/images/about/', $fsimg);
   
            $file2 = $request->file('SSM');
            $extension = $file2->getClientOriginalExtension(); // getting image extension
            $ssimg ='ssm'.time().'.'.$extension;
            $file2->move('uploads/images/about/', $ssimg);

            $Aboutdata=About::findOrFail(1);
            $Aboutdata->SH=$sh;
            $Aboutdata->SP=$sp;
            $Aboutdata->SM='uploads/images/about/'.$fsimg;
            $Aboutdata->SSM='uploads/images/about/'.$ssimg;
            // $Aboutdata->SSMM='uploads/images/about/'.$ssecim2;
            $Aboutdata->SSP=$ssp;
            $Aboutdata->SSprojects=$ssproect;
            $Aboutdata->SSEmploy=$ssemploy;
            $Aboutdata->SSCustomer=$sscustomer;
            $Aboutdata->SSAward=$ssaward;
            $Aboutdata->save();
            alert()->success('Services Updated .', 'Congrats!');
            return redirect('/admin/About');
      

          }
         
          elseif(($request->hasfile('SM')) && ($request->hasfile('SSMM'))) {
            
            $file1 = $request->file('SM');
            $extension = $file1->getClientOriginalExtension(); // getting image extension
            $fsimg ='sm'.time().'.'.$extension;
            $file1->move('uploads/images/about/', $fsimg);

            $file3 = $request->file('SSMM');
            $extension = $file3->getClientOriginalExtension(); // getting image extension
            $ssecim2 ='ssmm'.time().'.'.$extension;
            $file3->move('uploads/images/about/', $ssecim2);
           

            $Aboutdata=About::findOrFail(1);
            $Aboutdata->SH=$sh;
            $Aboutdata->SP=$sp;
            $Aboutdata->SM='uploads/images/about/'.$fsimg;
            // $Aboutdata->SSM='uploads/images/about/'.$ssimg;
            $Aboutdata->SSMM='uploads/images/about/'.$ssecim2;
            $Aboutdata->SSP=$ssp;
            $Aboutdata->SSprojects=$ssproect;
            $Aboutdata->SSEmploy=$ssemploy;
            $Aboutdata->SSCustomer=$sscustomer;
            $Aboutdata->SSAward=$ssaward;
            $Aboutdata->save();
            alert()->success('Services Updated .', 'Congrats!');
            return redirect('/admin/About');
      
         
   

           }
         
         
      
         elseif(($request->hasfile('SSM')) && ($request->hasfile('SSMM'))) { 
            $file2 = $request->file('SSM');
            $extension = $file2->getClientOriginalExtension(); // getting image extension
            $ssimg ='ssm'.time().'.'.$extension;
            $file2->move('uploads/images/about/', $ssimg);
   
   
            $file3 = $request->file('SSMM');
            $extension = $file3->getClientOriginalExtension(); // getting image extension
            $ssecim2 ='ssmm'.time().'.'.$extension;
            $file3->move('uploads/images/about/', $ssecim2);
           
            $Aboutdata=About::findOrFail(1);
            $Aboutdata->SH=$sh;
            $Aboutdata->SP=$sp;
            // $Aboutdata->SM='uploads/images/about/'.$fsimg;
            $Aboutdata->SSM='uploads/images/about/'.$ssimg;
            $Aboutdata->SSMM='uploads/images/about/'.$ssecim2;
            $Aboutdata->SSP=$ssp;
            $Aboutdata->SSprojects=$ssproect;
            $Aboutdata->SSEmploy=$ssemploy;
            $Aboutdata->SSCustomer=$sscustomer;
            $Aboutdata->SSAward=$ssaward;
            $Aboutdata->save();
            alert()->success('Services Updated .', 'Congrats!');
            return redirect('/admin/About');
      
        }
        
          elseif(($request->hasfile('SSM')) && ($request->hasfile('SSMM')) && ($request->hasfile('SSMM'))) {

            $file1 = $request->file('SM');
            $extension = $file1->getClientOriginalExtension(); // getting image extension
            $fsimg ='sm'.time().'.'.$extension;
            $file1->move('uploads/images/about/', $fsimg);
   
            $file2 = $request->file('SSM');
            $extension = $file2->getClientOriginalExtension(); // getting image extension
            $ssimg ='ssm'.time().'.'.$extension;
            $file2->move('uploads/images/about/', $ssimg);
   
   
            $file3 = $request->file('SSMM');
            $extension = $file3->getClientOriginalExtension(); // getting image extension
            $ssecim2 ='ssmm'.time().'.'.$extension;
            $file3->move('uploads/images/about/', $ssecim2);
           
            $Aboutdata=About::findOrFail(1);
            $Aboutdata->SH=$sh;
            $Aboutdata->SP=$sp;
            $Aboutdata->SM='uploads/images/about/'.$fsimg;
            $Aboutdata->SSM='uploads/images/about/'.$ssimg;
            $Aboutdata->SSMM='uploads/images/about/'.$ssecim2;
            $Aboutdata->SSP=$ssp;
            $Aboutdata->SSprojects=$ssproect;
            $Aboutdata->SSEmploy=$ssemploy;
            $Aboutdata->SSCustomer=$sscustomer;
            $Aboutdata->SSAward=$ssaward;
            $Aboutdata->save();
            alert()->success('Services Updated .', 'Congrats!');
            return redirect('/admin/About');
    
          }
        
          else{
            $Aboutdata=About::findOrFail(1);
            $Aboutdata->SH=$sh;
            $Aboutdata->SP=$sp;
            $Aboutdata->SSP=$ssp;
            $Aboutdata->SSprojects=$ssproect;
            $Aboutdata->SSEmploy=$ssemploy;
            $Aboutdata->SSCustomer=$sscustomer;
            $Aboutdata->SSAward=$ssaward;
            $Aboutdata->save();
            alert()->success('Services Updated .', 'Congrats!');
            return redirect('/admin/About');
          }
        

            
          }
         

         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
  
}
