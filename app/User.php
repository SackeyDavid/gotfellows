<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = [
    'firstname', 'email', 'country', 'telephone', 'middlenames', 'password', 'DOB', 'lastname', 'gender', 'agree','featured_image'
    ];
    protected $primaryKey = 'id';
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'remember_token',
    ];

    public function age() {
        
        /*return $this->*/

                /*$userDob = $this->DOB;
 
        //Create a DateTime object using the user's date of birth.
        $dob = new DateTime($userDob);
         
        //We need to compare the user's date of birth with today's date.
        $now = new DateTime();
         
        //Calculate the time difference between the two dates.
        $difference = $now->diff($date);
         
        //Get the difference in years, as we are looking for the user's age.
        $age = $difference->y;
         
        //Print it out.
        return $age;*/
        /*return $this->Carbon::parse('DOB')->diffInYears(\Carbon::now());*/
    }
    
    public function chats() {
        return $this->hasMany('App\Chats', 'user_id');
    }

    public function personal() {
        return $this->belongsTo('App\Personal', 'from_user');
    }

    public function academic() {
        return $this->belongsTo('App\Academic', 'from_user');
    }

    public function career() {
        return $this->belongsTo('App\Career', 'from_user');
    }

    public function religion() {
        return $this->belongsTo('App\Religion', 'from_user');
    }

    public function favorite() {
        return $this->belongsTo('App\Favorite', 'from_user');
    }
   

}
