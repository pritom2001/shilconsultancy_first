@extends('layouts.admin_panel')

@section('content')
    <div class="p-6 bg-dark-3 text-light min-h-screen">
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-500 text-white p-4 rounded mb-6">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <h1 class="text-3xl font-bold mb-6 gradient-text orbitron">Access Control Panel</h1>
        
        <!-- Add User Section -->
        <div class="mb-8">
            <h2 class="text-2xl font-semibold mb-4 text-light orbitron">Add New User</h2>
            <form action="{{ route('access_control.store') }}" method="POST" class="space-y-4" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-400">Name</label>
                        <input type="text" name="name" id="name" required
                            class="mt-1 block w-full rounded-md bg-dark-2 border-gray-600 text-light focus:ring-primary focus:border-primary">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-400">Email</label>
                        <input type="email" name="email" id="email" required
                            class="mt-1 block w-full rounded-md bg-dark-2 border-gray-600 text-light focus:ring-primary focus:border-primary">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-400">Password</label>
                        <input type="password" name="password" id="password" required
                            class="mt-1 block w-full rounded-md bg-dark-2 border-gray-600 text-light focus:ring-primary focus:border-primary">
                    </div>
                    <div>
                        <label for="role" class="block text-sm font-medium text-gray-400">Role</label>
                        <select name="role" id="role" required
                            class="mt-1 block w-full rounded-md bg-dark-2 border-gray-600 text-light focus:ring-primary focus:border-primary">
                            <option value="admin">Admin</option>
                            <option value="manager">Manager</option>
                            <option value="developer">Developer</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label for="image" class="block text-sm font-medium text-gray-400">Profile Image</label>
                    <input type="file" name="image" id="image"
                        class="mt-1 block w-full rounded-md bg-dark-2 border-gray-600 text-light focus:ring-primary focus:border-primary">
                </div>
                <div>
                    <button type="submit"
                        class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary hover:bg-opacity-80 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                        Add User
                    </button>
                </div>
            </form>
        </div>

        <hr class="border-gray-700 my-8">

        <!-- Edit/Delete User Section -->
        <div>
            <h2 class="text-2xl font-semibold mb-4 text-light orbitron">All Users</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-700 rounded-lg overflow-hidden">
                    <thead class="bg-dark-2">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Role</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-dark-3 divide-y divide-gray-700">
                        @foreach($users as $user)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-light">{{ $user->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $user->email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ ucfirst($user->role) }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="{{ route('users.edit', $user->id) }}" class="text-secondary hover:text-opacity-80 transition-colors mr-4">Edit</a>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-400 transition-colors">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
