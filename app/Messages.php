<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    protected $guarded = [];

    public function recipient(){
    	return $this->hasMany('App\User', 'to_user');
    }

    public function author(){
    	return $this->belongsTO('App\User', 'author_id');
    }

    protected $primaryKey = 'id';
}
