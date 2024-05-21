<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage(){

        $products = Product::all()->toArray();

        return view("home-page",compact("products"));
    }


}
