<?php

namespace App\Http\Controllers\Main\Forum\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Documentation\StoreRequest;
use App\Models\Comment;
use App\Models\Documentation;
use App\Models\Exercise;
use App\Models\ForumPost;

class StoreController extends Controller
{
    public function storeComment(\App\Http\Requests\Main\ForumPost\Comment\StoreRequest $request)
    {
        $data = $request->validated();
        $info = Comment::Create($data);

        return redirect()->route('main.forum.post', $info->post_id);
    }
}
