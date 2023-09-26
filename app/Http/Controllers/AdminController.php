<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function admin(){
        return view('backend.admin-dashboard');
    }
    function creteProduct(){
        return view('backend.add-product');
    }
    function storeProduct(Request $req){
        Product::storeOProduct($req);
        return redirect('/add-product')->with('msg', 'Add Successfully');
    }
    function manageProduct(){


        $allproduct = new Product();

//        return $allblogs->all();

        return view("backend.manageProduct",['products'=>$allproduct->all()]);

    }
}
