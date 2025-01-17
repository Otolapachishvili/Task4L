<?php

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

use Illuminate\Http\Request;
/*
Route::get('/', function () {
    return App\Posts::get();
    
});*/
Route::get("/","PostsController@index");
Route::get("/post/create","PostsController@create");
Route::post("/post/store","PostsController@store")->name("storeposts");
Route::get("/formtosendpostmethod",function(){
	return view("guest.form");
})->name("toredirect");


Route::post("/testrequest",function(Request $request){
	
	return view("guest.table",["newdata"=>$data]);

})->name("posttest");



Route::get("/parameter/{id}",function($id){
	return $id;
})->name("gettest");