@extends('_layouts.main')

@section('body')
<!-- Card Blog -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Title -->
  <div class="max-w-2xl text-center mx-auto mb-10 lg:mb-14">
    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Read on our blog</h2>
    <p class="mt-1 text-gray-600 dark:text-gray-400">{{ $page->title }}</p>
  </div>
  <!-- End Title -->

  <!-- Grid -->
  <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10 lg:mb-14">
    @foreach ($page->posts($posts) as $post)      
    <!-- Card -->
    <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800" href="{{$post->getUrl()}}">
        @if ($post->cover_image)        
            <div class="aspect-w-16 aspect-h-9">
                <img class="w-full object-cover rounded-t-xl" src="{{$post->cover_image}}" alt="{{$post->title}}">
            </div>        
        @endif

      <div class="p-4 md:p-5">
        <h3 class="mt-2 text-lg font-medium text-gray-800 group-hover:text-blue-600 dark:text-gray-300 dark:group-hover:text-white">
            {{$post->title}}
        </h3>
        <p class="mt-2 text-gray-600 dark:text-gray-400">
            {{$post->getExcerpt()}}
        </p>

      </div>
    </a>
    <!-- End Card -->
    @endforeach
</div>
<!-- End Card Blog -->
@stop
