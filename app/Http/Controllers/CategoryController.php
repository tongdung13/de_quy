<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $category = Category::getHierarchy();
        return $category;

        $current = 1;
        $page = intval($request['page']);

        if ($page != null) {
            $current = $page;
        }

        $collection = collect($category);
        $lesson = $collection->forPage($current, 10);
        $chuck = $collection->chunk(10);
        $total_page = $chuck->count();
        $list_arr = [];
        foreach ($lesson as $key => $value) {
            array_push($list_arr, $value);
        }
        // return $category;
        return view('categories.index', compact(
            'category',
            'page'
        ));
    }

    public function create()
    {
        $category = Category::getHierarchy();
        // return $category;
        return view('categories.create', compact(
            'category',
            'page'
        ));
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->fill($request->all());
        if (empty($request->get('parent_id'))) {
            $category->parent_id = 0;
        }
        $category->save();

        return redirect()->route('categories.index');
    }
}
