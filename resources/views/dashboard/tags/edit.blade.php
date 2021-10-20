<x-app-layout>
   <h1>Edit Category</h1>
   <form action="{{route('tags.update',$tag)}}" method="POST" class="m-2">
       @csrf
       @method('PUT')

       <div class="mb-4">
           <label class="block text-white-700 text-sm font-bold mb-2" for="name">
             Name
           </label>
           <input name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="name" value="{{$tag->name}}">
           <span class="mt-2 text-xs text-gray-500">Maximum 200 Characters</span>
           <x-jet-input-error for="name" class="mt-2"/>
         </div>

         <x-jet-button>Update</x-jet-button>
   </form>
</x-app-layout>