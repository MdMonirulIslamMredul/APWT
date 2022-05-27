<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;
use App\Models\Certificate;
use App\Models\Student;

class StudentAPIController extends Controller
{
    //--------Course---------
    public function getallcourse(){
        return Course::all();
    }
    public function getcourse(Request $req){
        return Course::where('id', $req->id)->first();
    }
    public function addcourse(Request $req){

        $course = new Course;
        $course->c_title = $req->c_title;
        $course->c_description = $req->c_description;
        $course->c_price = $req->c_price;
        $course->c_status = $req->c_status;
        $course->c_instructor_fk = $req->c_instructor_fk;
        $course->c_category_fk = $req->c_category_fk;
        $result = $course->save(); //saving the data in result variable

        if($result){
            return ["Result"=>"Course has been saved"];
        }
        else{
            return ["Result"=>"Failed to save the course"];
        }
    }
    public function deletecourse(Request $req){

        $course = Course::where('id',$req->id)->first();

        $result = $course->delete();

        if($result){
            return ["Result"=>"Course has been deleted"];
        }

        else{
            return ["Result"=>"Failed to delete the course"];
        }
    }
    public function updatecourse(Request $req){

        $course = Course::where('id',$req->id)->first();

        $course->c_title = $req->c_title;
        $course->c_description = $req->c_description;
        $course->c_price = $req->c_price;
        $course->id = $req->id;

        $result = $course->save();

        if($result){
            return ["Result"=>"Course has been updated"];
        }
        else{
            return ["Result"=>"Failed to update the course"];
        }

    }

    public function searchcourse($name){
        return Course::where("c_title", "like", "%".$name."%")->get();
    }
    //-----------***--------------

    //-----------Category--------
    public function getallcategory(){
        return Category::all();
    }
    public function getcategory(Request $req){
        return Category::where('id', $req->id)->first();
    }
    public function addcategory(Request $req){

        $category = new Category;
        $category->cat_name = $req->cat_name;
        $result = $category->save(); //saving the data in result variable

        if($result){
            return ["Result"=>"Category has been saved"];
        }
        else{
            return ["Result"=>"Failed to save the Category"];
        }
    }
    public function deletecategory(Request $req){

        $category = Category::where('id',$req->id)->first();

        $result = $category->delete();

        if($result){
            return ["Result"=>"Category has been deleted"];
        }

        else{
            return ["Result"=>"Failed to delete the category"];
        }
    }
    public function updatecategory(Request $req){

        $category = Category::where('id',$req->id)->first();

        $category->cat_name = $req->cat_name;
        $category->id = $req->id;

        $result = $category->save();

        if($result){
            return ["Result"=>"Category has been updated"];
        }
        else{
            return ["Result"=>"Failed to update the category"];
        }
    }
    public function searchcategory($name){
        return Category::where("cat_name", "like", "%".$name."%")->get();
    }
    //-----------***--------------

    //-------Certificate-------
    public function getallcertificate(){
        return Certificate::all();
    }
    public function getcertificate(Request $req){
        return Certificate::where('id', $req->id)->first();
    }
    public function addcertificate(Request $req){

        $certificate = new Certificate;
        $certificate->c_id = $req->c_id;
        $certificate->st_id = $req->st_id;
        $certificate->ins_id = $req->ins_id;
        $certificate->v_id = $req->v_id;
    
        $result = $certificate->save(); //saving the data in result variable

        if($result){
            return ["Result"=>"Certificate has been saved"];
        }
        else{
            return ["Result"=>"Failed to save the certificate data"];
        }
    }
    public function deletecertificate(Request $req){

        $certificate = Certificate::where('id',$req->id)->first();

        $result = $certificate->delete();

        if($result){
            return ["Result"=>"Certificate has been deleted"];
        }

        else{
            return ["Result"=>"Failed to delete the certificate"];
        }
    }
    public function updatecertificate(Request $req){

        $certificate = Certificate::where('id',$req->id)->first();

        $certificate->v_id = $req->v_id;
        $certificate->id = $req->id;

        $result = $certificate->save();

        if($result){
            return ["Result"=>"Certificate has been updated"];
        }
        else{
            return ["Result"=>"Failed to update the certificate"];
        }

    }
    public function searchcertificate($name){
        return Certificate::where("v_id", "like", "%".$name."%")->get();
    }
    //-----------***--------------

    //-------Student-----------
    public function getallstudent(){
        return Student::all();
    }
    public function getstudent(Request $req){
        return Student::where('id', $req->id)->first();
    }
    public function addstudent(Request $req){

        $student = new Student;
        $student->st_name = $req->st_name;
        $student->st_username = $req->st_username;
        $student->st_phone = $req->st_phone;
        $student->st_email = $req->st_email;
        $student->st_address = $req->st_address;
        $student->u_id = $req->u_id;
        
        $result = $student->save(); //saving the data in result variable

        if($result){
            return ["Result"=>"Student has been added"];
        }
        else{
            return ["Result"=>"Failed to add the student data"];
        }
    }
    public function deletestudent(Request $req){

        $student = Student::where('id',$req->id)->first();

        $result = $student->delete();

        if($result){
            return ["Result"=>"Student has been deleted"];
        }

        else{
            return ["Result"=>"Failed to delete the student"];
        }
    }
    public function updatestudent(Request $req){

        $student = Student::where('st_username',$req->st_username)->first();

        $student->st_name = $req->st_name;
        $student->st_phone = $req->st_phone;
        $student->st_email = $req->st_email;
        $student->st_address = $req->st_address;
        $student->st_username = $req->st_username;
        
        $result = $student->save();

        if($result){
            return ["Result"=>"Student has been updated"];
        }
        else{
            return ["Result"=>"Failed to update the student"];
        }

    }
    public function searchstudent($name){
        return Student::where("st_username", "like", "%".$name."%")->get();
    }
    //-----------***--------------
}
