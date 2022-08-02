<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        //переопределяем метод                                            +++++ запись
        $data['preview_image'] = Storage::put('/images', $data['preview_image']);

       Category::firstOrCreate($data);
       return redirect()->route('admin.category.index');
    }
}
