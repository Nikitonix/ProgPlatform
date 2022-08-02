<?php

namespace App\Http\Controllers\Main\Documentation;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Documentation;
use App\Models\Exercise;
use Illuminate\Support\Facades\DB;

class DocumentationsController extends Controller
{
    public function showDocuments($id)
    {
        $documentations = DB::table('lang_documentation')->where('category_id', '=', $id)->get();
        return view('main.documentation.chapters', compact('documentations'));
    }
}

