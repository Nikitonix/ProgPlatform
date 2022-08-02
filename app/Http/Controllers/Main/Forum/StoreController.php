<?php

namespace App\Http\Controllers\Main\Forum;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Documentation\StoreRequest;
use App\Models\Documentation;
use App\Models\Exercise;
use App\Models\ForumPost;

class StoreController extends Controller
{
    public function __invoke(\App\Http\Requests\Main\ForumPost\StoreRequest $request)
    {
        $data = $request->validated();
        ForumPost::firstOrCreate($data);

        return redirect()->back();
    }
}
