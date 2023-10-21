<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}" class="light scroll-smooth hover:scroll-auto">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        @if(str_ends_with($page->getUrl(), '/'))
        <link rel="canonical" href="{{ $page->getUrl() }}">
        @else
        <link rel="canonical" href="{{ $page->getUrl() }}/">
        @endif
        <meta name="description" content="{{ $page->description }}">

        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@steercampaign">
        <meta name="twitter:title" content="Steer Campaign - Open Source Marketing Automation">
        <meta name="twitter:description" content="Discover a world of marketing potential with Steer Campaign. Unlock personalized automation and insights to boost your campaign success.">
        <meta name="twitter:image" content="{{url('assets/images/og-logo.svg')}}">
      
        <meta property="og:url" content="https://preline.co/">
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Steer Campaign">
        <meta property="og:title" content="Steer Campaign - Open Source Marketing Automation">
        <meta property="og:description" content="Discover a world of marketing potential with Steer Campaign. Unlock personalized automation and insights to boost your campaign success.">
        <meta property="og:image" content="{{url('assets/images/og-logo.svg')}}">

        <title>{{ $page->title }}</title>

        @if ($page->production)
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WPHHTDP');</script>
        <!-- End Google Tag Manager -->        
        @endif

        <link rel="icon" type="image/svg+xml" href="{{url('assets/images/favicon.svg')}}">
        <link rel="icon" type="image/png" href="{{url('assets/images/favicon.png')}}">        

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ url(mix('css/main.css', 'assets/build')) }}">
        <script defer src="{{ url(mix('js/main.js', 'assets/build')) }}"></script>
        <script type="text/javascript">
            /** This section is only needed once per page if manually copying **/
            if (typeof MauticSDKLoaded == 'undefined') {
                var MauticSDKLoaded = true;
                var head            = document.getElementsByTagName('head')[0];
                var script          = document.createElement('script');
                script.type         = 'text/javascript';
                script.src          = 'https://engage.steercampaign.com/media/js/mautic-form.js?v3506e1d1';
                script.onload       = function() {
                    MauticSDK.onLoad();
                };
                head.appendChild(script);
                var MauticDomain = 'https://engage.steercampaign.com';
                var MauticLang   = {
                    'submittingMessage': "Please wait..."
                }
            }else if (typeof MauticSDK != 'undefined') {
                MauticSDK.onLoad();
            }
        </script>        
    </head>
    <body class="dark:bg-slate-900">
        @if ($page->production)
            <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WPHHTDP"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->        
        @endif        
        @include('_layouts._header.menu')
        @yield('body')
        @include('_partials.modal')
        @stack('data')
        @include('_layouts._footer.menu')
        @stack('scripts')
        <script>
            window.MauticFormCallback = window.MauticFormCallback || {};
            window.dataLayer = window.dataLayer || [];
            var allForms = window.document.forms;
            for (var i = 0; i < allForms.length; i++) {
               var form = allForms[i];

                if (form.hasAttribute('data-mautic-form')) {
                    var dataMauticForm = form.getAttribute('data-mautic-form');
                    
                    MauticFormCallback[dataMauticForm] = {
                        onResponse: function(response) {
                            if(response.success) {
                              document.getElementById(`mauticform_${dataMauticForm}_message`).classList.remove("hidden");
                            }else{
                              document.getElementById(`mauticform_${dataMauticForm}_error`).classList.remove("hidden");
                            }
                            if(dataMauticForm === 'getademo')
                            {
                                document.getElementById("mauticform_innerform_getademo").classList.add("hidden");
                            }
                            
                            @if ($page->production)                            
                            window.dataLayer.push({
                                'event': 'form-submitted',
                                'formName': dataMauticForm,
                            });
                            @endif
                        },
                    };
                }
            } 
        </script>
    </body>
</html>
