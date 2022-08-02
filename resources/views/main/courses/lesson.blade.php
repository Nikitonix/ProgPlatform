@extends('layouts.main')
<!--================CM scripts =================-->
<script src="{{asset("codemirror/lib/codemirror.js")}}"></script>
<script src="{{asset("codemirror/mode/clike/clike.js")}}"></script>
<link rel="stylesheet" href="{{asset("codemirror/lib/codemirror.css")}}">
<script src="{{asset("codemirror/mode/php/php.js")}}"></script>
<link href="{{asset("codemirror/theme/dracula.css")}}" rel="stylesheet">
<!--================CM scripts =================-->
@section('content')

    @foreach($lesson as $col)
        <!--================ Hero sm Banner start =================-->
        <section class="hero-banner hero-banner--sm mb-30px">
            <div class="container">
                <div class="hero-banner--sm__content">
                    <h1>Упражнение</h1>
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
                                <h2>{{$col->title}}</h2>
                                <p class="excert">
                                    {!! $col->content !!}
                                </p>
                            </div>
                            <div class="col-lg-12">
                                <div class="quotes">
                                    Напишите функцию, которая реализует алгоритм пузырьковой сортировки.
                                    На вход принимается массив.
                                    Вывести результат при помощи встроенного метода implode.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">
                        Редактор кода
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <form action="{{route('main.courses.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <textarea name="userCode" id="editor" class="p-3" style="height: 142px;">

                    </textarea>

                        <input type="hidden" name="exercise_id" value="{{$col->id}}">
                        <input type="hidden" name="user_id" value="{{$user = Auth::user()->id}}">

                        <input type="submit" class="btn btn-primary" value="Запустить">
                    </form>
                    @if (Session::has('message'))
                        <textarea>{{ Session::get('message') }}</textarea>
                    @endif
                </div>
            </div>
        </div>
        <!-- /.col-->
        </div>
        <script>
            var editor = CodeMirror.fromTextArea(document.getElementById('editor'), {
                mode: {
                    name: 'php',
                    startOpen: true
                },
                matchBrackets: true,
                theme: "dracula",
                lineNumbers: true
            });
        </script>
        <!--================Blog Area =================-->
        </body>
        </html>
    @endforeach
@endsection

