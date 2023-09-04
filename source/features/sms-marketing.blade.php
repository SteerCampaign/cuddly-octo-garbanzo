@extends('_layouts.main')

@section('body')
  @include('_partials.features.hero',[
    'sub_header' => 'SMS marketing', 
    'header' => 'Higher Retention Rates with SMS', 
    'desc' => 'Unlock Unprecedented ROI with SMS Marketing Strategies.',
    'image' => '/assets/images/features/sms-marketing.jpeg',
    'alt' => 'Mautic empowers highly converting email marketing campaigns through personalized automation and engagement.'
  ])

  @include('_partials.features.features-blocks')

  @include('_partials.features.in-action', [
    'image' => '/assets/images/features/sms-builder.png',
    'alt' => 'Mautic SMS campaigns'
  ])
  
  @include('_layouts.cta')  
@endsection