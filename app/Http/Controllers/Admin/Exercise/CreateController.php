<?php

namespace App\Http\Controllers\Admin\Exercise;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $categories=Category::all();
       return view('admin.exercise.create', compact('categories'));
    }
}
