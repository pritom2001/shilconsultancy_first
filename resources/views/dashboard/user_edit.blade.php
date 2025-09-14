@extends('layouts.admin_panel')

@section('content')
    <div class="p-6 bg-dark-3 text-light min-h-screen">
        <h1 class="text-3xl font-bold mb-6 gradient-text orbitron">Edit User</h1>

        @if ($errors->any())
            <div class="bg-red-500 text-white p-4 rounded mb-6">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-8">
            <form action="{{ route('users.update', $user->id) }}" method="POST" class="space-y-4" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-400">Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required
                            class="mt-1 block w-full rounded-md bg-dark-2 border-gray-600 text-light focus:ring-primary focus:border-primary">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-400">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required
                            class="mt-1 block w-full rounded-md bg-dark-2 border-gray-600 text-light focus:ring-primary focus:border-primary">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-400">Password</label>
                        <input type="password" name="password" id="password"
                            class="mt-1 block w-full rounded-md bg-dark-2 border-gray-600 text-light focus:ring-primary focus:border-primary"
                            placeholder="Leave blank to keep current password">
                    </div>
                    <div>
                        <label for="role" class="block text-sm font-medium text-gray-400">Role</label>
                        <select name="role" id="role" required
                            class="mt-1 block w-full rounded-md bg-dark-2 border-gray-600 text-light focus:ring-primary focus:border-primary">
                            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="manager" {{ $user->role == 'manager' ? 'selected' : '' }}>Manager</option>
                            <option value="developer" {{ $user->role == 'developer' ? 'selected' : '' }}>Developer</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label for="image" class="block text-sm font-medium text-gray-400">Profile Image</label>
                    <input type="file" name="image" id="image"
                        class="mt-1 block w-full rounded-md bg-dark-2 border-gray-600 text-light focus:ring-primary focus:border-primary">
                </div>
                @if ($user->image)
                    <div class="mt-4">
                        <img src="{{ Storage::url($user->image) }}" alt="Current Profile Image" class="h-20 w-20 rounded-full object-cover">
                    </div>
                @endif
                <div>
                    <button type="submit"
                        class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary hover:bg-opacity-80 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                        Update User
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
