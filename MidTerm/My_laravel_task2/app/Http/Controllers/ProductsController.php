<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use App\Models\product;


class ProductsController extends Controller
{
    //

    public function index(){
        return view('product.index');
    }


    public function product(){
        return view('product.index');
    }

    public function add_product(){
        return view('product.add_product');
    }


    public function add_productsubmit(Request $req){
        $this->validate($req,
            [
            'name'=>'required ',
            'price'=>'required ',
            'quantity'=>'required ',
            'description'=>'required '
            
            ],
            [
                // 'name.required'=>'please provide your username',
                // 'name.max'=>' username should not exceed 20 characters',
                // 'name.min'=>' username should contain at least 5 characters'
            ]
        );
        
        $st = new Product();
        $st->name = $req->name;
        $st->price = $req->price;
        $st->quantity = $req->quantity;
        $st->description = $req->description;
        $st->save();


        return "<h1>Product added</h1>";
    }

    public function list_product(){

        
        $Products = Product::all();

       
        //return $Products;   

        return view('Product.list_product')
        ->with('Products',$Products);
    }


}
