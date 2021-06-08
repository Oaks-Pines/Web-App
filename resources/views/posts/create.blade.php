@extends('layouts.app')

@section('content')

<div class="container">
 <h3><b>Create Post</b></h3>
 {!! Form::open(['action'=>'PostsController@store','method'=>'POST','enctype'=>'multipart/form-data','style'=>'margin:20px;']) !!}
    <div class="form-group">
        {{Form::label('title','Title:')}}
        {{Form::text('title','',['class'=>'form-control','placeholder'=>'Enter Title'])}}
    </div>
    <div class="form-group">
            {{Form::label('body','Body:')}}
            {{Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Enter Body'])}}
        </div>
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary','style'=>'width:100%'])}}

{!! Form::close() !!}

</div>

@endsection