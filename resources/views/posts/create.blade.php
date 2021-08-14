<x-app-layout>
    

    <h3><b class="text-lg font-bold text-gray-600">Create Blog</b></h3>
 {!! Form::open(['route'=>'posts.store','method'=>'POST','enctype'=>'multipart/form-data','class'=>'w-full max-w-sm']) !!}
 @csrf
 <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
        {{Form::label('title','Title:',['class'=>'block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4'])}}
    </div>
    <div class="md:w-2/3">
        {{Form::text('title','',['class'=>'bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500','placeholder'=>'Enter Title'])}}
    </div>
 </div>

 <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
        {{Form::label('body','Body:',['class'=>'block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4'])}}
    </div>
    <div class="md:w-2/3">
        {{Form::textarea('body','',['class'=>'ckeditor bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500','placeholder'=>'Enter Body'])}}
    </div>
 </div>

 <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
        {{Form::label('cover_image','Upload Cover Image:',['class'=>'block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4'])}}
    </div>
    <div class="md:w-2/3">
        <div class="relative h-40 rounded-lg border-dashed border-2 border-gray-200 bg-white flex justify-center items-center hover:cursor-pointer">
        <div class="absolute">
            <div class="flex flex-col items-center "> <i class="fa fa-cloud-upload fa-3x text-gray-200"></i> <span class="block text-gray-400 font-normal">Attach your cover image here</span> <span class="block text-gray-400 font-normal">or</span> <span class="block text-blue-400 font-normal">Browse Images</span> </div>
        </div>
        {{Form::file('cover_image',['class'=>'bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 opacity-0'])}}
        </div>
        <div class="flex justify-between items-center text-gray-400"> <span>Accepted file type:.jpg,.png </span> <span class="flex items-center "><i class="fa fa-lock mr-1"></i> secure</span> </div>

    </div>
 </div>

        {{Form::submit('Upload Blog',['class'=>'bg-blue-500 hover:bg-blue-700 text-white font-bold w-full py-2 px-4 rounded-full'])}}
{!! Form::close() !!}
</x-app-layout>