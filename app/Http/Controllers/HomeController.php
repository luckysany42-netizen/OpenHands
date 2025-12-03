<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        $categories = Category::all();
        $product = Product::all(); 
        $products = Product::with(['category'])->get(); 

        return view('pages.home', [
            'categories' => $categories,
            'product' => $product,
            'products' => $products,
        ]);
    }
}
