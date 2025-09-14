<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
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
    </style>
</head>

<body class="flex items-center justify-center min-h-screen bg-dark">
    <div class="w-full max-w-sm rounded-3xl p-8 shadow-2xl" style="background: var(--dark-2);">
        <h2 class="text-3xl text-center orbitron font-bold mb-6 gradient-text">LOGIN</h2>

        {{-- Error Messages --}}
        @if ($errors->any())
        <div class="mb-4 p-4 rounded-xl" style="background: var(--dark-3); border: 1px solid var(--accent);">
            <ul class="list-none text-sm space-y-1">
                @foreach ($errors->all() as $error)
                <li class="text-accent">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <!-- Email Input -->
            <div>
                <input type="email" id="email" name="email" placeholder="Email Address" required autofocus
                    class="mt-1 w-full rounded-full bg-transparent border-2 border-transparent focus:border-primary focus:ring-0 shadow-sm p-3 text-light placeholder-gray-500 transition-all duration-300"
                    style="background: var(--dark-3); outline: none;">
            </div>

            <!-- Password Input -->
            <div>
                <input type="password" id="password" name="password" placeholder="Password" required
                    class="mt-1 w-full rounded-full bg-transparent border-2 border-transparent focus:border-primary focus:ring-0 shadow-sm p-3 text-light placeholder-gray-500 transition-all duration-300"
                    style="background: var(--dark-3); outline: none;">
            </div>

            <!-- Role Selection -->
            <div>
                <div class="relative">
                    <select id="role" name="role" required
                        class="w-full rounded-full bg-transparent border-2 border-transparent focus:border-primary focus:ring-0 shadow-sm p-3 text-light transition-all duration-300 appearance-none pr-10"
                        style="background: var(--dark-3); outline: none;">
                        <option value="" class="bg-dark-2 text-light" disabled selected>Select Role</option>
                        <option value="admin" class="bg-dark-2 text-light">Admin</option>
                        <option value="manager" class="bg-dark-2 text-light">Manager</option>
                        <option value="developer" class="bg-dark-2 text-light">Developer</option>
                    </select>
                    <!-- Custom Arrow Icon -->
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-light">
                        <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit"
                    class="w-full py-3 px-4 font-semibold rounded-full shadow-lg transition-all duration-300 transform hover:scale-105"
                    style="background: linear-gradient(90deg, var(--primary), var(--secondary), var(--accent));">
                    <span class="text-dark-2 orbitron">Login</span>
                </button>
            </div>

            <!-- Links -->
            <div class="flex flex-col items-center gap-2 text-sm mt-4">
                <a href="#" class="text-primary hover:underline font-medium">Forgot Password?</a>
                <a href="{{ route('register') }}" class="text-secondary hover:underline font-medium">Create New Account</a>
            </div>
        </form>
    </div>
</body>

</html>
