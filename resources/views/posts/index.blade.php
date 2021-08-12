<x-app-layout>
    <a href="{{ route('posts.create') }}">CREATE NEW BLOG</a>

    <h3>BLOGS</h3>
    @if(count($posts)>0)
    @foreach ($posts as $post)
    <p><a href="/posts/{{$post->id}}">{{$post->title}}</a></p>
    @endforeach
    {{ $posts->links() }}
    @else
    <p>No posts found</p>
    @endif
</x-app-layout>