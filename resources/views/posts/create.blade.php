@extends('main')

@section('title', '| Create New Post')

@section('stylesheets')
    {!! Html::style('css/parsley.css')!!}
@endsection

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            {!! Form::open(array('route' => 'posts.store','data-parsley-validate' =>'')) !!}
            {{ Form::label('title','Title:')}}
             {{ Form::text('title',null,array('class'=>'form-control','required'=>'','maxlength' => '255')) }}
             {{ Form:label('slug', 'Slug:')}}
             {{ Form:text('slug' , null, ['class' => 'form-control','required'=>'', 'minlength' =>'5', 'maxlength'=>'255'])}}
             {{ Form::label('body','Post Body:') }}
             {{ Form::textarea('body',null,array('class'=>'form-control','required'=>'')) }}
             <br>
            {{ Form::submit('Create new post',array('class'=>'btn btn-success btn-block')) }}
            {!! Form::close() !!}

        </div>
    </div>

@endsection

@section('scripts')

        {!! Html::style('js/parsley.min.js')!!}

@endsection
