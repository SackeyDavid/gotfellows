<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    //coments table in database
   /* protected $table = 'comments';
    protected $fillable = [
        'body', 'from_user', 'slug', 'on_product',
    ];
   protected $primaryKey = 'id';
*/
    // user who is commented
   protected $guarded = [];

    public function author() {
    	return $this->belongsTO('App\User', 'from_user');
    }

    // returns post of any comment
    public function post(){
    	return $this->belongsTO('App\Posts','on_post');
    }

    // returns post of any comment
    public function replies(){
        return $this->hasMany('App\Replies', 'on_comment');
    }    
}
