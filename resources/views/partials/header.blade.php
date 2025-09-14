<!-- resources/views/includes/header.blade.php -->
<nav class="fixed w-full z-50 bg-black bg-opacity-80 backdrop-filter backdrop-blur-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <a href="{{url('/')}}">
                        <h1 class="text-2xl font-bold gradient-text">SHIL CONSULTANCY</h1>
                    </a>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-8">
                    <a href="#services" class="nav-link text-white px-3 py-2 rounded-md text-sm font-medium">Services</a>
                    <a href="#about" class="nav-link text-white px-3 py-2 rounded-md text-sm font-medium">About</a>
                    <a href="#work" class="nav-link text-white px-3 py-2 rounded-md text-sm font-medium">Work</a>
                    <a href="#contact" class="nav-link text-white px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                </div>
            </div>
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-white focus:outline-none">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="mobile-menu md:hidden">
        <a href="#home" class="nav-link">Home</a>
        <a href="#services" class="nav-link">Services</a>
        <a href="#about" class="nav-link">About</a>
        <a href="#work" class="nav-link">Work</a>
        <a href="#contact" class="nav-link">Contact</a>
    </div>
</nav>
