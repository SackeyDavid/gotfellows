<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    //
    protected $table = 'career';

    protected $fillable = [
        'career', 'occupation', 'company', 'position', 'from_user', 'category',
    ];
    protected $primaryKey = 'id';

    public function author() {
    	return $this->belongsTo('App\User', 'from_user');
        
    }

}
