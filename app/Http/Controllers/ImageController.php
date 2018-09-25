<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImageRequest;

class ImageController extends Controller
{
    public function uploadImage(ImageRequest $request){
    	if ($request->hasFile('image')) {
    		$image = request('image');
    		$imagename = $image->getClientOriginalName();
    		$request->image->storeAs('public',$imagename);
    	}
    	else{
    		return "false";
    	}
    }
}
