<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedbacks extends Model
{
    protected $table = 'feedback';

    protected $fillable = [
        'firstname', 'lastname', 'email', 'subject', 'message',
    ];
    protected $primaryKey = 'id';

}
