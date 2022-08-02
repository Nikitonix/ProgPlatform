<?php

namespace App\Http\Controllers\Admin\Exercise;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Exercise\StoreRequest;
use App\Models\Exercise;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);

       return redirect()->route('admin.exercise.index');
    }
}
