<?php

namespace App\Http\Controllers\Admin\Journal;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Exercise;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
       return view('admin.journal.index', compact('categories'));
    }
}
