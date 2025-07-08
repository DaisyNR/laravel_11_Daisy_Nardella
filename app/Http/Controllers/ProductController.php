<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function store(ProductRequest $request){
        
        $name = $request->name;
        $description = $request->description;
        $price = $request->price;
        $img=null;
        
        if ($request->file('img')) {
            $img = $request->file('img')->store('img', 'public');
        }

        Product::create([
            'name'=>$name,
            'description'=>$description,
            'price'=>$price,
            'img'=>$img
        ]);

        return redirect()->back()->with('message','Grazie! Abbiamo caricato il tuo annuncio');

    }

    public function index(){
        $products = Product::all();
        return view('product.index', ['products'=>$products]);
    }

    public function sell(){
        return view('product.sell');
    }
}
