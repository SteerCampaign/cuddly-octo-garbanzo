@extends('_layouts.main')

@section('body')

@include('_partials.features.hero',[
  'sub_header' => 'Mautic Segmentation', 
  'header' => 'Connect with the right people', 
  'desc' => 'Mautic\'s segmentation empowers precise audience targeting, enhancing campaign effectiveness without the need for coding or technical expertise.',
  'image' => '/assets/images/features/segmentation.jpeg',
  'alt' => 'Mautic segmentation.'
])

@include('_partials.features.in-action', [
  'image' => '/assets/images/features/segments-builder.png',
  'alt' => 'Mautic Segments in action.'
])
  
@include('_partials.features.features-blocks')
@include('_layouts.cta')  


@endsection