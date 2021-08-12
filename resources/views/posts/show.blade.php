<x-app-layout>
<p>{{$post->title}}</p>
<p>{{$post->body}}</p>

@if (!Auth::guest())
@if(Auth::user()->id==$post->user_id)
<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit Blog</a>
@endif
@endif

    
</x-app-layout>