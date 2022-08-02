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
<!--================Blog Categorie Area =================-->
<div class="col-lg-9 col-md-9 blog_details">
    <h2>{{$forumPost->title}}</h2>
             {!! $forumPost->content !!}
</div>
<!--================Blog Categorie Area =================-->
<div class="comments-area">
    @php
    $usersCom = \Illuminate\Support\Facades\DB::table('comments')
    ->where('post_id', '=', $forumPost->id)->get();
    @endphp

    @foreach($usersCom as $comment)
    <div class="comment-list">
        <div class="single-comment justify-content-between d-flex">
            <div class="user justify-content-between d-flex">
                <div class="desc">
                    <h5>
                        @php
                            $username = \Illuminate\Support\Facades\DB::table('users')->where('id', '=', $comment->user_id)->select('name')->get();
                        @endphp
                        {{$username[0]->name}}
                    </h5>
                    <p class="date">{{$comment->created_at}}</p>

                    <p class="comment">
                        {{$comment->message}}
                    </p>
                </div>
            </div>
            <div class="reply-btn">
                <a href="#" class="btn-reply text-uppercase">reply</a>
            </div>
        </div>
    </div>

    @endforeach

</div>

<div class="comment-form">
    <h4>Сообщение</h4>
    <form action="{{route('post.comment.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
        </div>
        <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
        <input type="hidden" name="post_id" value="{{$forumPost->id}}">
        <button type="submit" class="btn btn-primary">Отправить сообщение</button>
    </form>
</div>
@endsection
