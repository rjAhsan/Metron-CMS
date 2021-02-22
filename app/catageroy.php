<?php

namespace App;
use App\projects;

use Illuminate\Database\Eloquent\Model;

class catageroy extends Model
{
    protected $fillable = ['name']; 
    
    public function projects(){
        return $this->hasMany('App\projects');
    }



}
