<?php

namespace App\Http\Controllers\Main\Forum;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ForumPost;

class ShowController extends Controller
{
    public function __invoke($id)
    {
        $forumPost = ForumPost::find($id);
        return view('main.forum.post', compact('forumPost'));
    }
}
