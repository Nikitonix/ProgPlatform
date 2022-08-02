<?php

namespace App\Http\Controllers\Admin\Documentation;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Documentation;
use App\Models\Exercise;

class EditController extends Controller
{
    public function __invoke($id)
    {
        $categories=Category::all();
        $documentation = Documentation::find($id);
       return view('admin.documentation.edit', compact('documentation', 'categories'));
    }
}
