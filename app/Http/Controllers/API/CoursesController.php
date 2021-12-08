<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Course::all();
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
        Course::create([
            "name"=>$request->name,
            "desc"=>$request->desc,
            "maxgrade"=>$request->maxgrade,
            "user_id"=>$request->user_id
        ]);

        return redirect()->route("apicourses.index");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $apicourse)
    {
        //

        return $apicourse;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $apicourse)
    {
        //
//        return $request;
        $apicourse->update([
            "name"=>$request->name,
            "desc"=>$request->desc,
            "maxgrade"=>$request->maxgrade,
            "user_id"=>$request->user_id
        ]);

        return redirect()->route("apicourses.show",$apicourse);
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
        return 1;

    }
}
