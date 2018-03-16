<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chats extends Model
{
    protected $table = 'chats';

    

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function room() {
        return $this->belongsTo('App\Rooms', 'room_id');
    }



}
