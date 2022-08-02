<?php

namespace App\Http\Controllers\Admin\Journal;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Exercise;
use App\Models\ExerciseUserActivity;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function __invoke($id)
    {
            $selectionUserByID = DB::table('exercise_user_activities')
            ->where('id', '=', $id)->get();

        return view('admin.journal.student', compact('selectionUserByID'));
    }
}
