@extends('_layouts.main')

@section('body')

@include('_partials.features.hero',[
  'sub_header' => 'Mautic Templates & Builders', 
  'header' => 'Stand out with beautiful emails and landing pages',
  'desc' => 'Mautic\'s Themes and Template Builder streamline brand consistency, saving time and resources while delivering captivating, on-brand content for your marketing efforts.',
  'image' => '/assets/images/features/builders.jpeg',
  'alt' => 'Mautic templates & builders.'
])

@include('_partials.features.in-action', [
  'image' => '/assets/images/features/builder-template.png',
  'alt' => 'Mautic Templates & Builder.'
])
  
@include('_partials.features.features-blocks')
@include('_layouts.cta')  


@endsection