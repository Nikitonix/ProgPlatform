@extends('layouts.main')

@section('content')
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
    <div class="container" >
        <div class="row">
            <section class="content col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                      <a href="{{route('main.forum.create')}}"> <button type="submit" class="btn btn-primary">Создать обсуждение</button></a>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 20%">
                                    Тема
                                </th>
                                <th style="width: 30%">
                                    Автор
                                </th>
                                <th style="width: 20%">
                                </th>
                            </tr>
                            </thead>
                            @foreach($forumPosts as $forumPost)
                            <tbody>
                            <tr>
                                <td>
                                  <a href="{{route('main.forum.post', $forumPost->id)}}"> {{$forumPost->title}} </a>
                                </td>
                                <td>
                                    @php
                                    $username = \Illuminate\Support\Facades\DB::table('users')->where('id', '=', $forumPost->creator_id)->select('name')->get();
                                    @endphp
                                    {{$username[0]->name}}
                                    <br>
                                    <small>
                                        {{$forumPost->created_at}}
                                    </small>
                                </td>
                                <td>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png" width="50" height="50">
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </section>
        </div>
    </div>
</section>
<!--================Blog Categorie Area =================-->
@endsection
