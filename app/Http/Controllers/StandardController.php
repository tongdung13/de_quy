<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class StandardController extends Controller
{
    public function create()
    {
        $categories = Category::getHierarchy();
        return view('standards.create', compact('categories'));
    }
}
