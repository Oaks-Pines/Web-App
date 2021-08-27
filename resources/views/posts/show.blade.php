<x-app-layout>
  <div class="min-h-screen bg-gray-100 ">
    <div class=" bg-white  mx-auto shadow-lg rounded-lg hover:shadow-xl transition duration-200 max-w-6xl">
      <img class="h-64 ease-out transform hover:scale-110 rounded-t-lg w-full" src="/CoverImages/{{$post->cover_image}}" alt="{{$post->title}}" />
      
      <div class="flex  ml-8 mt-4 float-right">
        {{-- Edit/Delete Buttons --}}
        <a href="/posts/{{$post->id}}/edit"class="px-2 py-1 font-bold bg-blue-700 text-white rounded-lg hover:bg-gray-500 mr-4">Edit</a>
        <a href="#"class="px-2 py-1 font-bold bg-red-600 text-white rounded-lg hover:bg-gray-500 mr-4">Delete</a>
       </div>
      <div class="py-4 px-8">
        <h1 class="hover:cursor-pointer  text-gray-900 font-bold text-2xl tracking-tight">{{$post->title}}</h1>

        <!--author avator-->
        <div class="font-light text-gray-600">
          <a href="#" class="flex items-center mt-2 mb-6">
            <img src="https://avatars.githubusercontent.com/u/71964085?v=4" class=" h-20 mx-4 rounded-full">
                  <h1 class="font-bold text-gray-700 hover:underline">By {{$post->user->name}}</h1>
                  <p>cefe</p>
              </a>
              
        </div>

        <p class="hover:cursor-pointer py-3 bg-gray-100 text-gray-600 leading-6">{{$post->body}}</p>
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