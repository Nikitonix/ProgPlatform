<?php

namespace App\Http\Controllers\Admin\Documentation;

use App\Http\Controllers\Controller;
use App\Models\Documentation;
use App\Models\Exercise;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $documentations = Documentation::all();
       return view('admin.documentation.index', compact('documentations'));
    }
}
