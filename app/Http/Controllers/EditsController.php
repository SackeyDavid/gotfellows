<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Products;
use App\User;
use Auth;
use Session;
use App\Uploads;
use Purifier;
use Storage;
use Image;



class EditsController extends Controller
{

	
      public function editproduct($id)
    {
        
        // find particular product to be edited using it's id
        $product = Products::find($id);
     /*   if (!$products){
            return redirect('/')->withErrors('requested page not found');
        }*/

       
        
        return view('product.editthisproduct')->withProduct($product)->with('id', $product->id);
    }

    
}
