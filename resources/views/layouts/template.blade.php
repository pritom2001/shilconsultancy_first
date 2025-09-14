<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Background Design Template')</title>

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Blog - Shil Consultancy Services">
    <meta property="og:description"
        content="Explore articles and insights on digital marketing, web development, SEO, and brand strategy.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.shilconsultancy.com/blog.html">
    <meta property="og:image" content="https://www.shilconsultancy.com/images/social-preview.jpg">
    <meta property="og:site_name" content="Shil Consultancy Services">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Blog - Shil Consultancy Services">
    <meta name="twitter:description"
        content="Explore articles and insights on digital marketing, web development, SEO, and brand strategy.">
    <meta name="twitter:image" content="https://www.shilconsultancy.com/images/social-preview.jpg">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="/Media/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/Media/favicon/favicon.svg" />
    <link rel="shortcut icon" href="/Media/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/Media/favicon/apple-touch-icon.png" />
    <link rel="manifest" href="/Media/favicon/site.webmanifest" />

    {{-- Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Google Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    {{-- Swiper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    {{-- Custom Styles --}}
    <style>
        :root {
            --primary: #6e45e2;
            --secondary: #88d3ce;
            --accent: #ff7e5f;
            --dark: #0f0e17;
            --light: #fffffe;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--dark);
            color: var(--light);
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        .orbitron {
            font-family: 'Orbitron', sans-serif;
        }

        .grid-bg {
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
            background-size: 40px 40px;
        }

        .particle {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(var(--primary), var(--secondary));
            opacity: 0.6;
            z-index: -1;
        }

        @keyframes floating {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0);
            }
        }

        .gradient-text {
            background: linear-gradient(90deg, var(--primary), var(--secondary), var(--accent));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: gradient 8s ease infinite;
            background-size: 400% 400%;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .team-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        } 
          .blog-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(110, 69, 226, 0.3);
            border-color: var(--primary);
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(110, 69, 226, 0.3);
            border-color: var(--primary);
        }

        .grid-bg {
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
            background-size: 40px 40px;
        }

        .nav-link {
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background: linear-gradient(90deg, var(--primary), var(--accent));
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .mobile-menu {
            display: none;
            position: absolute;
            top: 80px;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.95);
            padding: 20px;
            z-index: 1000;
        }

        .mobile-menu.active {
            display: block;
        }

        .mobile-menu a {
            display: block;
            padding: 10px 0;
            color: white;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .mobile-menu a:last-child {
            border-bottom: none;
        }

        .blog-placeholder-img {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .service-card,
        .blog-card {
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
    </style>

    @stack('head')
</head>

<body class="grid-bg">
    <div id="particles"></div>

    {{-- Header --}}
    @include('partials.header')

    {{-- Page Content --}}
    <main class="relative min-h-screen p-8">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- Particles --}}
    <script>
        function createParticles() {
            const container = document.getElementById('particles');
            const particleCount = 30;
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                const size = Math.random() * 4 + 2;
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                particle.style.left = `${Math.random() * 100}%`;
                particle.style.top = `${Math.random() * 100}%`;
                const duration = Math.random() * 20 + 10;
                const delay = Math.random() * 5;
                particle.style.animation = `floating ${duration}s ease-in-out ${delay}s infinite`;
                container.appendChild(particle);
            }
        }
        document.addEventListener('DOMContentLoaded', createParticles);

        document.querySelectorAll('a[href*="#"]').forEach(anchor => {
            if (anchor.pathname === window.location.pathname && anchor.hash) {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            }
        });

        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('active');
            });
        } 
        // Smooth scrolling for anchor links to other pages
        document.querySelectorAll('a[href*="#"]').forEach(anchor => {
            if (anchor.pathname === window.location.pathname) {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            }
        });

        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('active');
            });
        }
    </script>
   

    @stack('scripts')
</body>

</html>
