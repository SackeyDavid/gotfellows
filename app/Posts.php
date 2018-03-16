<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'authir_id', 'body', 'featured_image', 'location', 'country', 'tag1', 'tag2', 'tag3', 'tag4', 'tag5', 'audience'
    ];
    protected $primaryKey = 'id';


    public function comments(){
    	return $this->hasMany('App\Comments', 'on_post');
    }

    public function author(){
    	return $this->belongsTO('App\User', 'author_id');
    }

    
}
