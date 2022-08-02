<?php

namespace App\Http\Controllers\Admin\Exercise;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Exercise;

class EditController extends BaseController
{
    public function __invoke(Exercise $exercise)
    {
        $categories=Category::all();
       return view('admin.exercise.edit', compact('exercise', 'categories'));
    }
}
