<?php

namespace App\Http\Controllers\Admin\Exercise;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Exercise\UpdateRequest;
use App\Models\Exercise;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Exercise $exercise)
    {
        $data = $request->validated();
        $exercise = $this->service->update($data, $exercise);
       return view('admin.exercise.show', compact('exercise'));
    }
}
