<style type="text/css">

.red_button {
  background-color: red;
  border: 1px solid red;
  color: white;
}
</style>
<x-app-layout>
     <x-slot name="header">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
               {{ __('Posts') }}
          </h2>
     </x-slot>

     <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

               <div class="bg-white shadow-sm sm:rounded-lg mb-10">
                    <div class="p-6 flex items-center ">
                         <a href="{{ route('posts.create') }}">
                              <button class = "red_button">Post</button>
                              
                              
                         </a>
                    </div>
               </div>

               <div class="bg-white shadow-sm sm:rounded-lg ">
                    @foreach ($posts as $post)
                    <div class="p-6 border-b border-gray-200 flex items-center justify-between">
                         <div class="flex flex-col ">
                              <span class="text-xs text-gray-800">{{ $post->user->name }}</span>
                              <span class="text-xs text-gray-800">{{ $post->updated_at }}</span>
                         </div>
                         <a href="{{ route('posts.show', $post->id) }}">
                              <p>{{$post->title}}</p>
                         </a>
                         @if (session('status'))
                         <div class="text-blue-400 ml-auto">
                              {{ session('status') }}
                         </div>
                         @endif
                    </div>
                    @endforeach
               </div>
               {{--<div class="flex my-3 py-2 items-center justify-between border-b-2">
               <h2 class="text-lg font-semibold text-gray-900 -mt-1">{{ dd($post) }}</h2>
               <small class="text-sm text-gray-700">{{ $post->updated_at }}</small>
               </div>--}}
               
               <div class="my-5">{{$posts->links()}}</div>

          </div>
     </div>
</x-app-layout>