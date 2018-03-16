<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
     //coments products in database
    /*protected $guarded = [];*/

    // user who is advertising
    protected $table = 'products';

    protected $fillable = [
        'vendor', 'product_name', 'description', 'price', 'from_user', 'featured_image', 'email', 'telephone', 'working_hours', 'category', 'location', 'slug', 'region',
    ];
    protected $primaryKey = 'id';

    

    public function author() {
    	return $this->belongsTo('App\User', 'from_user');
        
    }

}
