<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    protected $fillable = ['catageroy_id','title','text','img']; 
    public function catageroy()
    {
        return $this->belongsTo('App\catageroy');
    }

}
