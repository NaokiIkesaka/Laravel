<x-app-layout>
     <x-slot name="header">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
               {{ __('Edit') }}
          </h2>
     </x-slot>

     <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

               <form action="{{ route('posts.update', $post->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="bg-white shadow-sm sm:rounded-lg mb-10">
                         <div class="p-6 flex items-center ">
                              <button type="submit">{{ __('Submit') }}</button>
                         </div>
                    </div>
                    <div class="bg-white shadow-sm sm:rounded-lg flex flex-col items-center p-6">
                         <input type="text" class="px-4 my-5 border shadow rounded w-3/4 @error('title') border-red-400 @endif" name="title" placeholder="title" required value="{{ old('title', $post->title) }}">
                         @error('title')
                         <span class="text-red-400 my-3">
                              {{$message}}
                         </span>
                         @endif
                         <input type="hidden" value="{{ auth()->id() }}" name="user_id">

                         <textarea name="content" class="p-4 my-1 border shadow rounded w-3/4 @error('content') border-red-400 @endif" id="" cols="30" rows="10" required>{{ old('content', $post->content) }}</textarea>

                         @error('content')
                         <span class="text-red-400 my-3">
                              {{$message}}
                         </span>
                         @endif
                    </div>
               </form>
          </div>

     </div>
</x-app-layout>