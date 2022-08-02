<?php

namespace App\Http\Controllers\Admin\Exercise;

use App\Http\Controllers\Controller;
use App\Models\Exercise;

class ShowController extends BaseController
{
    public function __invoke(Exercise $exercise)
    {
       return view('admin.exercise.show', compact('exercise'));
    }
}
