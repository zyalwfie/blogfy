<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        $blogs = $category->blogs;

        return view('blogs', compact('blogs'));
    }
}
