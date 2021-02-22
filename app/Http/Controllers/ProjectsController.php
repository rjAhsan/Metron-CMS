<?php

namespace App\Http\Controllers;
use App\catageroy;
use App\projects;
use Alert;
use Validator;

use Illuminate\Http\Request;

class ProjectsController extends Controller
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
    public function create( Request $request)

    {
        $rules = array(
            'img' => 'required|image|mimes:jpeg,png|dimensions:max_width=370,min_width=370,min_hight=240,max_height=240',
            'text' => 'required',
            'bcaption' => 'required'
         );
             
            $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            alert()->error('ENTER DATA CAREFULLY .', 'ERROR!');
            return redirect('admin/projects');
        }

        else{
            if($request->hasfile('img')) 
        {  

               $file = $request->file('img');
               $extension = $file->getClientOriginalExtension(); // getting image extension
               $filename =$request->get('bcaption').time().'.'.$extension;
               $file->move('uploads/images/projects/', $filename);
               // dd($filename);
               $titile=$request->get('bcaption');
               $protetxt=$request->get('text');
               $catageroy=$request->get('catageory');
               $projectdata=new projects();
               $projectdata->title=$titile;
               $projectdata->text=$protetxt;
               $projectdata->img='uploads/images/projects/'.$filename;
               $projectdata->catageroy_id=$catageroy;
               $projectdata->save();
               alert()->success('Project Added .', 'Congrats!');
               
               return redirect('admin/projects');
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
     * @param  \App\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   
        $catageroy=catageroy::all();
        // $catageroy=null;
        // $projects=projects::all();
        $projects=projects::orderBy('id', 'desc')->get();
        //$projects=null;
        // $data= catageroy::find(2)->projects->title
       
       
        return view('Admin.pages.AdminProjects', ['data' => $catageroy,'data2'=> $projects]);
     
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit(projects $projects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, projects $projects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=projects::findOrFail($id);
      
       if($data->delete()) {
        alert()->success('DATA DELETED.', 'DELETED!');

        return redirect('admin/projects');
      } 
    }
}
