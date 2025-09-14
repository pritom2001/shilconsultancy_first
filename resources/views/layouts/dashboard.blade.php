<!-- resources/views/layouts/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 text-white min-h-screen p-4 flex flex-col justify-between">
            <!-- Top links -->
            <div>
                <h1 class="text-xl font-bold mb-6">Dashboard</h1>
                <nav>
                    <a href="{{ route('dashboard') }}" class="block py-2 px-2 rounded hover:bg-gray-700">Home</a>
                    <a href="{{ route('dashboard.blog') }}" class="block py-2 px-2 rounded hover:bg-gray-700">Blog</a>
                </nav>
            </div>

            <!-- Bottom logout -->
            <div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button 
                        type="submit" 
                        class="w-full text-left block py-2 px-2 rounded hover:bg-red-600 bg-red-500 mt-6">
                        Logout
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main content -->
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>
</body>
</html>
