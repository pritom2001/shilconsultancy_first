@extends('admin_panel')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-white mb-6">Edit Blog: <span class="text-blue-400">{{ $blog->title }}</span></h1>

        @if ($errors->any())
            <div class="bg-red-500 text-white p-4 rounded-lg mb-6">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="bg-[#1a1a1a] p-6 rounded-lg shadow-lg grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Title -->
                <div>
                    <label for="title" class="block text-gray-400 font-semibold mb-2">Title</label>
                    <input type="text" id="title" name="title" value="{{ old('title', $blog->title) }}" class="w-full p-3 rounded-lg bg-gray-900 text-white border border-gray-700 focus:outline-none focus:border-blue-500" required>
                </div>

                <!-- Slug -->
                <div>
                    <label for="slug" class="block text-gray-400 font-semibold mb-2">Slug</label>
                    <input type="text" id="slug" name="slug" value="{{ old('slug', $blog->slug) }}" class="w-full p-3 rounded-lg bg-gray-900 text-white border border-gray-700 focus:outline-none focus:border-blue-500">
                </div>

                <!-- Category -->
                <div>
                    <label for="category" class="block text-gray-400 font-semibold mb-2">Category</label>
                    <input type="text" id="category" name="category" value="{{ old('category', $blog->category) }}" class="w-full p-3 rounded-lg bg-gray-900 text-white border border-gray-700 focus:outline-none focus:border-blue-500">
                </div>

                <!-- Excerpt -->
                <div>
                    <label for="excerpt" class="block text-gray-400 font-semibold mb-2">Excerpt</label>
                    <textarea id="excerpt" name="excerpt" rows="3" class="w-full p-3 rounded-lg bg-gray-900 text-white border border-gray-700 focus:outline-none focus:border-blue-500">{{ old('excerpt', $blog->excerpt) }}</textarea>
                </div>

                <!-- Image -->
                <div class="col-span-1 md:col-span-2">
                    <label for="image" class="block text-gray-400 font-semibold mb-2">Featured Image</label>
                    @if ($blog->image_url)
                        <div class="mb-4">
                            <img src="{{ $blog->image_url }}" alt="Current Image" class="max-w-xs rounded-lg shadow-lg">
                        </div>
                    @endif
                    <input type="file" id="image" name="image" class="w-full p-3 rounded-lg bg-gray-900 text-white border border-gray-700 focus:outline-none focus:border-blue-500">
                    <small class="text-gray-500 mt-2 block">Leave this field blank to keep the current image.</small>
                </div>

                <!-- Content -->
                <div class="col-span-1 md:col-span-2">
                    <label for="content" class="block text-gray-400 font-semibold mb-2">Content</label>
                    <textarea id="content" name="content" rows="10" class="w-full p-3 rounded-lg bg-gray-900 text-white border border-gray-700 focus:outline-none focus:border-blue-500" required>{{ old('content', $blog->content) }}</textarea>
                </div>

                <!-- Submit Button -->
                <div class="col-span-1 md:col-span-2 flex justify-end">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg transition-colors duration-300">
                        Update Blog Post
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
