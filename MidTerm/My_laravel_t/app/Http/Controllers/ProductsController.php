<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //



    public function add_product(){
        return view('product.add_product');
    }


    public function add_productsubmit(Request $req){
        $req->validate(
            [
            'name'=>'required ',
            'price'=>'required ',
            'quality'=>'required ',
            'description'=>'required '
            
            ],
            [
                // 'name.required'=>'please provide your username',
                // 'name.max'=>' username should not exceed 20 characters',
                // 'name.min'=>' username should contain at least 5 characters'
            ]
        );
        // $req->uname;
        // $req->password;
        return "<h1>form submitted </h1>";
    }




}
