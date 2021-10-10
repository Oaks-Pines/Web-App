<x-app-layout>
    
  <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 mt-2">
    <x-ui.alerts/>
  </div>
     
   
   <section class="container mx-auto p-6 font-mono">
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
      <div class="w-full overflow-x-auto">
        <div class="flex space-x-4">
            <p>Categories</p>
            <a href="category/create">Create</a>
           </div>

        <table class="w-full">
          <thead>
            <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
              <th class="px-4 py-3">ID</th>
              <th class="px-4 py-3">NAME</th>
              <th class="px-4 py-3">SUB CATEGORIES</th>
              <th class="px-4 py-3">DATE CREATED</th>
              <th class="px-4 py-3">DATE UPDATED</th>
              <th class="px-4 py-3">ACTIONS</th>
            </tr>
          </thead>
          <tbody class="bg-white">
            @foreach ($categories as $category)
                
            
            <tr class="text-gray-700">
              <td class="px-4 py-3 border">1</td>
              <td class="px-4 py-3 text-ms font-semibold border">{{$category->name}}</td>
              <td class="px-4 py-3 text-xs border">
                <ul class="flex">[
                  @foreach ($category->subCategories as $subCategory)
                      <li class="px-2">{{$subCategory->name}},</li>
                  @endforeach
                ]
                </ul>
              </td>
              <td class="px-4 py-3 text-sm border">{{$category->created_at->format('d/m/Y')}}</td>
              <td class="px-4 py-3 text-sm border">{{$category->updated_at->format('d/m/y')}}</td>
              <td class="px-4 py-3 text-sm border">
                  <div class="flex justify-start space-x-1">
                      <a href="{{route('category.edit', $category)}}" class="p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                          </svg>
                      </a>

                      <form method="POST" action="{{route('category.destroy', $category)}}">
                          @csrf
                          @method('Delete')
                          <button type="submit" class="p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                              </svg>
                          </button>
                      </form>
                  </div>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
        
      </div>
    </div>
  </section>
     
   
 </x-app-layout>