---
extends: _layouts.main
title: Boost Conversions with Mautic Dynamic Forms with Steer Campaign
description: Create engaging forms with Mautic, designed to optimize conversions and lead capture for your campaigns.
---

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