<?php

namespace App\Http\Controllers\Admin\Documentation;
use App\Http\Controllers\Controller;
use App\Models\Documentation;

class ShowController extends Controller
{
    public function __invoke($id)
    {
        $documentation = Documentation::find($id);
       return view('admin.documentation.show', compact('documentation'));
    }
}
