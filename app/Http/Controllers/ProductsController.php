<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function all(){
        $response = Product::all();
        
        //return response($response->toJson())->header('Content-Type', 'application/json');
        return $response;
    
    }
}
