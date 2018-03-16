<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picks extends Model
{
    //

    protected $table = 'picks';

    protected $fillable = [
        'by_user', 'picked_user',
    ];
    protected $primaryKey = 'id';
}
