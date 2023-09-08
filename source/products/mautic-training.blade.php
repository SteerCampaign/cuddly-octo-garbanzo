@extends('_layouts.main')

@section('body')

<!-- Hero -->
<div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Grid -->
    <div class="grid lg:grid-cols-7 lg:gap-x-8 xl:gap-x-12 lg:items-center">
      <div class="lg:col-span-3">
        <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl md:text-5xl lg:text-6xl dark:text-white">Master Mautic</h1>
        <p class="mt-3 text-lg text-gray-800 dark:text-gray-400">Unlock Your Marketing Potential with Expert Training.</p>
  
        <div class="mt-5 lg:mt-8 flex flex-col items-center gap-2 sm:flex-row sm:gap-3">
          <a class="w-full sm:w-auto inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 border border-transparent text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800" href="/company/contact-us/">
            Contact Sales
          </a>
        </div>

        <!-- Features -->
        <div class="mt-6 lg:mt-10 grid grid-cols-2 gap-x-5 border-top border-t-2">
        <!-- Feature -->
        <div class="py-5">
            <ul class="space-y-3">
                <li class="flex space-x-3">
                    <svg class="flex-shrink-0 h-6 w-6 text-blue-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z" fill="currentColor"/>
                    </svg>
                    <span class="text-gray-800 dark:text-gray-400">
                        Recorded Videos and how-to guides
                    </span>
                </li>
                <li class="flex space-x-3">
                    <svg class="flex-shrink-0 h-6 w-6 text-blue-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z" fill="currentColor"/>
                    </svg>
                    <span class="text-gray-800 dark:text-gray-400">
                        Live classes
                    </span>
                </li>
                <li class="flex space-x-3">
                    <svg class="flex-shrink-0 h-6 w-6 text-blue-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z" fill="currentColor"/>
                    </svg>
                    <span class="text-gray-800 dark:text-gray-400">
                        Question and answer sessions
                    </span>
                </li>
            </ul>
        </div>
        <!-- End Feature -->
        </div>
        <!-- End Review -->        
      </div>
      <!-- End Col -->
  
      <div class="lg:col-span-4 mt-10 lg:mt-0">
        <img class="w-full rounded-xl" src="/assets/images/training/mautic-training.jpeg" alt="Steer Campaign Offer Mautic customization">
      </div>
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>
  <!-- End Hero -->

<!-- Icon Blocks -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto bg-gradient-to-b from-gray-50 to-transparent">
    <!-- Grid -->
    <div class="grid md:grid-cols-2 gap-12">
      <div class="lg:w-3/4">
        <h2 class="text-3xl text-gray-800 font-bold lg:text-4xl dark:text-white">
          Learn Mautic from the Experts
        </h2>
        <p class="mt-3 text-gray-800 dark:text-gray-400">
            Our Mautic training program is designed to help you get the most out of your Mautic instance. We offer a variety of training options to suit your needs, including recorded videos, live classes, and question and answer sessions.
        </p>
        <p class="mt-5 inline-flex items-center gap-x-2 font-medium text-blue-600 dark:text-blue-500">
          Contact sales to learn more
          <svg class="w-2.5 h-2.5 transition ease-in-out group-hover:translate-x-1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.975821 6.92249C0.43689 6.92249 -3.50468e-07 7.34222 -3.27835e-07 7.85999C-3.05203e-07 8.37775 0.43689 8.79749 0.975821 8.79749L12.7694 8.79748L7.60447 13.7596C7.22339 14.1257 7.22339 14.7193 7.60447 15.0854C7.98555 15.4515 8.60341 15.4515 8.98449 15.0854L15.6427 8.68862C16.1191 8.23098 16.1191 7.48899 15.6427 7.03134L8.98449 0.634573C8.60341 0.268455 7.98555 0.268456 7.60447 0.634573C7.22339 1.00069 7.22339 1.59428 7.60447 1.9604L12.7694 6.92248L0.975821 6.92249Z" fill="currentColor"/>
          </svg>
        </p>
      </div>
      <!-- End Col -->
  
      <div class="space-y-6 lg:space-y-10">
        <!-- Icon Block -->
        <div class="flex">
          <!-- Icon -->
          <span class="flex-shrink-0 inline-flex justify-center items-center w-[46px] h-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto dark:bg-slate-900 dark:border-gray-700 dark:text-gray-200">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
            </svg>              
          </span>
          <div class="ml-5 sm:ml-8">
            <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-gray-200">
                Recorded Videos and how-to guides
            </h3>
            <p class="mt-1 text-gray-600 dark:text-gray-400">
                Explore our recorded classes, meticulously designed to unravel the core components of Mautic. Elevate your marketing game as you delve into essential topics, from automation workflows to personalized campaigns, and harness the true potential of Mautic's marketing prowess. Join us on a journey to marketing mastery with our comprehensive training sessions.
            </p>
          </div>
        </div>
        <!-- End Icon Block -->
  
        <!-- Icon Block -->
        <div class="flex">
          <!-- Icon -->
          <span class="flex-shrink-0 inline-flex justify-center items-center w-[46px] h-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto dark:bg-slate-900 dark:border-gray-700 dark:text-gray-200">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
              </svg>
            </span>
          <div class="ml-5 sm:ml-8">
            <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-gray-200">
                Live classes
            </h3>
            <p class="mt-1 text-gray-600 dark:text-gray-400">                
                Our live classes offer real-time guidance, ensuring you get instant answers to your burning questions about Mautic. Join our expert instructors and fellow marketers in interactive sessions, fostering a dynamic learning experience and helping you overcome challenges on the spot. Elevate your Mautic skills with live classes tailored to your needs.
            </p>
          </div>
        </div>
        <!-- End Icon Block -->
  
        <!-- Icon Block -->
        <div class="flex">
          <!-- Icon -->
          <span class="flex-shrink-0 inline-flex justify-center items-center w-[46px] h-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto dark:bg-slate-900 dark:border-gray-700 dark:text-gray-200">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
            </svg>
          </span>
          <div class="ml-5 sm:ml-8">
            <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-gray-200">
                Question and answer sessions
            </h3>
            <p class="mt-1 text-gray-600 dark:text-gray-400">
                Participate in our exclusive Q&A sessions focused solely on addressing your specific Mautic inquiries and real-world cases. Dive deep into practical problem-solving as our experts provide tailored solutions to the challenges you encounter, making your Mautic journey smoother and more effective. Join us for dedicated Q&A sessions designed to empower your marketing success.
            </p>
          </div>
        </div>
        <!-- End Icon Block -->
      </div>
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>
  <!-- End Icon Blocks -->  

@include('_layouts.cta')

@endsection