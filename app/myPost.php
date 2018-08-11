<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class myPost extends Model
{
    //Table Name
    // protected $table = 'mypost';

    //Primary Key
    public $primarykey = 'id';
    
    //Timestamps
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
