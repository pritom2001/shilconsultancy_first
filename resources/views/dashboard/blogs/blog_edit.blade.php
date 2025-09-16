@extends('layouts.admin_panel')

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

        <form action="{{ route('dashboard.blogs.update', $blog->slug) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="bg-[#1a1a1a] p-6 rounded-lg shadow-lg grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Title -->
                <div>
                    <label for="title" class="block text-gray-400 font-semibold mb-2">Title</label>
                    <input type="text" id="title" name="title" value="{{ old('title', $blog->title) }}" class="w-full p-3 rounded-lg bg-gray-900 text-white border border-gray-700 focus:outline-none focus:border-blue-500" required>
                </div>

                <!-- Subtitle -->
                <div>
                    <label for="subtitle" class="block text-gray-400 font-semibold mb-2">Subtitle</label>
                    <input type="text" id="subtitle" name="subtitle" value="{{ old('subtitle', $blog->subtitle) }}" class="w-full p-3 rounded-lg bg-gray-900 text-white border border-gray-700 focus:outline-none focus:border-blue-500">
                </div>

                <!-- Category -->
                <div>
                    <label for="category" class="block text-gray-400 font-semibold mb-2">Category</label>
                    <select id="category" name="category" class="w-full p-3 rounded-lg bg-gray-900 text-white border border-gray-700 focus:outline-none focus:border-blue-500" required>
                        <option value="">Select Category</option>
                        @foreach(array_keys($categories) as $category)
                            <option value="{{ $category }}" {{ old('category', $blog->category) == $category ? 'selected' : '' }}>{{ $category }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Subcategory -->
                <div>
                    <label for="subcategory" class="block text-gray-400 font-semibold mb-2">Subcategory</label>
                    <select id="subcategory" name="subcategory" class="w-full p-3 rounded-lg bg-gray-900 text-white border border-gray-700 focus:outline-none focus:border-blue-500">
                        <option value="">Select Subcategory</option>
                        @if ($blog->category && isset($categories[$blog->category]))
                            @foreach ($categories[$blog->category] as $subcategory)
                                <option value="{{ $subcategory }}" {{ old('subcategory', $blog->subcategory) == $subcategory ? 'selected' : '' }}>{{ $subcategory }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>

                <!-- Featured Image -->
                <div class="col-span-1 md:col-span-2">
                    <label for="image" class="block text-gray-400 font-semibold mb-2">Featured Image</label>
                    @if ($blog->image)
                        <div class="mb-4">
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="Current Image" class="max-w-xs rounded-lg shadow-lg">
                        </div>
                    @endif
                    <input type="file" id="image" name="image" class="w-full p-3 rounded-lg bg-gray-900 text-white border border-gray-700 focus:outline-none focus:border-blue-500">
                    <small class="text-gray-500 mt-2 block">Leave this field blank to keep the current image.</small>
                </div>

                <!-- Content with CKEditor -->
                <div class="col-span-1 md:col-span-2">
                    <label for="content" class="block text-gray-400 font-semibold mb-2">Content</label>
                    <textarea id="content" name="content" class="hidden" required>{{ old('content', $blog->content) }}</textarea>
                    <div id="editor">{!! old('content', $blog->content) !!}</div>
                </div>

                <!-- Submit Button -->
                <div class="col-span-1 md:col-span-2 flex justify-end">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg transition-colors duration-300">Update Blog</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/ckeditor.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle subcategory dropdown based on category selection
            const categories = @json($categories);
            const categorySelect = document.getElementById('category');
            const subcategorySelect = document.getElementById('subcategory');
            
            const updateSubcategories = (selectedCategory) => {
                subcategorySelect.innerHTML = '<option value="">Select Subcategory</option>';
                if (selectedCategory && categories[selectedCategory]) {
                    categories[selectedCategory].forEach(sub => {
                        const option = document.createElement('option');
                        option.value = sub;
                        option.textContent = sub;
                        // Pre-select if it matches old value or blog value
                        const currentSubcategory = "{{ old('subcategory', $blog->subcategory) }}";
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

            // Initialize CKEditor
            ClassicEditor
                .create(document.querySelector('#editor'), {
                    ckfinder: {
                        uploadUrl: "{{ route('dashboard.blogs.upload') }}"
                    },
                    toolbar: {
                        items: [
                            'heading', '|',
                            'bold', 'italic', 'underline', 'strikethrough', '|',
                            'alignment', '|',
                            'link', 'uploadImage', 'insertTable', 'mediaEmbed', '|',
                            'bulletedList', 'numberedList', 'todoList', '|',
                            'blockQuote', 'code', 'codeBlock', '|',
                            'undo', 'redo'
                        ]
                    },
                    image: {
                        toolbar: [
                            'imageTextAlternative',
                            'toggleImageCaption',
                            'imageStyle:inline',
                            'imageStyle:block',
                            'imageStyle:side',
                            'linkImage'
                        ]
                    }
                })
                .then(editor => {
                    console.log('Editor was initialized', editor);
                    
                    // Update the textarea with CKEditor content before form submission
                    const form = document.querySelector('form');
                    form.addEventListener('submit', function() {
                        document.getElementById('content').value = editor.getData();
                    });
                })
                .catch(error => {
                    console.error('Error initializing CKEditor:', error);
                });
        });
    </script>
@endpush