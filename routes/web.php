<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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
### html
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hamdyprofile', function () {
    return view('helloworld');
});

# blade file
Route::get('/army', function () {
    return view('army');
});

Route::get("/armytest", function (){
    return "Hello World";
});


Route::get("/myarray", function (){
    $courses = ["PHP", "Laravel"];
    return $courses;
});
### create route ---?
## accept the viewname
Route::view("/contactusurl","contactus");

### read the request parameters sent with url
Route::get("/mostafaprofile", function (){
    # request
    $data = request();
    dump($data);
//    dd($data);

    return $data;
});

//Route::get("/profile/{name}/{id}",function ($name,$id){
//        dump($name,$id);
//        return $name;
//});
//


//Route::get("/students/{name}",
//    [StudentController::class,"getStudent"])
//    ->name("studentprofile");
Route::get("/students/{id}",
    [StudentController::class,"getStudentById"])
    ->name("studentprofile");

Route::get("/test/{id}",
    [StudentController::class,"testfunction"]);

Route::get("/students", [StudentController::class,"index"])
    ->name("studentsindex");

Route::view("/css","testcss")->name("mytestcss");
Route::view("/aboutus","aboutus")->name("aboutus");
#########################################














