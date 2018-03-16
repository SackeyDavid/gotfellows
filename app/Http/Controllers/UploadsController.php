<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use Redirect;
use Session;
use Auth;
use App\Uploads;
use App\User;
use App\Products;

class UploadsController extends Controller
{
    public function index() {
    	return view('upload_image');
    }

    public function multiple_upload($id) {

        $product = Products::find($id);
    	// getting all of the post data
    	$files = Input::file('images');

    	//making count of uploaded images
    	$file_count = count($files);

    	// start counting how many uploads
    	$uploadcount = 0;

    	foreach ($files as $file) {
    		$rules = array('file' => 'required'); //required|mimes:png,gif,jpeg,txt,pdf,doc
    		$validator = Validator::make(array('file' => $file), $rules);
    		if($validator->passes()){
    			$destinationPath = 'uploads/images'; //upload folder in public directory
    			$filename = $file->getClientOriginalName();
    			$upload_success = $file->move($destinationPath, $filename);
    			$uploadcount ++;

    			//save in database
    			$extension = $file->getClientOriginalExtension();
    			/*$entry = new Uploads();*/

    			/*$entry->mime = $file->getClientMimeType();*/
    			/*$entry->original_filename = $filename;*/
                $product->featured_image = $filename;
    			/*$entry->filename = $file->getFilename().'.'.$extension;
    			$entry->from_user = Auth::user()->id;*/
    			/*$entry->save();*/
                $product->save();

    		}
    	}

    	 
 
    	if($uploadcount == $file_count) {
    		Session::flash('success', 'Hi '.Auth::user()->name.', image uploaded successfully!');
    		return Redirect::to('upload');
    	}
        else {
        	return Redirect::to('upload')->withInput()->withErrors($validator);
    	}


    }

    
}
