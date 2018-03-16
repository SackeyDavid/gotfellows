<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Religion extends Model
{
    //
    protected $table = 'religion';

    protected $fillable = [
        'from_user', 'religion', 'sect', 'denomination', 'worship_center', 'category',
    ];
    protected $primaryKey = 'id';

    public function author() {
    	return $this->belongsTo('App\User', 'from_user');
        
    }

}
