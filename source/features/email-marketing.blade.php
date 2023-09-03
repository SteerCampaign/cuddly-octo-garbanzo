@extends('_layouts.main')

@section('body')
@include('_partials.features.hero',[
  'sub_header' => 'Email marketing', 
  'header' => 'ROI-Boosting Mautic Emails', 
  'desc' => 'With Mautic, you can monitor each interaction and transaction to enhance your campaigns and elevate your revenue. Join the thriving community of brands who rely on Mautic to supercharge their email marketing ROI.',
  'image' => '/assets/images/features/email-marketing.jpeg',
  'alt' => 'Mautic empowers highly converting email marketing campaigns through personalized automation and engagement.'
])

@include('features._features-blocks')

  <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto mt-5 bg-gradient-to-b from-gray-100 to-transparent">
    <h2 class="font-bold text-3xl lg:text-4xl text-gray-800 dark:text-gray-200 mb-3 text-center">
        See it in action
    </h2>
    <figure class="mx-auto relative z-[1] max-w-full w-[50rem] h-auto rounded-b-lg shadow-[0_2.75rem_3.5rem_-2rem_rgb(45_55_75_/_20%),_0_0_5rem_-2rem_rgb(45_55_75_/_15%)] dark:shadow-[0_2.75rem_3.5rem_-2rem_rgb(0_0_0_/_20%),_0_0_5rem_-2rem_rgb(0_0_0_/_15%)]">
        <div class="relative flex items-center max-w-[50rem] bg-gray-800 rounded-t-lg py-2 px-24 dark:bg-gray-700">
          <div class="flex space-x-1 absolute top-2/4 left-4 -translate-y-1">
            <span class="w-2 h-2 bg-gray-600 rounded-full dark:bg-gray-600"></span>
            <span class="w-2 h-2 bg-gray-600 rounded-full dark:bg-gray-600"></span>
            <span class="w-2 h-2 bg-gray-600 rounded-full dark:bg-gray-600"></span>
          </div>
          <div class="flex justify-center items-center w-full h-full bg-gray-700 text-[.25rem] text-gray-400 rounded-sm sm:text-[.5rem] dark:bg-gray-600 dark:text-gray-400">www.steercampaign.com</div>
        </div>
      
        <div class="bg-gray-800 rounded-b-lg">
          <img class="max-w-full h-auto rounded-b-lg" src="/assets/images/features/email-builder.png" alt="Mautic email builder">
        </div>
      </figure>    
  </div>

  
  @include('_layouts.cta')  
@endsection