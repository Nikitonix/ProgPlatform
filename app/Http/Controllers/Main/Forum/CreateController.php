<?php

namespace App\Http\Controllers\Main\Forum;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CreateController extends Controller
{
    public function __invoke()
    {
       return view('main.forum.create');
    }
}
