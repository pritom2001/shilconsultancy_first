<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Shil Consultancy Services</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <link rel="icon" type="image/png" href="/Media/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/Media/favicon/favicon.svg" />
    <link rel="shortcut icon" href="/Media/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/Media/favicon/apple-touch-icon.png" />
    <link rel="manifest" href="/Media/favicon/site.webmanifest" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700;900&family=Poppins:wght@300;400;500;600;700&display=swap');

        :root {
            --primary: #6e45e2;
            --secondary: #88d3ce;
            --accent: #ff7e5f;
            --dark: #0f0e17;
            --light: #fffffe;
            --dark-2: #1a1a2e;
            --dark-3: #24243e;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--dark);
            color: var(--light);
        }

        h1,
        h2,
        h3,
        h4,
        .orbitron {
            font-family: 'Orbitron', sans-serif;
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

        .card-bg {
            background: var(--dark-2);
            border: 1px solid var(--dark-3);
        }

        .sidebar-link {
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
        }

        .sidebar-link:hover,
        .sidebar-link.active {
            background-color: var(--dark-3);
            color: var(--light);
            border-left-color: var(--primary);
        }

        .table-custom th {
            background-color: var(--dark-3);
        }

        .table-custom tr:hover {
            background-color: rgba(255, 255, 255, 0.03);
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--dark-2);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--dark-3);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary);
        }
    </style>
</head>

<body class="text-gray-300">

    <div class="flex h-screen bg-dark">
        <aside class="w-64 flex-shrink-0 hidden md:block bg-dark-2 border-r border-dark-3">
            <div class="flex flex-col h-full">
                <div class="h-20 flex items-center justify-center border-b border-dark-3">
                    <h1 class="text-2xl font-bold gradient-text">SCS ADMIN</h1>
                </div>
                <nav class="flex-1 px-4 py-6 space-y-2">
                    <a href="{{ route('dashboard') }}"
                        class="sidebar-link flex items-center px-4 py-3 rounded-lg {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="fas fa-tachometer-alt w-6 text-center mr-3"></i>
                        <span>Dashboard</span>
                    </a>
                    <a href="#" class="sidebar-link flex items-center px-4 py-3 rounded-lg {{ request()->routeIs('pages.*') ? 'active' : '' }}">
                        <i class="fas fa-file-alt w-6 text-center mr-3"></i>
                        <span>Pages</span>
                    </a>
                    <a href="{{ route('dashboard.blogs.index') }}"
                        class="sidebar-link flex items-center px-4 py-3 rounded-lg {{ request()->routeIs('dashboard.blogs.*') ? 'active' : '' }}">
                        <i class="fas fa-pen-nib w-6 text-center mr-3"></i>
                        <span>Blogs</span>
                    </a>
                    @auth
                        @if (auth()->user()->role === 'admin')
                            <a href="{{ route('access_control') }}"
                                class="sidebar-link flex items-center px-4 py-3 rounded-lg {{ request()->routeIs('access_control') ? 'active' : '' }}">
                                <i class="fas fa-users-cog w-6 text-center mr-3"></i>
                                <span>Access Control</span>
                            </a>
                        @else
                            <a href="{{ route('unauthorized.access') }}"
                                class="sidebar-link flex items-center px-4 py-3 rounded-lg {{ request()->routeIs('unauthorized.access') ? 'active' : '' }}">
                                <i class="fas fa-users-cog w-6 text-center mr-3"></i>
                                <span>Access Control</span>
                            </a>
                        @endif
                    @endauth
                    <a href="#" class="sidebar-link flex items-center px-4 py-3 rounded-lg {{ request()->routeIs('sitemap.*') ? 'active' : '' }}">
                        <i class="fas fa-sitemap w-6 text-center mr-3"></i>
                        <span>Sitemap</span>
                    </a>
                    <a href="#" class="sidebar-link flex items-center px-4 py-3 rounded-lg {{ request()->routeIs('seo.*') ? 'active' : '' }}">
                        <i class="fas fa-chart-line w-6 text-center mr-3"></i>
                        <span>SEO</span>
                    </a>
                    <a href="#" class="sidebar-link flex items-center px-4 py-3 rounded-lg {{ request()->routeIs('settings.*') ? 'active' : '' }}">
                        <i class="fas fa-cogs w-6 text-center mr-3"></i>
                        <span>Global Settings</span>
                    </a>
                </nav>
                <div class="px-4 py-6 border-t border-dark-3">
                    <a href="#"
                        class="sidebar-link flex items-center px-4 py-3 rounded-lg text-red-400 hover:bg-red-500/10 hover:border-red-500">
                        <i class="fas fa-sign-out-alt w-6 text-center mr-3"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </div>
        </aside>

        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="h-20 flex items-center justify-between px-6 bg-dark-2 border-b border-dark-3">
                <div class="flex items-center">
                    <button class="md:hidden mr-4 text-gray-400">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                    <div class="relative">
                        <input type="text" placeholder="Search..."
                            class="w-full bg-dark-3 border border-gray-700 rounded-lg px-4 py-2 pl-10 text-white focus:outline-none focus:ring-2 focus:ring-primary">
                        <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-500"></i>
                    </div>
                </div>
                <div class="flex items-center space-x-6">
                    <button class="text-gray-400 hover:text-white relative">
                        <i class="fas fa-bell text-xl"></i>
                        <span
                            class="absolute -top-1 -right-1 w-3 h-3 bg-accent rounded-full border-2 border-dark-2"></span>
                    </button>
                    <div class="relative flex items-center space-x-2">
                        {{-- User Avatar --}}
                        @if (Auth::user()->image)
                            <img src="{{ asset('storage/' . Auth::user()->image) }}" alt="{{ Auth::user()->name }}"
                                class="w-10 h-10 rounded-full object-cover border border-gray-300">
                        @else
                            <div
                                class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-500 to-purple-500 flex items-center justify-center text-white font-bold border border-gray-300">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </div>
                        @endif

                        {{-- User Name & Role --}}
                        <div class="flex flex-col">
                            <span class="font-medium gradient-text">{{ Auth::user()->name }}</span>
                            <span class="text-xs text-gray-500">{{ ucfirst(Auth::user()->role) }}</span>
                        </div>

                        {{-- Optional dropdown icon --}}
                        <i class="fas fa-chevron-down text-gray-400 text-xs"></i>
                    </div>
                </div>
            </header>

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-dark p-6">
                @yield('content')
            </main>
        </div>
    </div>

    @stack('scripts')

    <script>
        function toggleDropdown() {
            const dropdown = document.getElementById('dropdownMenu');
            dropdown.classList.toggle('hidden');
        }

        window.onclick = function(event) {
            if (!event.target.matches('button, svg, path')) {
                const dropdowns = document.getElementById('dropdownMenu');
                if (dropdowns && !dropdowns.classList.contains('hidden')) {
                    dropdowns.classList.add('hidden');
                }
            }
        }
    </script>
</body>

</html>