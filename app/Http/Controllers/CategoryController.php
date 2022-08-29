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
        return view('categories.index', compact('category'));;
    }


}
