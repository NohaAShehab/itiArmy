<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Course;
use App\Http\Controllers\API\CourseController as apiController;
use App\Http\Controllers\API\CoursesController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/testapi",function (){
    return ["name"=>"noha"];
});


//Route::get("/courses",function (){
//    return Course::all();
//});

//Route::get("/courses",[apiController::class,"index"]);

Route::apiResource("apicourses",CoursesController::class);
