<?php

namespace App\Http\Controllers;

use App\Metron;
use App\Header;
use App\logo;
use App\Slider;
use App\client;
use App\first;
use App\About;
use App\services;
use App\certification;
use App\projects;
use App\catageroy;
use Illuminate\Http\Request;

class MetronController extends Controller
{

    public function index (){
        $header=Header::findOrFail(1);
        $logo=logo::findOrFail(1);
        $slider=slider::all();
        $home=first::findOrFail(1);
        $services=services::all();
        $projects=projects::all();
        // $services=null;
        // $projects=null;
       
        // dd($home);
        // $slider=null;
        // dd($slider); 
        // $logo=null;
        // $header=null;
         return view('Metron.Home', ['data' => $header,'data2'=>$logo,'data3'=>$slider,'data4'=>$home,'data5'=>$services,'data6'=>$projects]);

    }

    
    public function about (){
        $header=Header::findOrFail(1);
        $logo=logo::findOrFail(1);
        $about=About::findOrFail(1);
        $client=client::all();
        //  $client=null;
        // dd($client);
        //   $about=null;
        // dd($about);
        // $logo=null;
        // $header=null;
        return view('Metron.About',['data' => $header,'data2'=>$logo,'data3'=>$about,'data4'=>$client]);
    }
    
    public function services (){
        $header=Header::findOrFail(1);
        $logo=logo::findOrFail(1);
        $services=services::all();
        // $services=null;
        // $header=null;
        return view('Metron.Services',['data' => $header,'data2'=>$logo,'data3'=>$services]);
    }
    
    public function projects (){
        $header=Header::findOrFail(1);
        $logo=logo::findOrFail(1);
        $catageroy=catageroy::all();
        $projects=projects::all();
        // $projects=null;
        // $catageroy=null;

        return view('Metron.projects',['data' => $header,'data2'=>$logo,'data3'=>$catageroy,'data4'=>$projects]);
    }
    
    // public function index (){
    //     return view('Metron.Gallery');
    // }

    public function gallery(){
        return view('Metron.Gallery');
    }

    public function contactus(){
        return view('Metron.contact');
    }
    
    public function certefication (){
        $header=Header::findOrFail(1);
        $logo=logo::findOrFail(1);
        $certification=certification::all();
        // $certification=null;
        // dd($certification);
        // $logo=null;
        return view('Metron.certefication',['data' => $header,'data2'=>$logo,'data3'=>$certification]);
    }
   
}
