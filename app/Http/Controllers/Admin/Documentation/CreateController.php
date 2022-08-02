<?php

namespace App\Http\Controllers\Admin\Documentation;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $categories=Category::all();
       return view('admin.documentation.create', compact('categories'));
    }
}
