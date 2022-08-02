<?php

namespace App\Http\Controllers\Main\Courses;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Exercise;

class ExercisesController extends Controller
{
    public function __invoke()
    {
        $exercises = Exercise::all();
        return view('main.courses.exercises', compact('exercises'));
    }

    public function showExercises($id)
    {
        $exercises = Category::find($id)->exercises()->get();
        return view('main.courses.exercises', compact('exercises'));
    }
}
