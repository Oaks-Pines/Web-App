@extends('layouts.app')
<head>
    <title>{{$post->title}} | Oaks & Pines Landscaping LTD</title>
</head>

@section('content')

<div class="container" >
    <div class="row">
            <h1><b>{{$post->title}}</b></h1>
<small>Published on {{$post->created_at->format('d-m-Y')}} by <b>{{$post->user->name}}</b></small>


<div class="card">
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" class="img-rounded">                      
  </div>

<p>{!!$post->body!!}</p>

<hr>
        @if (!Auth::guest())
            @if(Auth::user()->id==$post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
            <script>
                
                function ConfirmDelete()
                {
                var x = confirm("Are you sure you want to delete this post?");
                if (x)
                  return true;
                else
                  return false;
                }
              
              </script>

            {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','onsubmit'=>'return ConfirmDelete()','class'=>'pull-right'])!!}
                {!!Form::hidden('_method','DELETE')!!}
                {!!Form::submit('Delete',['class'=>'btn btn-danger'])!!}
            {!!Form::close()!!}
            @endif
        @endif
        </div>

</div>
@endsection