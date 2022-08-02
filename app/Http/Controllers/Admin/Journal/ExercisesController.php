<?php

namespace App\Http\Controllers\Admin\Journal;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Exercise;

class ExercisesController extends Controller
{
    public function __invoke($id)
    {
        $exercises = Category::find($id)->exercises()->get();
        return view('admin.journal.exercises', compact('exercises'));
    }
}
