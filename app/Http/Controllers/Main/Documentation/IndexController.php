<?php

namespace App\Http\Controllers\Main\Documentation;

use App\Http\Controllers\Controller;
use App\Models\Category;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        return view('main.documentation.index', compact('categories'));
    }
}
