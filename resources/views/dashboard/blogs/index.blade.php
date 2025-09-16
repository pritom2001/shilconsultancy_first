@extends('layouts.admin_panel')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <!-- Success/Error Messages -->
        @if (session('success'))
            <div class="bg-green-500 text-white px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="bg-red-500 text-white px-4 py-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h1 class="text-3xl font-bold mb-6 text-white">{{ isset($blog) ? 'Edit Blog' : 'Add New Blog' }}</h1>

        <!-- Add/Edit Blog Form -->
        <div class="bg-[#1a1a1a] p-6 rounded-lg shadow-lg mb-8">
            <form action="{{ isset($blog) ? route('dashboard.blogs.update', $blog->slug) : route('dashboard.blogs.store') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($blog))
                    @method('PUT')
                @endif

                <div class="mb-4">
                    <label for="title" class="block text-gray-400 font-semibold mb-2">Title</label>
                    <input type="text" name="title" id="title"
                        value="{{ $blog->title ?? old('title') }}"
                        class="w-full px-4 py-2 rounded-lg bg-[#2d2d2d] text-gray-200 border border-gray-600 focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="subtitle" class="block text-gray-400 font-semibold mb-2">Subtitle</label>
                    <input type="text" name="subtitle" id="subtitle"
                        value="{{ $blog->subtitle ?? old('subtitle') }}"
                        class="w-full px-4 py-2 rounded-lg bg-[#2d2d2d] text-gray-200 border border-gray-600 focus:outline-none focus:border-blue-500">
                </div>

                <div class="mb-4">
                    <label for="category" class="block text-gray-400 font-semibold mb-2">Category</label>
                    <select name="category" id="category"
                        class="w-full px-4 py-2 rounded-lg bg-[#2d2d2d] text-gray-200 border border-gray-600 focus:outline-none focus:border-blue-500">
                        <option value="">Select Category</option>
                        @foreach ($categories as $cat => $subs)
                            <option value="{{ $cat }}" @if (isset($blog) && $blog->category == $cat) selected @endif>
                                {{ $cat }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="subcategory" class="block text-gray-400 font-semibold mb-2">Subcategory</label>
                    <select name="subcategory" id="subcategory"
                        class="w-full px-4 py-2 rounded-lg bg-[#2d2d2d] text-gray-200 border border-gray-600 focus:outline-none focus:border-blue-500">
                        <option value="">Select Subcategory</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="blog_image" class="block text-gray-400 font-semibold mb-2">Blog Image</label>
                    <input type="file" name="blog_image" id="blog_image"
                        class="w-full text-gray-200 border border-gray-600 rounded-lg p-2 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-gray-700 file:text-white hover:file:bg-gray-600">
                    @if (isset($blog) && $blog->image)
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="Current Blog Image"
                            class="mt-4 w-48 h-auto rounded-lg">
                    @endif
                </div>

                <div class="mb-4">
                    <label for="content" class="block black font-semibold mb-2">Content</label>
                    <textarea name="content" id="content"
                        class="w-full px-4 py-2 rounded-lg bg-[#2d2d2d] text-gray-200 border border-gray-600 focus:outline-none focus:border-blue-500 min-h-[300px]">{{ $blog->content ?? old('content') }}</textarea>
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors duration-300">
                        {{ isset($blog) ? 'Update Blog' : 'Publish Blog' }}
                    </button>
                    @if (isset($blog))
                        <a href="{{ route('dashboard.blogs.index') }}"
                            class="text-gray-400 hover:text-white transition-colors duration-300">Cancel Edit</a>
                    @endif
                </div>
            </form>
        </div>

        <h2 class="text-2xl font-bold mb-4 text-white">Existing Blogs</h2>

        <!-- Blogs List Table -->
        <div class="bg-[#1a1a1a] p-6 rounded-lg shadow-lg overflow-x-auto">
            <table class="w-full text-left table-auto">
                <thead>
                    <tr class="text-gray-400 border-b border-gray-700">
                        <th class="p-4">Title</th>
                        <th class="p-4">Category</th>
                        <th class="p-4">Created At</th>
                        <th class="p-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($blogs as $blogItem)
                        <tr class="border-b border-gray-700 hover:bg-[#2d2d2d] transition-colors duration-200">
                            <td class="p-4">{{ $blogItem->title }}</td>
                            <td class="p-4">{{ $blogItem->category }}</td>
                            <td class="p-4">{{ $blogItem->created_at->format('M d, Y') }}</td>
                            <td class="p-4 flex space-x-2">
                                <a href="{{ route('dashboard.blogs.edit', $blogItem->slug) }}"
                                    class="text-blue-500 hover:text-blue-400 transition-colors duration-200">Edit</a>
                                <button type="button" class="text-red-500 hover:text-red-400 transition-colors duration-200 delete-blog-btn" data-blog-slug="{{ $blogItem->slug }}">
                                    Delete
                                </button>
                                <form id="delete-form-{{ $blogItem->slug }}" action="{{ route('dashboard.blogs.destroy', $blogItem->slug) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="p-4 text-center text-gray-500">No blogs found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="delete-modal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-[#1a1a1a] p-8 rounded-lg shadow-2xl w-full max-w-sm mx-4">
            <h3 class="text-xl font-bold text-white mb-4">Confirm Deletion</h3>
            <p class="text-gray-300 mb-6">Are you sure you want to delete this blog post? This action cannot be undone.</p>
            <div class="flex justify-end space-x-4">
                <button type="button" id="cancel-delete" class="px-4 py-2 rounded-lg text-gray-400 border border-gray-600 hover:bg-gray-700 transition-colors">Cancel</button>
                <button type="button" id="confirm-delete" class="px-4 py-2 rounded-lg bg-red-600 text-white hover:bg-red-700 transition-colors">Delete</button>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            ClassicEditor
                .create(document.querySelector('#content'), {
                    toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', '|', 'undo', 'redo']
                })
                .catch(error => {
                    console.error(error);
                });

            // Handle subcategory dropdown based on category selection
            const categories = @json($categories);
            const categorySelect = document.getElementById('category');
            const subcategorySelect = document.getElementById('subcategory');
            
            // Get the current subcategory to be selected, prioritizing 'old' data after a validation failure.
            const currentSubcategory = "{{ old('subcategory') ?? ($blog->subcategory ?? '') }}";

            const updateSubcategories = (selectedCategory) => {
                subcategorySelect.innerHTML = '<option value="">Select Subcategory</option>';
                if (selectedCategory && categories[selectedCategory]) {
                    categories[selectedCategory].forEach(sub => {
                        const option = document.createElement('option');
                        option.value = sub;
                        option.textContent = sub;
                        // Pre-select the subcategory if editing or after a validation error
                        if (sub === currentSubcategory) {
                            option.selected = true;
                        }
                        subcategorySelect.appendChild(option);
                    });
                }
            };

            // Initial load
            const initialCategory = categorySelect.value;
            updateSubcategories(initialCategory);

            // Listen for changes
            categorySelect.addEventListener('change', (e) => {
                updateSubcategories(e.target.value);
            });

            // Handle delete confirmation modal
            const deleteModal = document.getElementById('delete-modal');
            const confirmDeleteBtn = document.getElementById('confirm-delete');
            const cancelDeleteBtn = document.getElementById('cancel-delete');
            let formToSubmit = null;

            document.querySelectorAll('.delete-blog-btn').forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault();
                    const blogSlug = e.target.getAttribute('data-blog-slug');
                    formToSubmit = document.getElementById(`delete-form-${blogSlug}`);
                    deleteModal.classList.remove('hidden');
                    deleteModal.classList.add('flex');
                });
            });

            confirmDeleteBtn.addEventListener('click', () => {
                if (formToSubmit) {
                    formToSubmit.submit();
                }
            });

            cancelDeleteBtn.addEventListener('click', () => {
                deleteModal.classList.remove('flex');
                deleteModal.classList.add('hidden');
            });
        });
    </script>
@endpush