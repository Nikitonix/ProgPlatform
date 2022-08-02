@extends('layouts.main')

@section('content')
<!--================ Hero sm Banner start =================-->
<section class="hero-banner hero-banner--sm mb-30px">
    <div class="container">
        <div class="hero-banner--sm__content">
            <h1>Темы</h1>
        </div>
    </div>
</section>
<!--================ Hero sm Banner end =================-->
<!--================ Exercises section start =================-->
<section class="section-margin">
    <div class="container">
        <div class="row">
            @foreach($documentations as $chapter)
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="card text-center card-pricing">
                    <div class="card-pricing__header">
                        <h4>{{$chapter->title}}</h4>
                    </div>
                        <a href="{{route('main.documentation.chapter', $chapter->id)}}">Открыть</a>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--================ Exercises section end =================-->
@endsection
