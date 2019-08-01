@extends('main')

@section('title', '| View Post')

@section('content')
<div class="row">
    <div class="col-md-8">
        <h1 style = 'margin-top: 30px;'>{{ $post->title }}</h1>
        <p class="lead">{{ $post->body}}</p>
    </div>
    <div class="col-md-4">
        <div class="well">
            <dl class="dl-horizontal" style= 'margin-top: 30px;'">
                <dt>URL:</dt>
                <dd><a href="{{ url('blog/'.$post->slug)}}">{{ url('blog/'.$post->slug)}}</a></dd>
                <dt>Created At:</dt>
                <dd> {{ date('j M, Y H:i', strtotime($post -> created_at)) }}</dd>
                <dt>Last Updated:</dt>
                <dd>{{ date('j M, Y H:i', strtotime($post -> updated_at)) }}</dd>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.edit','Edit', array($post->id), array('class'=>'btn btn-primary btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Form::open(['route' => ['posts.destroy', $post -> id], 'method' => 'DELETE']) !!}
                        {!! Form::submit('Delete', ['class' =>'btn btn-danger btn-block']) !!}
                        {!! Form::close() !!}
                    </div>
                    <div class="col-md-12">
                        {{ Html::linkRoute('posts.index', '<<See All posts', [], ['class' => ' btn btn-secondary btn-block btn-h1-spacing'])}}
                    </div>
                </div>
             </dl>
        </div>
    </div>
</div>
@endsection
