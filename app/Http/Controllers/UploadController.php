<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(){
    	return view('Upload');
    }


    public function uploaded(Request $request){
    	return $request->upfile->store('Uploads');


   	}//
}

