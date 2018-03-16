<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Replies extends Model
{
    //coments table in database
    protected $guarded = [];

    // user who is commented

    public function author() {
    	return $this->belongsTo('App\User', 'from_author');
    }

    // returns replies of any comment
    public function comment(){
    	return $this->belongsTo('App\Comments','on_comment');
    }
}
