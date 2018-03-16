<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responses extends Model
{
    protected $table = 'responses';

    protected $fillable = [
        'author_id', 'body', 'on_message', 'to_user',
    ];

    public function recipient(){
    	return $this->hasMany('App\User', 'to_user');
    }

    public function author(){
    	return $this->belongsTO('App\User', 'author_id');
    }

    protected $primaryKey = 'id';
}
