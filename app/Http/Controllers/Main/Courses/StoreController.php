<?php

namespace App\Http\Controllers\Main\Courses;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main\Courses\StoreRequest;
use App\Models\ExerciseUserActivity;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $code = $data['userCode'];
        //echo "UserCode: " . $code . "<br/>";

        require_once(public_path('tests\bubble.php'));
        $result = validate_code($code);


        if($result[1] === 'true')
        {
                ExerciseUserActivity::updateOrCreate([
                'user_id'   => Auth::user()->id,
                    'exercise_id' => $request->get('exercise_id'),
            ],[
                'userCode'     => $request->get('userCode'),
            ]);
            Session::flash('message', "Вывод кода: " . $result[0] . "\n" . "Тест успешно пройден!");
            return redirect()->back();
        }


        Session::flash('message', "Вывод кода: " . $result[0]);
        return redirect()->back();
    }
}


