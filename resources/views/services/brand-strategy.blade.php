<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="A new page is launching soon at Shil Consultancy Services.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="icon" type="image/png" href="/Media/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/Media/favicon/favicon.svg" />
    <link rel="shortcut icon" href="/Media/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/Media/favicon/apple-touch-icon.png" />
    <link rel="manifest" href="/Media/favicon/site.webmanifest" />

    
</head>
<body class="grid-bg">
    
 @include('partials.header')
    
    <main class="min-h-screen flex flex-col items-center justify-center text-center relative px-4 pt-24 pb-12">
        
        <h2 class="text-5xl md:text-7xl lg:text-8xl font-bold mb-4 orbitron gradient-text">Coming Soon</h2>
        <p class="text-lg md:text-xl text-gray-300 max-w-2xl mx-auto">
            We're working hard to bring you a new and exciting page. Please check back later!
        </p>

        <div class="artwork-container pulsing-glow">
            <svg class="artwork-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <path style="stroke: url(#grad1);" d="M50 2.5 A 47.5 47.5 0 1 1 42.5 97.3" />
                <path style="stroke: url(#grad2);" d="M50 2.5 A 47.5 47.5 0 1 0 57.5 97.3" />
                <path style="stroke: url(#grad3);" d="M2.5 50 A 47.5 47.5 0 1 1 97.3 57.5" />
                <path style="stroke: url(#grad1);" d="M2.5 50 A 47.5 47.5 0 1 0 97.3 42.5" />
                <defs>
                    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%"><stop offset="0%" style="stop-color:var(--primary);stop-opacity:1" /><stop offset="100%" style="stop-color:var(--secondary);stop-opacity:1" /></linearGradient>
                    <linearGradient id="grad2" x1="0%" y1="0%" x2="100%" y2="0%"><stop offset="0%" style="stop-color:var(--secondary);stop-opacity:1" /><stop offset="100%" style="stop-color:var(--accent);stop-opacity:1" /></linearGradient>
                    <linearGradient id="grad3" x1="0%" y1="0%" x2="100%" y2="0%"><stop offset="0%" style="stop-color:var(--accent);stop-opacity:1" /><stop offset="100%" style="stop-color:var(--primary);stop-opacity:1" /></linearGradient>
                </defs>
            </svg>
        </div>

    </main>

   @include('partials.footer')
</body>
</html>