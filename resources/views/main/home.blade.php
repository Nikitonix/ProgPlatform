@extends('layouts.main')

@section('content')
    <main class="side-main">
        <!--================Header Menu Area =================-->
        <section class="hero-banner mb-30px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="hero-banner__img">
                            <img class="img-fluid" src="{{asset("plugins/mainThemePlugins/img/banner/hero-banner.png")}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 pt-5">
                        <div class="hero-banner__content">
                            <h1>Платформа для обучения программированию</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
