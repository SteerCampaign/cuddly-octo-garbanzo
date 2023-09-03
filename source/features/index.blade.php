@extends('_layouts.main')

@section('body')

<!-- Hero -->
<div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 mb-4">
    <!-- Grid -->
    <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center">
      <div>
        <p class="mt-3 text-lg text-gray-800 dark:text-gray-400">Mautic Features</p>
        <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-6xl lg:leading-tight dark:text-white">Mautic: Powerful Features for Success.</h1>
        <p class="mt-3 text-lg text-gray-800 dark:text-gray-400">Unlock the potential of your marketing campaigns with Mautic. Experience personalized automation, in-depth insights, and seamless integration – explore Mautic and elevate your marketing game today!</p>
  

      </div>
      <!-- End Col -->
  
      <div class="relative ml-4">
        <img class="w-full rounded-md" src="/assets/images/features/features.jpeg" alt="Mautic empowers highly converting email marketing campaigns through personalized automation and engagement.">
        <div class="absolute inset-0 -z-[1] bg-gradient-to-tr from-gray-200 via-white/0 to-white/0 w-full h-full rounded-md mt-4 -mb-4 mr-4 -ml-4 lg:mt-6 lg:-mb-6 lg:mr-6 lg:-ml-6 dark:from-slate-800 dark:via-slate-900/0 dark:to-slate-900/0"></div>
  
        <!-- SVG-->
        <div class="absolute bottom-0 left-0">
          <svg class="w-2/3 ml-auto h-auto text-white dark:text-slate-900" width="630" height="451" viewBox="0 0 630 451" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="531" y="352" width="99" height="99" fill="currentColor"/>
            <rect x="140" y="352" width="106" height="99" fill="currentColor"/>
            <rect x="482" y="402" width="64" height="49" fill="currentColor"/>
            <rect x="433" y="402" width="63" height="49" fill="currentColor"/>
            <rect x="384" y="352" width="49" height="50" fill="currentColor"/>
            <rect x="531" y="328" width="50" height="50" fill="currentColor"/>
            <rect x="99" y="303" width="49" height="58" fill="currentColor"/>
            <rect x="99" y="352" width="49" height="50" fill="currentColor"/>
            <rect x="99" y="392" width="49" height="59" fill="currentColor"/>
            <rect x="44" y="402" width="66" height="49" fill="currentColor"/>
            <rect x="234" y="402" width="62" height="49" fill="currentColor"/>
            <rect x="334" y="303" width="50" height="49" fill="currentColor"/>
            <rect x="581" width="49" height="49" fill="currentColor"/>
            <rect x="581" width="49" height="64" fill="currentColor"/>
            <rect x="482" y="123" width="49" height="49" fill="currentColor"/>
            <rect x="507" y="124" width="49" height="24" fill="currentColor"/>
            <rect x="531" y="49" width="99" height="99" fill="currentColor"/>
          </svg>
        </div>
        <!-- End SVG-->
      </div>
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>
  <!-- End Hero -->
<!-- Testimonials with Stats -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto bg-gradient-to-b from-gray-100 to-transparent">
    <!-- Grid -->
    <div class="lg:grid lg:grid-cols-12 lg:gap-16 lg:items-center lg:justify-between">
      <div class="lg:col-span-5 lg:col-start-1">
        <!-- Title -->
        <div class="mb-8">
          <h2 class="mb-2 text-3xl text-gray-800 font-bold lg:text-4xl dark:text-gray-200">
            A single destination for all your essential marketing tools
          </h2>
          <p class="text-gray-600 dark:text-gray-400">
            From robust automation to detailed reporting and versatile integrations, Mautic offers a comprehensive toolkit to cater to all your marketing needs.
          </p>
        </div>
        <!-- End Title -->

      </div>
      <!-- End Col -->
  
      <div class="mt-10 lg:mt-0 lg:col-span-6 lg:col-end-13">
        <div class="space-y-6 sm:space-y-8">
          <!-- List -->
          <ul class="grid grid-cols-2 divide-y divide-y-2 divide-x divide-x-2 divide-gray-200 overflow-hidden dark:divide-gray-700">
            <li class="flex flex-col -m-0.5 p-4 sm:p-8">
              <div class="flex items-end gap-x-2 text-3xl sm:text-5xl font-bold text-gray-800 mb-2 dark:text-gray-200">
                2.2k+
              </div>
              <p class="text-sm sm:text-base text-gray-600 dark:text-gray-400">
                forks on GitHub, making it the most popular open source marketing automation project
              </p>
            </li>
  
            <li class="flex flex-col -m-0.5 p-4 sm:p-8">
              <div class="flex items-end gap-x-2 text-3xl sm:text-5xl font-bold text-gray-800 mb-2 dark:text-gray-200">
                <svg class="w-4 h-4 text-blue-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M9 14.4452C9 14.9504 8.55229 15.36 8 15.36C7.44772 15.36 7 14.9504 7 14.4452V3.38868L1.70711 8.23079C1.31658 8.58806 0.683417 8.58806 0.292893 8.23079C-0.0976311 7.87353 -0.0976311 7.29429 0.292893 6.93703L7.11612 0.694919C7.60427 0.248339 8.39573 0.248341 8.88388 0.694919L15.7071 6.93703C16.0976 7.29429 16.0976 7.87353 15.7071 8.23079C15.3166 8.58806 14.6834 8.58806 14.2929 8.23079L9 3.38868V14.4452Z" fill="currentColor"/>
                </svg>
                6k
              </div>
              <p class="text-sm sm:text-base text-gray-600 dark:text-gray-400">
                Stars on Github, meaning developers and marketers love it
              </p>
            </li>  
          </ul>
          <!-- End List -->
        </div>
      </div>
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>
  <!-- End Testimonials with Stats -->

  @include('features._features-blocks')  
  @include('_layouts.cta')  
@endsection