<?php

namespace App\Http\Controllers\Admin\Exercise;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use App\Models\Exercise;

class DeleteController extends BaseController
{
    public function __invoke(Exercise $exercise)
    {
        $exercise->delete();
       return redirect()->route('admin.exercise.index');
    }
}
