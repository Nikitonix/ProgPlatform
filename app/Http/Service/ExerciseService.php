<?php

namespace App\Http\Service;

use App\Models\Exercise;
use Illuminate\Support\Facades\DB;

class ExerciseService
{
     public function store ($data)
     {
         try {
             DB::beginTransaction();
             Exercise::firstOrCreate($data);
             DB::commit();
         }catch (\Exception $exception)
         {
             DB::rollBack();
             abort(500);
         }

     }

     public function update($data, $exercise)
     {
         try{
             DB::beginTransaction();
             $exercise->update($data);
             DB::commit();
         }catch (\Exception $exception)
         {
             DB::rollBack();
             abort (500 );
         }
         return $exercise;
     }
}
