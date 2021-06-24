<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\createController;
use App\Http\Controllers\UploadController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// create


Route::get('/pagination',function(){
	return view('pagination');
});

Route::post('/pagination',[createController::class,'pagination']);





Route::get ('/create', function() {
	return view('Create');
});
Route::post('/create', [createController::class, 'createold']);

// read 

// Route::get('/read/{id}', [createController::class, 'read']);

Route::get('/read', function(){
	return view('read');
});
Route::post('/read', [createController::class, 'read']);


// delete

Route::get('/delete', function(){
	return view('delete');
});
Route::post('/delete', [createController::class,'delete']);


//update

Route::get('/edit', function(){
	return view('edit');
});
Route::post('/edit', [createController::class, 'FetchForUpdate']);

Route::post('/update', [createController::class,'update']);


// Route::get('/update', function(){
// 	return view('update');
// });
// Route::post('/update/{id}',[createController::class,'update']);





Route::get('/register', [createController::class,'register']);
Route::post('/register', [createController::class,'create']);


Route::get('upload',[UploadController::class, 'upload']);
Route::post('upload',[UploadController::class, 'uploaded']);


