@extends('layouts.app')

@section('content')
<div class="container">
 <h1>Edit Post</h1>
 {!! Form::open(['action'=>['PostsController@update',$post->id],'method'=>'POST','enctype'=>'multipart/form-data','style'=>'margin:20px;']) !!}
    <div class="form-group">
        {{Form::label('title','Title:')}}
        {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Enter Title'])}}
    </div>
    <div class="form-group">
            {{Form::label('body','Body:')}}
            {{Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Enter Body'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        <div class="form-group">
                {{Form::file('cover_image')}}
            </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary','style'=>'width:100%'])}}

{!! Form::close() !!}
</div>

@endsection