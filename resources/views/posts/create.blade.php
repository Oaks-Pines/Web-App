<x-app-layout>
    

    <h3><b>Create Blog</b></h3>
 {!! Form::open(['route'=>'posts.store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
 @csrf
    <div class="form-group">
        {{Form::label('title','Title:')}}
        {{Form::text('title','',['class'=>'form-control','placeholder'=>'Enter Title'])}}
    </div>
    <div class="form-group">
            {{Form::label('body','Body:')}}
            {{Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Enter Body'])}}
        </div>
    <div class="form-group">
        {{Form::label('cover_image','Upload Cover Image:')}}
        {{Form::file('cover_image')}}
    </div>
        {{Form::submit('Upload Blog',['class'=>'btn btn-primary','style'=>'width:100%'])}}

{!! Form::close() !!}
</x-app-layout>