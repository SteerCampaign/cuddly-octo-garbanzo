@extends('_layouts.main')

@section('body')

@include('_partials.features.hero',[
    'sub_header' => 'Mautic for small businesses',
    'header' => 'Less things to worry about', 
    'desc' => 'Unlock Success for Your Small Business with Mautic',
    'image' => '/assets/images/solutions/small-business.jpeg',
    'alt' => 'Mautic helps small businesses with their marketing automation needs.'
  ])
  

<!-- Icon Blocks -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto bg-gradient-to-b from-gray-50 to-transparent">
    <div class="max-w-2xl mx-auto">
      <!-- Grid -->
      <div class="grid gap-12">
        <div>
          <h2 class="text-3xl text-gray-800 font-bold lg:text-4xl dark:text-white">
            Mautic helps small businesses
          </h2>
          <p class="mt-3 text-gray-800 dark:text-gray-400">
            Are you a small business owner looking to level the playing field in the competitive world of marketing? Look no further than Mautic, the game-changing marketing automation platform designed with small businesses in mind. Discover why Mautic is the ideal solution to drive your small business to new heights:
          </p>
        </div>

        <div class="space-y-6 lg:space-y-10">
          <!-- Icon Block -->
          <div class="flex">
            <svg class="flex-shrink-0 mt-2 h-6 w-6 text-gray-800 dark:text-white"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
            </svg>              
            <div class="ml-5 sm:ml-8">
              <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-gray-200">
                Cost-Effective Marketing
              </h3>
              <p class="mt-1 text-gray-600 dark:text-gray-400">
                Mautic offers a cost-effective alternative to traditional marketing strategies. Say goodbye to expensive ad campaigns and hello to targeted, automated marketing that fits your budget. It allows you to achieve more with less, maximizing your ROI.
              </p>
            </div>
          </div>
          <!-- End Icon Block -->

          <!-- Icon Block -->
          <div class="flex">
            <svg class="flex-shrink-0 mt-2 h-6 w-6 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
            </svg>
            <div class="ml-5 sm:ml-8">
              <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-gray-200">
                Personalization at Scale
              </h3>
              <p class="mt-1 text-gray-600 dark:text-gray-400">
                In the digital age, personalization is key to engaging customers. Mautic empowers you to create personalized marketing campaigns tailored to individual customer preferences. This personal touch enhances customer relationships and boosts conversion rates.
              </p>
            </div>
          </div>
          <!-- End Icon Block -->

          <!-- Icon Block -->
          <div class="flex">
            <svg class="flex-shrink-0 mt-2 h-6 w-6 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
            </svg>
            <div class="ml-5 sm:ml-8">
              <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-gray-200">
                Time-Saving Automation
              </h3>
              <p class="mt-1 text-gray-600 dark:text-gray-400">
                Small business owners wear many hats. Mautic helps you reclaim your time by automating repetitive marketing tasks. From email marketing to lead nurturing, Mautic ensures that your marketing efforts are efficient and effective.
              </p>
            </div>
          </div>
          <!-- End Icon Block -->

          <!-- Icon Block -->
          <div class="flex">
            <svg class="flex-shrink-0 mt-2 h-6 w-6 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
            </svg>            
            <div class="ml-5 sm:ml-8">
              <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-gray-200">
                Lead Generation
              </h3>
              <p class="mt-1 text-gray-600 dark:text-gray-400">
                Growing your customer base is essential for small business success. Mautic simplifies lead generation through lead scoring and segmentation, helping you identify and target potential customers with precision.
              </p>
            </div>
          </div>
          <!-- End Icon Block -->

          <!-- Icon Block -->
          <div class="flex">
            <svg class="flex-shrink-0 mt-2 h-6 w-6 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 14.25v2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z" />
            </svg>
            <div class="ml-5 sm:ml-8">
              <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-gray-200">
                Detailed Analytics
              </h3>
              <p class="mt-1 text-gray-600 dark:text-gray-400">
                Understanding your marketing performance is crucial. Mautic provides in-depth analytics and reporting tools to track the success of your campaigns. This data-driven approach allows you to make informed decisions and refine your strategies for optimal results.
              </p>
            </div>
          </div>
          <!-- End Icon Block -->

          <!-- Icon Block -->
          <div class="flex">
            <svg class="flex-shrink-0 mt-2 h-6 w-6 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008z" />
            </svg>            
            <div class="ml-5 sm:ml-8">
              <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-gray-200">
                Scalability
              </h3>
              <p class="mt-1 text-gray-600 dark:text-gray-400">
                As your small business grows, so can your marketing efforts. Mautic scales with your business, accommodating your evolving needs and ensuring you have the tools to expand your reach and customer base.
              </p>
            </div>
          </div>
          <!-- End Icon Block -->

          <!-- Icon Block -->
          <div class="flex">
            <svg class="flex-shrink-0 mt-2 h-6 w-6 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>            
            <div class="ml-5 sm:ml-8">
              <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-gray-200">
                User-Friendly Interface
              </h3>
              <p class="mt-1 text-gray-600 dark:text-gray-400">
                You don't need to be a tech expert to harness the power of Mautic. Its user-friendly interface makes it accessible to small business owners without a steep learning curve.
              </p>
            </div>
          </div>
          <!-- End Icon Block -->

          <!-- Icon Block -->
          <div class="flex">
            <svg class="flex-shrink-0 mt-2 h-6 w-6 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 7.5L7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5" />
            </svg>
            <div class="ml-5 sm:ml-8">
              <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-gray-200">
                Seamless Integration
              </h3>
              <p class="mt-1 text-gray-600 dark:text-gray-400">
                Mautic seamlessly integrates with other popular marketing tools, making it easy to incorporate into your existing tech stack. This ensures a smooth transition and efficient workflow for your business.
              </p>
            </div>
          </div>
          <!-- End Icon Block -->
        </div>
      </div>
      <!-- End Grid -->
    </div>
  </div>
  <!-- End Icon Blocks -->
@include('_layouts.cta')  
@endsection