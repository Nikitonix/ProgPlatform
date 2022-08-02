@extends('layouts.main')

@section('content')
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">

    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">

    <!--================ Hero sm Banner start =================-->
    <section class="hero-banner hero-banner--sm mb-30px">
        <div class="container">
            <div class="hero-banner--sm__content">
                <h1>Форум</h1>
            </div>
        </div>
    </section>
    <!--================ Hero sm Banner end =================-->

    <!--================Blog Categorie Area =================-->
    <section class="blog_categorie_area">
        <div class="container">
            <div class="row">
                <section class="content col-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Новая тема</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{route('main.forum.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input class="form-control" type="text" name="title" placeholder="Название темы: ">
                                </div>
                                <h6>Детали темы</h6>
                                <div class="form-group">
                                    <textarea class="form-control" name="content" id="summernote"></textarea>
                                </div>
                                <input type="hidden" name="creator_id" value="{{$user = Auth::user()->id}}">
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i>
                                            Send
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                </section>
            </div>
        </div>
    </section>
    <!-- jQuery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>

    <!-- daterangepicker -->
    <script src="{{asset('plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.js')}}"></script>

    <script>
        $('#summernote').summernote({
            height: 400
        });
    </script>
    <!--================Blog Categorie Area =================-->
@endsection
