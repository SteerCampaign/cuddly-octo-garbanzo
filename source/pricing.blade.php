@extends('_layouts.main')

@pushOnce('data')
  <script type="application/javascript">
    const prices = @json($page->prices);
  </script>
@endPushOnce
    

@section('body')
<!-- Pricing -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Title -->
  <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Pricing</h2>
    <p class="mt-1 text-gray-600 dark:text-gray-400">Take your marketing to the next level</p>
  </div>
  <!-- End Title -->

  <!-- Grid -->
  <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:items-center">
    <!-- Card -->
    <div class="flex flex-col sm:col-start-1 lg:col-start-2 lg:col-span-2 text-center">
      <label for="prices-select" class="block text-3xl font-medium mb-2 dark:text-white">How many contacts do you have?</label>
      <select id="prices-select" class="py-3 px-4 pr-9 block border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
        @foreach($page->prices as $leads => $price)
          <option>{{$leads}}</option>
        @endforeach
      </select>
    </div>
    
    <div class="flex flex-col sm:col-start-1 sm:col-span-2 lg:col-start-2 lg:col-span-2 border-2 border-blue-600 text-center shadow-xl rounded-xl p-8 dark:border-blue-700 mb-3">
      <div class="flex justify-center items-center mt-3">
        <label class="min-w-[3.5rem] text-sm text-gray-500 mr-3 dark:text-gray-400">Monthly</label>
        
        <input type="checkbox" id="period" class="relative shrink-0 w-[3.25rem] h-7 bg-gray-100 checked:bg-none checked:bg-blue-600 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none dark:bg-gray-700 dark:checked:bg-blue-600 dark:focus:ring-offset-gray-800

        before:inline-block before:w-6 before:h-6 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200" checked="">

        <label class="relative min-w-[3.5rem] text-sm text-gray-500 ml-3 dark:text-gray-400">
          Annual
          <span class="absolute -top-10 left-auto -right-28">
            <span class="flex items-center">
              <svg class="w-14 h-8 -mr-6" width="45" height="25" viewBox="0 0 45 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M43.2951 3.47877C43.8357 3.59191 44.3656 3.24541 44.4788 2.70484C44.5919 2.16427 44.2454 1.63433 43.7049 1.52119L43.2951 3.47877ZM4.63031 24.4936C4.90293 24.9739 5.51329 25.1423 5.99361 24.8697L13.8208 20.4272C14.3011 20.1546 14.4695 19.5443 14.1969 19.0639C13.9242 18.5836 13.3139 18.4152 12.8336 18.6879L5.87608 22.6367L1.92723 15.6792C1.65462 15.1989 1.04426 15.0305 0.563943 15.3031C0.0836291 15.5757 -0.0847477 16.1861 0.187863 16.6664L4.63031 24.4936ZM43.7049 1.52119C32.7389 -0.77401 23.9595 0.99522 17.3905 5.28788C10.8356 9.57127 6.58742 16.2977 4.53601 23.7341L6.46399 24.2659C8.41258 17.2023 12.4144 10.9287 18.4845 6.96211C24.5405 3.00476 32.7611 1.27399 43.2951 3.47877L43.7049 1.52119Z" fill="currentColor" class="fill-gray-300 dark:fill-gray-700"></path>
              </svg>
              <span class="mt-3 inline-block whitespace-nowrap text-[11px] leading-5 font-semibold tracking-wide uppercase bg-blue-600 text-white rounded-full py-1 px-2.5">Get 1 month free</span>
            </span>
          </span>
        </label>
      </div>            
      <span class="mt-10 font-bold text-5xl text-gray-800 dark:text-gray-200">
        <span id="priceTag" class="font-bold text-2xl -mr-2">$</span>
        </span>
      <p class="mt-2 text-sm text-gray-500">All the basics for starting a new business</p>

      <ul class="mt-7 space-y-2.5 text-sm">
        <li class="flex space-x-2">
          <svg class="flex-shrink-0 h-5 w-5 text-blue-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z" fill="currentColor"/>
          </svg>
          <span id="feature-leads" class="text-gray-800 dark:text-gray-400">            
          </span>
          <span class="text-gray-800 dark:text-gray-400">            
            Leads
          </span>

        </li>

        <li class="flex space-x-2">
          <svg class="flex-shrink-0 h-5 w-5 text-blue-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z" fill="currentColor"/>
          </svg>
          <span class="text-gray-800 dark:text-gray-400">
            Plan features
          </span>
        </li>

        <li class="flex space-x-2">
          <svg class="flex-shrink-0 h-5 w-5 text-blue-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z" fill="currentColor"/>
          </svg>
          <span class="text-gray-800 dark:text-gray-400">
            Product support
          </span>
        </li>
      </ul>

      <a id="signup-link" class="mt-5 inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-md hover:shadow-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800" href="https://app.steercampaign.com/checkout">
        Sign up
      </a>
      <div class="mt-8 md:mt-12 flex justify-center items-center gap-x-3">
        <div class="grid sm:grid-cols-2 lg:grid-cols-2 items-center gap-2">
          <!-- Icon Block -->
          <div class="mt-5">
            <p class="text-sm text-gray-500 dark:text-gray-400">
              Need a custom plan?
            </p>
            <a class="mt-4 py-2 px-3 inline-flex justify-center items-center gap-2 rounded-lg border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-500 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" href="#">
              Contact us
            </a>                        
          </div>          
          <!-- End Icon Block -->      
          
          <!-- Icon Block -->
          <div class="mt-5 lg:ml-10">
            <p class="text-sm text-gray-500 dark:text-gray-400">
              What to try it first?
            </p>            
            <a class="mt-4 py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md bg-gray-100 border border-transparent font-semibold text-gray-500 hover:text-white hover:bg-gray-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-gray-500 focus:ring-offset-2 transition-all text-sm dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-600 dark:text-white dark:focus:ring-offset-gray-800" href="#">
              Start a free trial
            </a>                        
          </div>          
          <!-- End Icon Block -->      
        </div>
      </div>
    </div>
    <!-- End Card -->
  </div>
  <!-- End Grid -->
</div>
<!-- End Pricing -->
@endsection