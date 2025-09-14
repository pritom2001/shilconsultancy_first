<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title', 'Shil Consultancy Services | Digital Marketing & Web Development Experts')</title>
    <meta name="description" content="@yield('meta_description', 'Shil Consultancy Services offers professional digital marketing, web design & development, e-commerce solutions in Chittagong. Boost your online presence today!')">
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- Open Graph / Social -->
    <meta property="og:title" content="@yield('og_title', 'Shil Consultancy Services | Digital Marketing & Web Development Experts')">
    <meta property="og:description" content="@yield('og_description', 'Professional digital marketing, web design & development, e-commerce solutions in Chittagong.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('og_image', asset('images/social-preview.jpg'))">
    <meta property="og:site_name" content="Shil Consultancy Services">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Shil Consultancy Services | Digital Marketing & Web Development Experts')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Professional digital marketing, web design & development, e-commerce solutions in Chittagong.')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('images/social-preview.jpg'))">

    <!-- JSON-LD Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ProfessionalService",
      "name": "Shil Consultancy Services",
      "image": "{{ asset('images/logo.jpg') }}",
      "@id": "{{ url('/') }}",
      "url": "{{ url('/') }}",
      "telephone": "+8801768013249",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Nasirabad",
        "addressLocality": "Chittagong",
        "addressRegion": "BD",
        "postalCode": "4000",
        "addressCountry": "BD"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 22.3569,
        "longitude": 91.7832
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"
        ],
        "opens": "09:00",
        "closes": "18:00"
      },
      "sameAs": [
        "https://www.facebook.com/shilconsultancyukltd",
        "https://www.instagram.com/shilconsultancy/",
        "https://x.com/shilconsultancy",
        "https://www.linkedin.com/company/shilconsultancy/"
      ]
    }
    </script>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind CSS (Vite preferred for production, CDN okay for quick dev) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- EmailJS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script type="text/javascript">
        (function() {
            emailjs.init("01yRfvynDU2QzUe3l"); // Replace with your EmailJS public key
        })();
    </script>
    {{-- swiper js --}}
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- Favicons -->
    
    <link rel="icon" type="image/png" href="{{ asset('Media/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('Media/favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('Media/favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('Media/favicon/apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('Media/favicon/site.webmanifest') }}" />
</head>
<body class="bg-gray-100">
    @include('partials.header')  <!-- Global Header -->

    <main class="min-h-screen">
        @yield('content')         <!-- Page-specific content -->
    </main>

    @include('partials.footer')  <!-- Global Footer -->
    
     <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    {{-- Stack for child view scripts --}}
    @stack('scripts')
</body>
</html>
