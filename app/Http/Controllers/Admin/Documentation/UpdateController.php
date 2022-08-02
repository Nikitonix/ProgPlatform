<?php

namespace App\Http\Controllers\Admin\Documentation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Documentation\UpdateRequest;
use App\Models\Documentation;
use App\Models\Exercise;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, $id)
    {
        $documentation = Documentation::updateOrCreate([
            //Add unique field combo to match here
            //For example, perhaps you only want one entry per user:
            'id'   => $id,
        ],[
            'title'     => $request->get('title'),
            'content' => $request->get('content'),
            'category_id'    => $request->get('category_id'),
        ]);

       return view('admin.documentation.show', compact('documentation'));
    }
}
