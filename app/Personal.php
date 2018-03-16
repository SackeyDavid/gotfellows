<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Personal extends Model
{
    //
     protected $table = 'personal';

    protected $fillable = [
        'name', 'DOB', 'hobby', 'neighbourhood', 'from_user', 'town', 'clan', 'country', 'continent', 'state', 'description','skills', 'category'
    ];
    protected $primaryKey = 'id';

    

    public function author() {
    	return $this->belongsTO('App\User', 'from_user');
        
    }

   /* public function age() {
         
        return Carbon::parse($this->DOB)->diffInYears(Carbon::now());
        /*return $this->DOB->diffInYears(\Carbon::now());
    }*/
   

}
