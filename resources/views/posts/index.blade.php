<x-app-layout>
    <div class="flex mb-3 ">
        <div class=" flex w-1/3  h-12">
            @auth
            <a href="{{ route('posts.create') }}" class="md:inline-block mx-auto bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Create New Blog</a>
            @endauth
        </div>

        <div class="flex w-2/3  h-12">
            <div class="pt-2 relative mx-auto text-gray-600">
                <form action="{{ route('posts.search') }}" method="GET" role="search">

                <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                  type="search" name="search" placeholder="Search...">
                <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                  <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                    viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                    width="512px" height="512px">
                    <path
                      d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                  </svg>
                </button>
            </form>
              </div>
            </div>
        </div>
    

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