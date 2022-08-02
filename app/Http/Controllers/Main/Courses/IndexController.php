<?php

namespace App\Http\Controllers\Main\Courses;

use App\Http\Controllers\Controller;
use App\Models\Category;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        return view('main.courses.index', compact('categories'));
    }
}
