<?php

namespace App\Http\Controllers\Admin\Documentation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use App\Models\Documentation;
use App\Models\Exercise;

class DeleteController extends Controller
{
    public function __invoke($id)
    {
        Documentation::where('id', $id)->delete();

        return redirect()->route('admin.documentation.index');
    }
}
