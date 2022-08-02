<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, $id)
    {
             $category = Category::updateOrCreate([
            //Add unique field combo to match here
            //For example, perhaps you only want one entry per user:

        ],[
            'title'     => $request->get('title'),
            'preview_text' => $request->get('preview_text'),
            'description'    => $request->get('description'),
        ]);
       return view('admin.categories.show', compact('category'));
    }
}
