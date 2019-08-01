@extends('main')

@section('title', '| View Post')

@section('content')
{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
<div class="row">
    <div class="col-md-8">
			{{ Form::label('title', 'Title:', ['style' => 'margin-top: 30px;']) }}
            {{ Form::text('title', null, ["class" => 'form-control form-control-lg',]) }}

            {{ Form::label('slug', 'Slug:',['style' => 'margin-top: 30px;']) }}
			{{ Form::text('slug', null, ["class" => 'form-control form-control']) }}

			{{ Form::label('body', "Body:", ['style' => 'margin-top: 30px;']) }}
			{{ Form::textarea('body', null, ['class' => 'form-control']) }}
        </div>

        <div class="col-md-4">
        <div class="well">
            <dl class="dl-horizontal">
                <dt>Created At:</dt>
                <dd> {{ date('j M, Y H:i', strtotime($post -> created_at)) }}</dd>
                <dt>Last Updated:</dt>
                <dd>{{ date('j M, Y H:i', strtotime($post -> updated_at)) }}</dd>
                <hr>
				<div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                    </div>
                        <div class="col-sm-6">
                            {{ Form::submit('Save Changes' ,['class' =>'btn btn-success btn-block']) }}
                        </div>
                    </div>
             </dl>
            </div>
        </div>
        {{ Form::close()}}
    </div>
    @endsection
