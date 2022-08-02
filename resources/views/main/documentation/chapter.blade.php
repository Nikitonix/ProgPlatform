@extends('layouts.main')
<!--================CM scripts =================-->
<script src="{{asset("codemirror/lib/codemirror.js")}}"></script>
<script src="{{asset("codemirror/mode/clike/clike.js")}}"></script>
<link rel="stylesheet" href="{{asset("codemirror/lib/codemirror.css")}}">
<script src="{{asset("codemirror/mode/php/php.js")}}"></script>
<link href="{{asset("codemirror/theme/dracula.css")}}" rel="stylesheet">
<!--================CM scripts =================-->
@section('content')

    @foreach($chapter as $col)
        <!--================ Hero sm Banner start =================-->
        <section class="hero-banner hero-banner--sm mb-30px">
            <div class="container">
                <div class="hero-banner--sm__content">
                    <h1>{{$col->title}}</h1>
                </div>
            </div>
        </section>

        <!--================ Hero sm Banner end =================-->
        <!--================Blog Area =================-->
        <section class="blog_area single-post-area section-margin--medium">
            <div class="container">
                <div class="row">
                    <div class="posts-list">
                        <div class="single-post row">
                            <div class="exercise-content">
                                <p class="excert">
                                    {!! $col->content !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.col-->
        <!--================Blog Area =================-->
        </body>
        </html>
    @endforeach
@endsection

