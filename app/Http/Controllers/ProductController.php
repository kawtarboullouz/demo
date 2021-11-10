<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();
        return view('welcome',compact('products'));
    }
   
    public function create()
    {
        $categories = Category::all();
        return view('products.create',compact('categorie'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        Product::create($input);
        return redirect('/')
    }
    public function delete($product)
    {
         Product::find($product)->delete();
         return redirect()->back();
    }
}
