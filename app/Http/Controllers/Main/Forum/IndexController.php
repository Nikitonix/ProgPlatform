<?php

namespace App\Http\Controllers\Main\Forum;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ForumPost;

class IndexController extends Controller
{
    public function __invoke()
    {
        $forumPosts = ForumPost::all();
        return view('main.forum.index', compact('forumPosts'));
    }
}
