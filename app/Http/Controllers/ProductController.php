<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function store(Request $request){

        $name = $request->name;
        $description = $request->description;
        $price = $request->price;

        Product::create([
            'name'=>$name,
            'description'=>$description,
            'price'=>$price,
        ]);

        return redirect()->back();

    }

    public function index(){
        $products = Product::all();
        return view('product.index', ['products'=>$products]);
    }
}
