<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    function index(){
       $products =  Product::all();
        return view('frontend.home', ['products' => $products]);
    }
}
