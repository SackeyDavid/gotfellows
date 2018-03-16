<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    //
     protected $table = 'academia';

    protected $fillable = [
        'university', 'uni_grad_year', 'college', 'col_grad_year', 'high_school', 'high_grad_year', 'other_school', 'other_grad_year', 'from_user', 'level', 'program', 'class', 'degree', 'category', 'from_personal',
    ];
    protected $primaryKey = 'id';

    

    public function author() {
    	return $this->belongsTo('App\User', 'from_user');
        
    }

    public function person() {
    	return $this->belongsTo('App\Personal', 'from_personal');
        
    }

}
