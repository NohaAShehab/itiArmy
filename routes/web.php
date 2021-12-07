<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

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

Route::get("/students/create",
    [StudentController::class, "create"])->name("student.create");

Route::get("/students/{id}",
    [StudentController::class,"getStudentById"])
    ->name("studentprofile");

### route to add new student
Route::post("/students/save",[StudentController::class,"store"])
    ->name("student.store");

Route::get("/students", [StudentController::class,"index"])
    ->name("studentsindex");
Route::delete("/students/{id}/delete", [StudentController::class,"destory"])
    ->name("student.delete");

Route::get("/students/{id}/edit",
    [StudentController::class, "edit"])->name("student.edit");

Route::put("/students/{id}/update",
    [StudentController::class,"update"])->name("student.update");

Route::get("/test/{id}",
    [StudentController::class,"testfunction"]);


Route::view("/css","testcss")->name("mytestcss");
Route::view("/aboutus","aboutus")->name("aboutus");

#########################################

# add new route
Route::get("/cache",function (){
    return "Hello cache";
});


######################3 courses routes
Route::resource("courses",CourseController::class);

//Route::get("/courses/create",[CourseController::class,"create"])
//    ->name("course.create");
//
//Route::post("/courses",[CourseController::class,"store"])
//    ->name("course.store");
//
//Route::get("/courses",[CourseController::class,"index"])
//    ->name("course.index");
//
//Route::get("/courses/{course}",[CourseController::class,"show"])
//    ->name("course.show");
//
//
//Route::get("/courses/{course}/edit",[CourseController::class,"edit"])
//    ->name("course.edit");
//
//Route::put("/courses/{course}",[CourseController::class,"update"])
//    ->name("course.update");
//
//Route::delete("/courses/{course}",[CourseController::class,"destroy"])
//    ->name("course.destory");









