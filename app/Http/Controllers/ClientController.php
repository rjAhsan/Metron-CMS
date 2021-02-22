<?php

namespace App\Http\Controllers;

use App\client;
use Illuminate\Http\Request;
use Alert;
use Validator;

class ClientController extends Controller
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
            'img' => 'required|image|mimes:jpeg,png|dimensions:max_width=190,min_width=190,min_hight=105,max_height=105',
            'cname' => 'required|max:255');
             
            $validator = Validator::make($request->all(), $rules);
            if($validator->fails()){
                Alert()->error('Please Enter The Data Correctley!!..')->persistent('Close');
                return redirect('admin/clients');
            }    
            else{
                if($request->hasfile('img')) 
                 {  
                        $file = $request->file('img');
                        $extension = $file->getClientOriginalExtension(); // getting image extension
                        $filename =$request->get('cname').time().'.'.$extension;
                        $file->move('uploads/images/clients/', $filename);
                        $clientdata=new client();
                        $clientdata->name=$request->get('cname');
                        $clientdata->img='uploads/images/clients/'.$filename;
                        $clientdata->save();
                        alert()->success('Cliens Added .', 'Congrats!');
                        return redirect('admin/clients');
                
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
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   

        $client=client::orderBy('id', 'desc')->get();
        // $client=null;
        return view('admin.clients',['data'=>$client]);
    }

   
   

    public function destroy($id)
    {
        $data=client::findOrFail($id);
      
            if($data->delete()) {
                alert()->success('DATA DELETED  .', 'DELETED!');
                return redirect('admin/clients');
            } 


    }
}
