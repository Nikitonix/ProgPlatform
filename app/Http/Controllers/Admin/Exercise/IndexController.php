<?php

namespace App\Http\Controllers\Admin\Exercise;

use App\Http\Controllers\Controller;
use App\Models\Exercise;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $exercises = Exercise::all();
       return view('admin.exercise.index', compact('exercises'));
    }
}
