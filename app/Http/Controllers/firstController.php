<?php
namespace app\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;

class firstController extends Controller


{


  public function form(Request $request){

  	$myName = $request->Name;
  	$myEmail = $request->Email;
  	$myDesignaiton = $request->Designation;


  	$myData = new Student;
  	$myData->Name = $request->Name;
  	$myData->Email = $request->Email;
  	$myData->Designation = $request->Designation;
  	$myData->save();


  } //

}
