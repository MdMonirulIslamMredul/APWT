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

    public function register(){
        return view('home.register');
    }
    


    public function loginsubmit(Request $req){
        $req->validate(
            [
            'uname'=>'required | min:5 |max:20',
            'password'=>'required | same:uname'
            ],
            [
                'uname.required'=>'please provide your username',
                'uname.max'=>' username should not exceed 20 characters',
                'uname.min'=>' username should contain at least 5 characters'
            ]
        );
        // $req->uname;
        // $req->password;
        return "<h1>form submitted with $req->uname and $req->password</h1>";
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
