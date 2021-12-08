<?php

namespace App\Http\Controllers;
use App\Providers\AuthServiceProvider;
use Illuminate\Support\Facades\Gate;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Reference;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
//        $this->middleware("auth")->except(["index","show"]);
        $this->middleware("auth")->only(["store","update","destroy"]);

    }
    public function index()
    {
        //
        $courses = Course::all();
        return view("courses.index",["courses"=>$courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view("courses.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
//        dump($request);
        // validation on the data sent by the request
        # save data in the datbase
//        $c = new Course();
//        $c->name= $request->name;
//        $c->desc = $request->desc;
//        $c->maxgrade= $request->maxgrade;
//        $c->save();
        $user= Auth::user();
        dump($user);
        $request->validate([
            "name"=>"required|min:5",
            "maxgrade"=>"integer|gt:1"
        ]);
        Course::create([
            "name"=>$request->name,
            "desc"=>$request->desc,
            "maxgrade"=>$request->maxgrade,
            "frameworks"=>"laravel",
            "user_id"=>$user->id,
            "day"=>"Tuesday"
        ]);
        return redirect()->route("courses.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        # get username of the course_owner
//        $user = User::find($course->user_id);
        return view("courses.show",["mycourse"=>$course],);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
        return view("courses.edit",["course"=>$course]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $user =Auth::user();

        $request->validate([
            "name"=>"required|min:5",
            "maxgrade"=>"integer|gt:1"
        ]);

        $course->update([
           "name"=>$request->name,
           "desc"=>$request->desc,
           "maxgrade"=>$request->maxgrade,
        ]);

        return redirect()->route("courses.show",$course);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
        $course->delete();
        return redirect()->route("courses.index");
    }
}
