<?php

namespace App\Http\Controllers\Admin\Journal;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Exercise;
use App\Models\ExerciseUserActivity;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    public function __invoke($id)
    {
        //Выборка по айди упражнения
        $selectionByID = DB::table('exercise_user_activities')
            ->where('exercise_id', '=', $id)->get();

        return view('admin.journal.students', compact('selectionByID'));
    }
}
