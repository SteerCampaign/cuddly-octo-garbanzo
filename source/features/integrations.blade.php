@extends('_layouts.main')

@section('body')

@include('_partials.features.hero',[
  'sub_header' => 'Mautic Integration', 
  'header' => 'Connect Mautic to your favorite apps and services', 
  'desc' => 'Mautic seamlessly integrates with a multitude of applications and services, including the versatile Zapier platform, offering unparalleled flexibility and connectivity to enhance your marketing operations.',
  'image' => '/assets/images/features/integrations.png',
  'alt' => 'Mautic Integrations.'
])

@include('_partials.features.in-action', [
  'image' => '/assets/images/features/plugins.png',
  'alt' => 'Mautic plugins.'
])
  
@include('_partials.features.features-blocks')
@include('_layouts.cta')  


@endsection