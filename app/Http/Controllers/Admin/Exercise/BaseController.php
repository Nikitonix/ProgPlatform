<?php

namespace App\Http\Controllers\Admin\Exercise;

use App\Http\Controllers\Controller;
use App\Http\Service\ExerciseService;
use App\Models\Category;

class BaseController extends Controller
{
    public $service;

    public function __construct(ExerciseService $service)
    {
        $this->service = $service;
    }
}
