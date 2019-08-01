@extends('main')
@section('title', '| Homepage')

@section('content')

        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1 class="display-4">Welcome to My Blog!</h1>
                    <p class="lead">Thank you so much for visiting. This is my test website to build with Laravel. Please read my latest post!</p>
                    <hr class="my-4">
                    <p>I also like trains.</p>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a>
                </div>
            </div>
        </div><!-- end of header .row -->

        <div class="row">
            <div class="col-md-8">

                @foreach($posts as $post)
                <div class="post">
                    <h3 class="">{{ $post->title}}</h3>
                    <p> {{ substr($post->body, 0, 300) }} {{ strlen($post->body) > 300 ? "..." : ""}} </p>
                <a href=" {{ url('blog/'.$post->slug)}}" class="btn btn-primary"> Read More </a>
                </div>
                <hr>
                @endforeach
            </div>
            <div class="col-md-3 col-md-offset-1">Sidebar</div>
        </div>


@endsection
