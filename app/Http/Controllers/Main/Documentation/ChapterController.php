<?php

namespace App\Http\Controllers\Main\Documentation;

use App\Http\Controllers\Controller;
use App\Models\Documentation;
use App\Models\Exercise;

class ChapterController extends Controller
{
    public function showChapter($id)
    {
        $chapter = Documentation::where('id', $id)->get();
        return view('main.documentation.chapter', compact('chapter'));
    }
}
