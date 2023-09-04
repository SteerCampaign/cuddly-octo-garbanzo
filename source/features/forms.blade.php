@extends('_layouts.main')

@section('body')

@include('_partials.features.hero',[
  'sub_header' => 'Mautic Forms', 
  'header' => 'Dynamic forms to collect data', 
  'desc' => 'Mautic\'s dynamic forms adapt to visitor behavior, ensuring tailored interactions that boost conversions and gather valuable insights, all without complex coding.',
  'image' => '/assets/images/features/forms.jpeg',
  'alt' => 'Mautic Forms.'
])

@include('_partials.features.in-action', [
  'image' => '/assets/images/features/forms.png',
  'alt' => 'Mautic Forms.'
])
  
@include('_partials.features.features-blocks')
@include('_layouts.cta')  


@endsection