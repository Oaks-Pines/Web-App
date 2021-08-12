<x-app-layout>
    @if (!Auth::guest())
    @if(Auth::user()->id==$post->user_id)
    <h3><b>Edit Blog</b></h3>
 {!! Form::open(['route'=>['posts.update',$post->id],'method'=>'POST','enctype'=>'multipart/form-data','style'=>'margin:20px;']) !!}
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
            {{Form::label('cover_image','Upload Cover Image:')}}
                {{Form::file('cover_image')}}
            </div>
        {{Form::submit('Edit Blog',['class'=>'btn btn-primary','style'=>'width:100%'])}}

{!! Form::close() !!}

    @endif
    @endif
    
        
    </x-app-layout>