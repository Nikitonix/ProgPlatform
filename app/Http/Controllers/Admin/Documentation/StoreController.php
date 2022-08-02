<?php

namespace App\Http\Controllers\Admin\Documentation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Documentation\StoreRequest;
use App\Models\Documentation;
use App\Models\Exercise;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Documentation::firstOrCreate($data);

        return redirect()->route('admin.documentation.index');
    }
}
