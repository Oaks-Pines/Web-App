<x-app-layout>
    @auth
    <a href="{{ route('posts.create') }}">CREATE NEW BLOG</a>
    @endauth

    <p class="text-5xl text-center">BLOGS</p>
    @if(count($posts)>0)
    @foreach ($posts as $post)
    <div class=" w-full lg:max-w-full lg:flex mb-3 justify-center">
        <script>
           $("div").click(function(){
   window.location=$(this).find("a").attr("href"); return false;
});
});

        </script>
        <div onclick="location.href='{{ route('posts.show', $post->id) }}'" class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('/CoverImages/{{$post->cover_image}}')" title="{{$post->title}}">
            <a href="/"></a>
        </div>
        <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
          <div class="mb-8">
            <p class="text-sm text-gray-600 flex items-center">
              <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
              </svg>
              Members only
            </p>
            <div class="text-gray-900 font-bold text-xl mb-2"><a href="{{ route('posts.show', $post->id) }}" class="no-underline ...">{{$post->title}}</a></div>
            <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
          </div>
          <div class="flex items-center">
            <img class="w-10 h-10 rounded-full mr-4" src="/img/jonathan.jpg" alt="{{$post->user->name}}">
            <div class="text-sm">
              <p class="text-gray-900 leading-none">{{$post->user->name}}</p>
              <p class="text-gray-600">{{$post->created_at->format('d-m-Y')}}</p>
            </div>
          </div>
        </div>
      </div>

    @endforeach
    {{ $posts->links() }}
    @else
    <div class="bg-orange-100 border-l-4 flex border-orange-500 text-orange-700 p-4" role="alert">
        <p class="font-bold">No Blogs Available</p>
        @auth
        <p>Create new blog.</p>
        @endauth
      </div>
    @endif
</x-app-layout>