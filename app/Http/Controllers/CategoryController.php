<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::getHierarchy();
        // return $category;
        return view('categories.index', compact('category'));
    }

    public function create()
    {
        $category = Category::getHierarchy();
        // return $category;
        return view('categories.create', compact('category'));
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->fill($request->all());
        $category->save();

        return redirect()->route('categories.index');
    }
}
