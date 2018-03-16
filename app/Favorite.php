<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    //
    protected $table = 'favorite';

    protected $fillable = [
        'brand', 'technology', 'meal', 'city', 'pet', 'book', 'tv_show', 'public_figure', 'from_user', 'car', 'building', 'sport', 'category',
    ];
    protected $primaryKey = 'id';

    public function author() {
    	return $this->belongsTo('App\User', 'from_user');
        
    }
}
