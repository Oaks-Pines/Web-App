<x-app-layout>
<p>{{$post->title}}</p>
<p>{{$post->body}}</p>

@if (!Auth::guest())
@if(Auth::user()->id==$post->user_id)
<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit Blog</a>

<script>
                
    function ConfirmDelete()
    {
    var x = confirm("Are you sure you want to delete this blog?");
    if (x)
      return true;
    else
      return false;
    }
  
  </script>

{!!Form::open(['route'=>['posts.destroy',$post->id],'method'=>'POST','onsubmit'=>'return ConfirmDelete()','class'=>'pull-right'])!!}
    {!!Form::hidden('_method','DELETE')!!}
    {!!Form::submit('Delete',['class'=>'btn btn-danger'])!!}
{!!Form::close()!!}
@endif
@endif

    
</x-app-layout>