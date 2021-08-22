<x-app-layout>
  <div class="min-h-screen bg-gray-100 ">
    <div class=" bg-white  mx-auto shadow-lg rounded-lg hover:shadow-xl transition duration-200 max-w-6xl">
      <img class="h-64 ease-out transform hover:scale-110 rounded-t-lg w-full" src="/CoverImages/{{$post->cover_image}}" alt="{{$post->title}}" />
      <div class="py-4 px-8">
        <h1 class="hover:cursor-pointer mt-2 text-gray-900 font-bold text-2xl tracking-tight">{{$post->title}}</h1>
        <p class="hover:cursor-pointer py-3 text-gray-600 leading-6">{{$post->body}}</p>
      </div>
    </div>
  </div>



{{-- <p>{{$post->title}}</p>
<img style="width:100%" src="/CoverImages/{{$post->cover_image}}" class="img-rounded">
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
@endif --}}

    
</x-app-layout>