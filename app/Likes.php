<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    protected $table = 'likes';

    protected $fillable = [
        'post_id', 'value', 'from_user'
    ];
    protected $primaryKey = 'id';

    

    public function author() {
    	return $this->belongsTo('App\User', 'from_user');
        
    }
}
