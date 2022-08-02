<?php

namespace App\Http\Controllers\Admin\Journal;

use App\Http\Controllers\Controller;
use App\Models\ExerciseUserActivity;

class GradeController extends Controller
{
    public function __invoke(\App\Http\Requests\Admin\Journal\UpdateRequest $request, $id)
    {

             $data = $request->validated();

             $affectedRecords = ExerciseUserActivity::where("id", $id)
                 ->update($data);

             return redirect()->back();
      }
}
