@extends('layouts.template')

@section('title', 'Brand Strategy')

@section('content')
    <main class="min-h-screen flex flex-col items-center justify-center text-center relative px-4 pt-24 pb-12">
    
    <h2 class="text-5xl md:text-7xl lg:text-8xl font-bold mb-4 orbitron gradient-text">Coming Soon</h2>
    <p class="text-lg md:text-xl text-white max-w-2xl mx-auto">
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
@endsection