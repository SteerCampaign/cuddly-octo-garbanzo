@extends('_layouts.main')

@section('body')
<!-- Blog Article -->
<div class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
  <div class="max-w-2xl">
    <!-- Avatar Media -->
    <div class="flex justify-between items-center mb-6">
      <div class="flex w-full sm:items-center gap-x-5 sm:gap-x-3">
        @if($page->authorPic)
        <div class="flex-shrink-0">
          <img class="h-12 w-12 rounded-full" src="{{$page->authorPic}}" alt="{{$page->author}}">
        </div>
        @endif

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
                      @if($page->authorPic)
                        <div class="flex-shrink-0">
                          <img class="h-8 w-8 rounded-full" src="{{$page->authorPic}}" alt="{{$page->author}}">
                        </div>
                      @endif
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