<?php

namespace App\Http\Controllers;

use App\catageroy;
use Illuminate\Http\Request;
use Alert;
use Validator;

class CatageroyController extends Controller
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
        'name' => 'required|max:255');
             
         $validator = Validator::make($request->all(), $rules);
         if($validator->fails()){
                alert()->error('Please Enter The Data Correctley!!..')->persistent('Close');
                return redirect('admin/catageroy');
            }
        $catageroydata=new catageroy();
        $catageroydata->name=$request->get('name');
        $catageroydata->save();
        alert()->success('Catageroy Added .', 'Congrats!');
        return redirect('admin/catageroy');
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
     * @param  \App\catageroy  $catageroy
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   

        $data=catageroy::orderBy('id', 'desc')->get();
        // $data=null;
        return view('Admin.catageroy',['data'=>$data]);
    }

   


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\catageroy  $catageroy
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=catageroy::findOrFail($id);
      
        if($data->delete()) {
            alert()->success('DATA DELETED  .', 'Deleted!');
         return redirect('admin/catageroy');
       } 
    }
}
