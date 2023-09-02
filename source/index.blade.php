@extends('_layouts.main')

@section('body')
<!-- Hero -->
<div class="relative overflow-hidden pt-10 pb-10">
  <!-- Gradients -->
  <div aria-hidden="true" class="flex absolute -top-96 left-1/2 transform -translate-x-1/2">
    <div class="bg-gradient-to-r from-violet-300/50 to-purple-100 blur-3xl w-[25rem] h-[44rem] rotate-[-60deg] transform -translate-x-[10rem] dark:from-violet-900/50 dark:to-purple-900"></div>
    <div class="bg-gradient-to-tl from-blue-50 via-blue-100 to-blue-50 blur-3xl w-[90rem] h-[50rem] rounded-fulls origin-top-left -rotate-12 -translate-x-[15rem] dark:from-indigo-900/70 dark:via-indigo-900/70 dark:to-blue-900/70"></div>
  </div>
  <!-- End Gradients -->

  <div class="relative">
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
      <div class="max-w-2xl text-center mx-auto">
        <!-- Title -->
        <div class="mt-5 max-w-2xl">
          <h1 class="block font-semibold text-gray-800 text-4xl md:text-5xl lg:text-6xl dark:text-gray-200">
            Marketing automation that <span class="text-blue-600">makes sense</span>
          </h1>
        </div>
        <!-- End Title -->

        <div class="mt-5 max-w-3xl">
          <p class="text-lg text-gray-600 dark:text-gray-400">Unleash Your Marketing Potential with Mautic: Your Open Source Solution!</p>
        </div>

        <!-- Buttons -->
        <div class="mt-8 grid gap-3 w-full sm:inline-flex sm:justify-center">
          <a class="py-3 px-6 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-800 text-white hover:bg-white hover:text-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-800 focus:ring-offset-2 transition-all text-sm dark:text-white dark:hover:bg-blue-800 dark:hover:border-blue-900 dark:focus:ring-blue-900 dark:focus:ring-offset-blue-800 border-2 border-blue-900" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
              <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z" clip-rule="evenodd" />
            </svg>            
            Signup
          </a>
          <a class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold text-gray-800 hover:bg-gray-800 hover:text-white focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition-all text-sm dark:text-white dark:hover:bg-gray-800 dark:hover:border-gray-900 dark:focus:ring-gray-900 dark:focus:ring-offset-gray-800 border-2 border-gray-900" href="#">
            Get a demo
          </a>
        </div>
        <!-- End Buttons -->
      </div>
    </div>
  </div>
</div>
<!-- End Hero -->

<!-- Clients -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Title -->
  <div class="w-2/3 sm:w-1/2 lg:w-1/3 mx-auto text-center mb-6">
    <h2 class="text-gray-600 dark:text-gray-400 font-semibold">Small businesses and enterprises worldwide place their trust in Steer Campaign.</h2>
  </div>
  <!-- End Title -->

  <div class="flex justify-center gap-x-6 sm:gap-x-12 lg:gap-x-24">
    <img class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto sm:mx-0 text-gray-500" src="https://lifestyleproduction.com/wp-content/uploads/LPG-Logo-Small.png">
    <img class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto sm:mx-0 text-gray-500" src="https://theme.zdassets.com/theme_assets/9951510/ff338631b5ae6f43106e6b3b006e37ecbd048744.svg">
    <img class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto sm:mx-0 text-gray-500" src="https://iabaustralia.com.au/wp-content/uploads/2020/04/logo_black.svg">
  </div>
</div>
<!-- End Clients -->


<!-- Features -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto bg-gradient-to-r from-blue-200/50 ">
  <!-- Grid -->
  <div class="md:grid md:grid-cols-2 md:items-center md:gap-12 xl:gap-32">
    <div>
      <img class="rounded-xl" src="/assets/images/homepage/whatis.jpg" alt="Image Description">
    </div>
    <!-- End Col -->

    <div class="mt-5 sm:mt-10 lg:mt-0">
      <div class="space-y-6 sm:space-y-8">
        <!-- Title -->
        <div class="space-y-2 md:space-y-4">
          <h2 class="font-bold text-3xl lg:text-4xl text-gray-800 dark:text-gray-200">
            What is Steer Campaign?
          </h2>
          <p class="text-gray-500">
            Steer Campaign is a dedicated service provider tailored for Mautic, the open-source marketing automation system. We specialize in delivering comprehensive hosting, support, customization, and expertise to help businesses harness the full potential of Mautic for their marketing endeavors.
          </p>
          <p class="text-gray-500">
            Get a demo to learn about our services, or get started with a trial account to experience the power of Mautic.
          </p>
        <!-- Buttons -->
        <div class="mt-8 grid gap-3 w-full sm:inline-flex sm:justify-center">
          <a class="py-3 px-6 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-800 text-white hover:bg-white hover:text-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-800 focus:ring-offset-2 transition-all text-sm dark:text-white dark:hover:bg-blue-800 dark:hover:border-blue-900 dark:focus:ring-blue-900 dark:focus:ring-offset-blue-800 border-2 border-blue-900" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
              <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z" clip-rule="evenodd" />
            </svg>            
            Signup
          </a>
          <a class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold text-gray-800 hover:bg-gray-800 hover:text-white focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition-all text-sm dark:text-white dark:hover:bg-gray-800 dark:hover:border-gray-900 dark:focus:ring-gray-900 dark:focus:ring-offset-gray-800 border-2 border-gray-900" href="#">
            Get a demo
          </a>
        </div>
        <!-- End Buttons -->

        </div>
        <!-- End Title -->

      </div>
    </div>
    <!-- End Col -->
    
  </div>
  <!-- End Grid -->
</div>
<!-- End Features -->


<!-- Icon Blocks -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Grid -->
  <div class="grid md:grid-cols-2 gap-12">
    <div class="lg:w-3/4">
      <h2 class="text-3xl text-gray-800 font-bold lg:text-4xl dark:text-white">
        Your marketing automation needs, covered.
      </h2>
      <p class="mt-3 text-gray-800 dark:text-gray-400">
        Mautic empowers your marketing team with a comprehensive suite of automation tools, spanning email, SMS, push notifications, and more. The beauty of Mautic lies in its open-source nature, making it not only powerful but also cost-effective. Say goodbye to hidden fees, vendor lock-ins, and unexpected price hikes – with Mautic, you're in full control of your marketing strategy without breaking the bank.
      </p>
    </div>
    <!-- End Col -->

    <div class="space-y-6 lg:space-y-10">
      <!-- Icon Block -->
      <div class="flex">
        <!-- Icon -->
        <span class="flex-shrink-0 inline-flex justify-center items-center w-[46px] h-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto dark:bg-slate-900 dark:border-gray-700 dark:text-gray-200">
          <svg class="w-5 h-5" width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
        </svg>
        </span>
        <div class="ml-5 sm:ml-8">
          <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-gray-200">
            Email marketing
          </h3>
          <p class="mt-1 text-gray-600 dark:text-gray-400">
            Email marketing with Mautic is a game-changer, offering powerful automation and analytics without any hidden costs.
          </p>
          <a href="/features/email-marketing/" class="mt-3 inline-flex items-center gap-x-2 text-sm font-semibold text-gray-800 dark:text-gray-200">
            Learn more
            <svg class="w-2.5 h-2.5 transition ease-in-out group-hover:translate-x-1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M0.975821 6.92249C0.43689 6.92249 -3.50468e-07 7.34222 -3.27835e-07 7.85999C-3.05203e-07 8.37775 0.43689 8.79749 0.975821 8.79749L12.7694 8.79748L7.60447 13.7596C7.22339 14.1257 7.22339 14.7193 7.60447 15.0854C7.98555 15.4515 8.60341 15.4515 8.98449 15.0854L15.6427 8.68862C16.1191 8.23098 16.1191 7.48899 15.6427 7.03134L8.98449 0.634573C8.60341 0.268455 7.98555 0.268456 7.60447 0.634573C7.22339 1.00069 7.22339 1.59428 7.60447 1.9604L12.7694 6.92248L0.975821 6.92249Z" fill="currentColor"/>
            </svg>
          </a>
        </div>
      </div>
      <!-- End Icon Block -->

      <!-- Icon Block -->
      <div class="flex">
        <!-- Icon -->
        <span class="flex-shrink-0 inline-flex justify-center items-center w-[46px] h-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto dark:bg-slate-900 dark:border-gray-700 dark:text-gray-200">
          <svg class="flex-shrink-0 w-6 h-6 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
          </svg>
        </span>
        <div class="ml-5 sm:ml-8">
          <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-gray-200">
            SMS marketing
          </h3>
          <p class="mt-1 text-gray-600 dark:text-gray-400">
            Connect with your customers across various channels affordably and efficiently.
          </p>
          <a href="/features/sms-marketing/" class="mt-3 inline-flex items-center gap-x-2 text-sm font-semibold text-gray-800 dark:text-gray-200">
            Learn more
            <svg class="w-2.5 h-2.5 transition ease-in-out group-hover:translate-x-1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M0.975821 6.92249C0.43689 6.92249 -3.50468e-07 7.34222 -3.27835e-07 7.85999C-3.05203e-07 8.37775 0.43689 8.79749 0.975821 8.79749L12.7694 8.79748L7.60447 13.7596C7.22339 14.1257 7.22339 14.7193 7.60447 15.0854C7.98555 15.4515 8.60341 15.4515 8.98449 15.0854L15.6427 8.68862C16.1191 8.23098 16.1191 7.48899 15.6427 7.03134L8.98449 0.634573C8.60341 0.268455 7.98555 0.268456 7.60447 0.634573C7.22339 1.00069 7.22339 1.59428 7.60447 1.9604L12.7694 6.92248L0.975821 6.92249Z" fill="currentColor"/>
            </svg>
          </a>
        </div>
      </div>
      <!-- End Icon Block -->

      <!-- Icon Block -->
      <div class="flex">
        <!-- Icon -->
        <span class="flex-shrink-0 inline-flex justify-center items-center w-[46px] h-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto dark:bg-slate-900 dark:border-gray-700 dark:text-gray-200">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12a7.5 7.5 0 0015 0m-15 0a7.5 7.5 0 1115 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077l1.41-.513m14.095-5.13l1.41-.513M5.106 17.785l1.15-.964m11.49-9.642l1.149-.964M7.501 19.795l.75-1.3m7.5-12.99l.75-1.3m-6.063 16.658l.26-1.477m2.605-14.772l.26-1.477m0 17.726l-.26-1.477M10.698 4.614l-.26-1.477M16.5 19.794l-.75-1.299M7.5 4.205L12 12m6.894 5.785l-1.149-.964M6.256 7.178l-1.15-.964m15.352 8.864l-1.41-.513M4.954 9.435l-1.41-.514M12.002 12l-3.75 6.495" />
          </svg>
        </span>
        <div class="ml-5 sm:ml-8">
          <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-gray-200">
            Segmentation, automation, personalization, and more
          </h3>
          <p class="mt-1 text-gray-600 dark:text-gray-400">
            Mautic delivers segmentation, automation, personalization, and beyond, all in one comprehensive solution.
          </p>
          <a href="/features/sms-marketing/" class="mt-3 inline-flex items-center gap-x-2 text-sm font-semibold text-gray-800 dark:text-gray-200">
            Learn more
            <svg class="w-2.5 h-2.5 transition ease-in-out group-hover:translate-x-1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M0.975821 6.92249C0.43689 6.92249 -3.50468e-07 7.34222 -3.27835e-07 7.85999C-3.05203e-07 8.37775 0.43689 8.79749 0.975821 8.79749L12.7694 8.79748L7.60447 13.7596C7.22339 14.1257 7.22339 14.7193 7.60447 15.0854C7.98555 15.4515 8.60341 15.4515 8.98449 15.0854L15.6427 8.68862C16.1191 8.23098 16.1191 7.48899 15.6427 7.03134L8.98449 0.634573C8.60341 0.268455 7.98555 0.268456 7.60447 0.634573C7.22339 1.00069 7.22339 1.59428 7.60447 1.9604L12.7694 6.92248L0.975821 6.92249Z" fill="currentColor"/>
            </svg>
          </a>
        </div>
      </div>
      <!-- End Icon Block -->
    </div>
    <!-- End Col -->
  </div>
  <!-- End Grid -->
</div>

<!-- Testimonials -->
<div class="relative overflow-hidden">
  <div class="max-w-[85rem] px-4 py-12 sm:px-6 lg:px-8 lg:py-16 mx-auto">
    <!-- Gradients -->
    <div aria-hidden="true" class="flex absolute left-0 -z-[1]">
      <div class="bg-blue-300 opacity-20 blur-3xl w-[1036px] h-[300px] dark:bg-purple-900 dark:opacity-20"></div>
    </div>
    <!-- End Gradients -->

    <!-- Grid -->
    <div class="lg:grid lg:grid-cols-6 lg:gap-8 lg:items-center">
      <div class="hidden lg:block lg:col-span-2">
        <img class="rounded-xl" src="/assets/images/homepage/relaxed-people.jpg" alt="Steer Campaign makes you relax while running Mautic">
      </div>
      <!-- End Col -->

      <div class="lg:col-span-4">
        <!-- Blockquote -->
        <blockquote>
          <p class="text-xl font-medium text-gray-800 lg:text-2xl lg:leading-normal dark:text-gray-200">
            Installing and maintaining Mautic can be challenging, but Steer Campaign removes that burden.
          </p>
          <footer class="mt-6">
            <div class="flex items-center">
              <div class="lg:hidden flex-shrink-0">
                <img class="h-12 w-12 rounded-full" src="/assets/images/homepage/relaxed-people.jpg" alt="Steer Campaign makes you relax while running Mautic">
              </div>            
            </div>
          </footer>
        </blockquote>
        <!-- End Blockquote -->
      </div>
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>
</div>
<!-- End Testimonials -->


<!-- Icon Blocks -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto mt-5">
  <div class="text-center mb-6 max-w-3xl mx-auto">
    <h2 class="font-bold text-3xl lg:text-4xl text-gray-800 dark:text-gray-200 mb-3">
      Foucs on marketing, not on managing Mautic.
    </h2>
    <p class="text-gray-500 text-center text-xl">
      Forget about the technicalities of Mautic and focus on what matters most: your marketing strategy.
    </p>
  </div>

  <div class="grid sm:grid-cols-2 lg:grid-cols-3 items-center gap-6 md:gap-10">
    <!-- Card -->
    <div class="w-full h-full bg-white shadow-lg rounded-lg p-5 dark:bg-slate-900">
      <div class="flex items-center gap-x-4 mb-3">
        <div class="inline-flex justify-center items-center w-[62px] h-[62px] rounded-full border-4 border-blue-50 bg-blue-100 dark:border-blue-900 dark:bg-blue-800">
          <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
            <path d="M4.464 3.162A2 2 0 016.28 2h7.44a2 2 0 011.816 1.162l1.154 2.5c.067.145.115.291.145.438A3.508 3.508 0 0016 6H4c-.288 0-.568.035-.835.1.03-.147.078-.293.145-.438l1.154-2.5z" />
            <path fill-rule="evenodd" d="M2 9.5a2 2 0 012-2h12a2 2 0 110 4H4a2 2 0 01-2-2zm13.24 0a.75.75 0 01.75-.75H16a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75h-.01a.75.75 0 01-.75-.75V9.5zm-2.25-.75a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 00.75-.75V9.5a.75.75 0 00-.75-.75h-.01zM2 15a2 2 0 012-2h12a2 2 0 110 4H4a2 2 0 01-2-2zm13.24 0a.75.75 0 01.75-.75H16a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75h-.01a.75.75 0 01-.75-.75V15zm-2.25-.75a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75h-.01z" clip-rule="evenodd" />
          </svg>          
        </div>
        <div class="flex-shrink-0">
          <h3 class="block text-lg font-semibold text-gray-800 dark:text-white">Mautic Hosting</h3>
        </div>
      </div>
      <p class="text-gray-600 dark:text-gray-400 mb-4">We understand that hosting and maintaining Mautic can be overwhelming, which is why we're here to simplify the entire process for you.</p>
      <h4 class="block mt-3 mb-3 text-lg font-semibold text-gray-800 dark:text-white">Popular Features</h4>
      <ul class="space-y-3 text-sm">
        <li class="flex space-x-3">
          <svg class="flex-shrink-0 h-6 w-6 text-blue-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"/>
            <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"/>
          </svg>
          <span class="text-gray-800 dark:text-gray-400">
            One click installations
          </span>
        </li>
      
        <li class="flex space-x-3">
          <svg class="flex-shrink-0 h-6 w-6 text-blue-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"/>
            <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"/>
          </svg>
          <span class="text-gray-800 dark:text-gray-400">
            Updates and patches
          </span>
        </li>
      
        <li class="flex space-x-3">
          <svg class="flex-shrink-0 h-6 w-6 text-blue-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"/>
            <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"/>
          </svg>
          <span class="text-gray-800 dark:text-gray-400">
            Automated backups
          </span>
        </li>
      </ul>
      
      <div class="mt-2 flex border-t border-gray-200 divide-x divide-gray-200 dark:border-gray-700 dark:divide-gray-700">
        <a href="/products/mautic-hosting/" class="mt-3 w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-full border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
          Learn more
        </a>
      </div>      
    </div>
    <!-- End Card -->

    <!-- Card -->
    <div class="w-full h-full bg-white shadow-lg rounded-lg p-5 dark:bg-slate-900">
      <div class="flex items-center gap-x-4 mb-3">
        <div class="inline-flex justify-center items-center w-[62px] h-[62px] rounded-full border-4 border-blue-50 bg-blue-100 dark:border-blue-900 dark:bg-blue-800">
          <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
          </svg>
        </div>
        <div class="flex-shrink-0">
          <h3 class="block text-lg font-semibold text-gray-800 dark:text-white">Mautic Customization</h3>
        </div>
      </div>
      <p class="text-gray-600 dark:text-gray-400 mb-4">Steer Campaign is one of the most active contributors to Mautic, offering expertise in developing new features, addressing bug fixes, and seamless integrations.</p>
      <h4 class="block mt-3 mb-3 text-lg font-semibold text-gray-800 dark:text-white">Popular Features</h4>
      <ul class="space-y-3 text-sm">
        <li class="flex space-x-3">
          <svg class="flex-shrink-0 h-6 w-6 text-blue-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"/>
            <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"/>
          </svg>
          <span class="text-gray-800 dark:text-gray-400">
            New plugins & themes
          </span>
        </li>
      
        <li class="flex space-x-3">
          <svg class="flex-shrink-0 h-6 w-6 text-blue-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"/>
            <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"/>
          </svg>
          <span class="text-gray-800 dark:text-gray-400">
            Bug fixes
          </span>
        </li>
      
        <li class="flex space-x-3">
          <svg class="flex-shrink-0 h-6 w-6 text-blue-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"/>
            <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"/>
          </svg>
          <span class="text-gray-800 dark:text-gray-400">
            New integrations
          </span>
        </li>
      </ul>
      
      <div class="mt-2 flex border-t border-gray-200 divide-x divide-gray-200 dark:border-gray-700 dark:divide-gray-700">
        <a href="/products/mautic-customization/" class="mt-3 w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-full border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
          Learn more
        </a>
      </div>      
    </div>
    <!-- End Card -->
    
        <!-- Card -->
        <div class="w-full h-full bg-white shadow-lg rounded-lg p-5 dark:bg-slate-900">
          <div class="flex items-center gap-x-4 mb-3">
            <div class="inline-flex justify-center items-center w-[62px] h-[62px] rounded-full border-4 border-blue-50 bg-blue-100 dark:border-blue-900 dark:bg-blue-800">
              <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
              </svg>
            </div>
            <div class="flex-shrink-0">
              <h3 class="block text-lg font-semibold text-gray-800 dark:text-white">Mautic Training</h3>
            </div>
          </div>
          <p class="text-gray-600 dark:text-gray-400 mb-4">We offer specialized Mautic training programs tailored to your team's needs, ensuring they master the platform's full potential.</p>
          <h4 class="block mt-3 mb-3 text-lg font-semibold text-gray-800 dark:text-white">Popular Features</h4>
          <ul class="space-y-3 text-sm">
            <li class="flex space-x-3">
              <svg class="flex-shrink-0 h-6 w-6 text-blue-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"/>
                <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"/>
              </svg>
              <span class="text-gray-800 dark:text-gray-400">
                Live classes
              </span>
            </li>
          
            <li class="flex space-x-3">
              <svg class="flex-shrink-0 h-6 w-6 text-blue-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"/>
                <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"/>
              </svg>
              <span class="text-gray-800 dark:text-gray-400">
                Questions and Answers
              </span>
            </li>
          
            <li class="flex space-x-3">
              <svg class="flex-shrink-0 h-6 w-6 text-blue-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z" fill="currentColor" fill-opacity="0.1"/>
                <path d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z" fill="currentColor"/>
              </svg>
              <span class="text-gray-800 dark:text-gray-400">
                How tos
              </span>
            </li>
          </ul>
          
          <div class="mt-2 flex border-t border-gray-200 divide-x divide-gray-200 dark:border-gray-700 dark:divide-gray-700">
            <a href="/products/mautic-training/" class="mt-3 w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-full border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
              Learn more
            </a>
          </div>      
        </div>
        <!-- End Card -->
  </div>
</div>
<!-- End Icon Blocks -->


<!-- Testimonials -->
<div class="border-t overflow-hidden dark:border-slate-800 mb-3">
  <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl pt-10 px-4 sm:px-6 lg:py-20 lg:px-8 mx-auto">
      <div class="mb-5 sm:mb-10 text-center">
        <h2 class="text-2xl font-bold md:text-3xl dark:text-white">Get started with <span class="text-blue-600">Steer Camapign</span></h2>
        <p class="mt-3 text-gray-500 dark:text-gray-400">Take the first step towards unlocking the power of Mautic today. Start your free trial or request a personalized demo to experience how it can supercharge your marketing strategies.</p>
      </div>

      <!-- Buttons -->
      <div class="grid gap-3 justify-center w-full sm:inline-flex">
        <a class="inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 border border-transparent text-white text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800" href="../docs/index.html">
          Signup
        </a>        
        <a class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold text-gray-800 hover:bg-gray-800 hover:text-white focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition-all text-sm dark:text-white dark:hover:bg-gray-800 dark:hover:border-gray-900 dark:focus:ring-gray-900 dark:focus:ring-offset-gray-800 border-2 border-gray-900" href="#">
          Get a demo
        </a>
      </div>
      <!-- End Buttons -->
    </div>
  </div>
</div>
<!-- End Testimonials -->
@endsection
