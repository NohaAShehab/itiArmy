<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // All functions in the controller are public by default

//    function getStudent ($name){
//        #ahmed
//        $students=[
//            "Ahmed"=>["id"=>1,"name"=>"Ahmed","company"=>"iti","img"=>"https://www.pngrepo.com/download/28735/employee.png"],
//            "Omar"=>["id"=>2,"name"=>"Omar","company"=>"iti","img"=>"https://www.pngall.com/wp-content/uploads/5/Job-Employment-PNG-Picture.png"],
//            "Mohamed"=>
//                ["id"=>2,"name"=>"Mohamed","company"=>"iti",
//                    "img"=>"https://i.pinimg.com/originals/74/c7/9a/74c79ad33fa47102510e888209fbcf11.jpg"]
//        ];
//        if (array_key_exists($name,$students)){
//
//            $userdata = $students[$name];
//            $userdata = ["profiledata"=> $students[$name]];
//
//            return view("profile/userprofile",$userdata);
//
//        }else{
//            return "User not found";
//        }
//
//    }

    function getStudentById($id){
        $mystudent =Student::find($id);
//        dump($mystudent);
        $userdata = ["profiledata"=> $mystudent];
        return view("profile/userprofile",$userdata);

    }

    function index(){
//        $students=[
//            "Ahmed"=>["id"=>1,"name"=>"Ahmed","company"=>"iti"],
//            "Omar"=>["id"=>2,"name"=>"Omar","company"=>"iti"],
//            "Mohamed"=>["id"=>2,"name"=>"Mohamed","company"=>"iti"]
//        ];
        $students=Student::all();

        return view("profile/index",["students"=>$students]);

    }
    function testfunction ($id){
//        return $id;
        $students= Student::get();
        dump($students);
    }
}
