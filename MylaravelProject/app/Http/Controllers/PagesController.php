<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function login(){
        return view('home.login');
    }

    public function index(){
        return view('home.index');
    }

    public function homepage(){
        return view('home.index');
    }

    public function Contractsus(){
        return view('home.Contractsus');
    }


    // public function courseshow()
    // {
    //     $courses = array();

    //     $courese = array(
    //         "course"=> " Programming With Python",
    //         "instructor"=> "Mr. David", 
    //         "Duration" =>"4 Months" ,
    //         "Starts" => "10th February 2022",
    //     );

    //     $course =(object) $course;
    //     $courses [] = $course;

    // }

}
