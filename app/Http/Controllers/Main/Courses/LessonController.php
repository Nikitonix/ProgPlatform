<?php

namespace App\Http\Controllers\Main\Courses;

use App\Http\Controllers\Controller;
use App\Models\Exercise;

class LessonController extends Controller
{
    public function __invoke()
    {
        return view('main.courses.lesson');
    }

    public function showLesson($id)
    {
        $lesson = Exercise::where('id', $id)->get();
        return view('main.courses.lesson', compact('lesson'));
    }
}
