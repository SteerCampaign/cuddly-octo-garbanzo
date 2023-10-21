@extends('_layouts.main')
@php
    $page->type = 'article';
@endphp

@section('body')
<!-- Blog Article -->
<div class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
  <div class="max-w-2xl">
    <!-- Avatar Media -->
    <div class="flex justify-between items-center mb-6">
      <div class="flex w-full sm:items-center gap-x-5 sm:gap-x-3">
        <div class="flex-shrink-0">
          <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1669837401587-f9a4cfe3126e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Image Description">
        </div>

        <div class="grow">
          <div class="grid sm:flex sm:justify-between sm:items-center gap-2">
            <div>
              <!-- Tooltip -->
              <div class="hs-tooltip inline-block [--trigger:hover] [--placement:bottom]">
                <div class="hs-tooltip-toggle sm:mb-1 block text-left cursor-pointer">
                  <span class="font-semibold text-gray-800 dark:text-gray-200">
                    {{ $page->author }}
                  </span>

                  <!-- Dropdown Card -->
                  <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 max-w-xs cursor-default bg-gray-900 divide-y divide-gray-700 shadow-lg rounded-xl dark:bg-black" role="tooltip">
                    <!-- Body -->
                    <div class="p-4 sm:p-5">
                      <div class="mb-2 flex w-full sm:items-center gap-x-5 sm:gap-x-3">
                        <div class="flex-shrink-0">
                          <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1669837401587-f9a4cfe3126e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Image Description">
                        </div>

                        <div class="grow">
                          <p class="text-lg font-semibold text-gray-200">
                            {{ $page->author }}
                          </p>
                        </div>
                      </div>
                      <p class="text-sm text-gray-400">
                        @if($page->authorDescription)
                            {{$page->authorDescription}}
                        @else
                            {{ $page->author }}
                        @endif
                      </p>
                    </div>
                    <!-- End Body -->

                  </div>
                  <!-- End Dropdown Card -->
                </div>
              </div>
              <!-- End Tooltip -->

              <ul class="text-xs text-gray-500">
                <li class="inline-block relative pr-6 last:pr-0 last-of-type:before:hidden before:absolute before:top-1/2 before:right-2 before:-translate-y-1/2 before:w-1 before:h-1 before:bg-gray-300 before:rounded-full dark:text-gray-400 dark:before:bg-gray-600">
                    {{ date('F j, Y', $page->date) }}
                </li>
              </ul>
            </div>                
            <!-- Button Group -->
            <div>
              <button type="button" class="py-1.5 px-2.5 sm:py-2 sm:px-3 inline-flex justify-center items-center gap-x-1.5 sm:gap-x-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-xs sm:text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                </svg>
                Tweet
              </button>
            </div>
            <!-- End Button Group -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Avatar Media -->
    <!-- Content -->
    <div class="space-y-5 md:space-y-8">
    <div class="space-y-3">
        <h2 class="text-2xl font-bold md:text-3xl dark:text-white">{{ $page->title }}</h2>
    </div>
    @if ($page->cover_image)
    <figure>
        <img class="w-full object-cover rounded-xl" src="{{ $page->cover_image }}" alt="{{ $page->title }}">
        <figcaption class="mt-3 text-sm text-center text-gray-500">
            {{ $page->title }}
        </figcaption>
      </figure>
    @endif
    <div class="space-y-3">
        <p class="text-lg text-gray-800 dark:text-gray-200">@yield('content')</p>
      </div>

      @if ($page->categories)
      <div>        

        @foreach ($page->categories as $i => $category)
            <a
                href="{{ '/blog/categories/' . $category }}"
                title="View posts in {{ $category }}"
                class="m-1 inline-flex items-center gap-1.5 py-2 px-3 rounded-full text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-gray-200"
            >{{ $category }}</a>
        @endforeach
        </div>
      @endif
      <nav class="flex justify-between text-sm md:text-base">
        <div>
            @if ($next = $page->getNext())
                <a href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
                    &LeftArrow; {{ $next->title }}
                </a>
            @endif
        </div>

        <div>
            @if ($previous = $page->getPrevious())
                <a href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
                    {{ $previous->title }} &RightArrow;
                </a>
            @endif
        </div>
    </nav>      
    </div>
    <!-- End Content -->
  </div>
</div>
<!-- End Blog Article -->    
    </div>
</div>
@endsection