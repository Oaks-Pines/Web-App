<x-app-layout>
    <h1>Create Categories</h1>
    <form action="{{route('category.create')}}" method="POST" class="m-2">
        @csrf
        <div class="mb-4">
            <label class="block text-white-700 text-sm font-bold mb-2" for="name">
              Name
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="name">
            <x-jet-input-error for="name" class="mt-2"/>
          </div>

          <x-jet-button>Create</x-jet-button>
    </form>
 </x-app-layout>