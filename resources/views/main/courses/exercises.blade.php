@extends('layouts.main')

@section('content')
<!--================ Hero sm Banner start =================-->
<section class="hero-banner hero-banner--sm mb-30px">
    <div class="container">
        <div class="hero-banner--sm__content">
            <h1>Упражнения</h1>
        </div>
    </div>
</section>
<!--================ Hero sm Banner end =================-->
<!--================ Exercises section start =================-->
<section class="section-margin">
    <div class="container">
        @php
        $completitions = \App\Models\ExerciseUserActivity::where('user_id', '=',\Illuminate\Support\Facades\Auth::id())->get('exercise_id');
        @endphp

        <div class="row">
            @foreach($exercises as $exercise)
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="card text-center card-pricing">
                    <div class="card-pricing__header">
                        <h4>{{$exercise->title}}</h4>
                    </div>

                    @foreach($completitions as $completition)
                        @if($exercise->id === $completition->exercise_id)
                        <ul class="card-pricing__list">
                                <li><i class="ti-check"></i>Задание пройдено</li>
                            @endif
                        </ul>
                    @endforeach

                        <a href="{{route('main.courses.lesson', $exercise->id)}}">Открыть</a>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--================ Exercises section end =================-->
@endsection
