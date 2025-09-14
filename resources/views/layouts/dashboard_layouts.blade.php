<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - SHIL Consultancy</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen flex flex-col">

    <!-- Header -->
    <header class="bg-gray-800 text-white p-4 flex justify-between items-center shadow">
        <h1 class="text-xl font-bold">SHIL Consultancy Dashboard</h1>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="bg-red-600 hover:bg-red-700 px-3 py-1 rounded">Logout</button>
        </form>
    </header>

    <div class="flex flex-1 overflow-hidden">

        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-white flex flex-col">
            <nav class="flex-1 p-4 space-y-2">
                <a href="{{ route('dashboard.blog') }}" class="block px-3 py-2 rounded hover:bg-gray-700">Dashboard</a>
                <a href="{{ route('blog.index') }}" class="block px-3 py-2 rounded hover:bg-gray-700">Blogs</a>
                <a href="#" class="block px-3 py-2 rounded hover:bg-gray-700">SEO</a>
                <a href="#" class="block px-3 py-2 rounded hover:bg-gray-700">Settings</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6 overflow-y-auto bg-gray-100">
            @yield('content')
        </main>

    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center p-4">
        &copy; {{ date('Y') }} SHIL Consultancy. All rights reserved.
    </footer>

</body>
</html>
