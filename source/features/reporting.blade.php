@extends('_layouts.main')

@section('body')

@include('_partials.features.hero',[
  'sub_header' => 'Mautic reporting', 
  'header' => 'Unlock Insights with Mautic Reporting',
  'desc' => 'Mautic\'s reporting offers deep insights into your marketing performance, while its dynamic report builder empowers you to create custom, data-driven visuals for actionable decision-making.',
  'image' => '/assets/images/features/reporting.jpeg',
  'alt' => 'Mautic reporting.'
])

@include('_partials.features.in-action', [
  'image' => '/assets/images/features/reports-builder.png',
  'alt' => 'Mautic reports.'
])
  
@include('_partials.features.features-blocks')
@include('_layouts.cta')  


@endsection