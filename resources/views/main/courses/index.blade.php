@extends('layouts.main')

@section('content')
<!--================ Hero sm Banner start =================-->
<section class="hero-banner hero-banner--sm mb-30px">
    <div class="container">
        <div class="hero-banner--sm__content">
            <h1>Наши курсы</h1>
        </div>
    </div>
</section>
<!--================ Hero sm Banner end =================-->

<!--================Blog Categorie Area =================-->
<section class="blog_categorie_area">
    <div class="container">
        <div class="row">

            @foreach($categories as $category)
            <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                <div class="categories_post">
                    <img class="card-img rounded-0" src="{{asset('storage/' . $category->preview_image)}}" alt="">

                    <div class="categories_details">
                        <div class="categories_text">
                            <a href="{{route('main.courses.exercises', $category->id)}}">
                                <h5>{{$category->title}}</h5>
                            </a>
                            <div class="border_line"></div>
                            <p>{{$category->preview_text}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--================Blog Categorie Area =================-->
@endsection
