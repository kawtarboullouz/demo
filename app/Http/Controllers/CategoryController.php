<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index',compact('categories'));
    }
   
    public function create()
    {
        $categories = Category::all();
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        Category::create($input);
        return redirect('/category')
    }
}
