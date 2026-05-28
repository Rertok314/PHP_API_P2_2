<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller 
{
    public function index()
    { 
        $products = Product::all();
        return view('index', compact('products'));
    }
    
    public function store(Request $r)
    { 
        Product::create($r->all());
        return redirect()->back();
    }

    public function apiView() 
    {
        $products = Product::all();
        return view('api', compact('products'));
    }
}