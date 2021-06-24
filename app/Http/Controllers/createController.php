<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;

class createController extends Controller
{
  public function pagination(){
    $mydata = new Student;
    $myAllData = $mydata::paginate(1);
    return view('pagination',['$datas'=>$myAllData]);
  }











    public function createold(Request $request) {
	
    	$myName = $request->name;
    	$myEmail = $request->email;
    	$myDesignaiton = $request->designation;


    	$myData = new Student;
    	$myData->name = $request->name;
    	$myData->email = $request->email;
    	$myData->designation = $request->designation;
    	$myData->save();


  }

  //   public function read($id) {

  //       $data = Student::find($id);
  //       return $data;

  // }

    public function read(Request $request) {

        $name = $request->name;
        $email = $request->email;
        $designation = $request->designation;
        return Student::all();
    }



    public function delete(Request $request) {
        $email = $request->email;
        return Student::where('email', $email)->delete();
        
    }

    public function FetchForUpdate(Request $request){
      $email = student::where('email','$request->email')->first();
      return view ('update', ['datakey'=>$email]);
    }


    public function update(Request $request){
      $mydata = Student::find($request->$id);
      // dd($mydata);
      $mydata->name = $request->name;
      $mydata->email = $request->email;
      $mydata->designation = $request->designation;
      $mydata->save();

    }




    public function register(){
      return view('register');
    }



//     public function create(Request $request){
//       // $register = Register::create([
//       //   'name'=>$reg->name,
//       //   'phone'=>$reg->phone,
//       //   'email'=>$reg->email,
//       //   'address'=>$reg->address,
//       //   'password'=>$reg->password,
        
//       //   ])};

//       // if($register){
//       //   return view('register');


//       $validatedData = $request->validate([

//         'name'=>'requred|unique|string|max:20',
//         'phone'=>'requred|unique:registers|min:11|max:11',


//         // some reason numeric causes issue
//         'email'=>'requred|email|unique:registers',

//         'password'=>'requred|min:8|max:20|lapha_num',

//         'confirm_password'=>'requred|some:password',
//         'address'=>'string'
//       ]);
//     }
}
