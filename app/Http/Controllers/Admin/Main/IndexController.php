<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Exercise;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data = [];
        $data['usersCount'] = User::all()->count();
        $data['categoriesCount'] = Category::all()->count();
        $data['exercisesCount'] = Exercise::all()->count();
        return view('admin.main.index', compact('data'));
    }
}
