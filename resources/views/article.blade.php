
@extends('layouts.template')
@section('title', 'Articles')

@section('content')
    <main id="post" class="py-20 relative overflow-hidden pt-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row gap-8">
            <!-- Main Content -->
            <div class="w-full lg:w-2/3">
                <article class="card-bg rounded-xl p-6 md:p-10">
                    <header class="mb-8">
                        <a href="{{ route('public.blogs.index') }}"
                            class="inline-flex items-center text-cyan-400 hover:text-cyan-300 mb-6 transition-colors">
                            <i class="fas fa-arrow-left mr-2"></i>
                            Back to Blog
                        </a>
                        <div class="mb-4">
                            <span
                                class="px-3 py-1 bg-purple-500 bg-opacity-20 text-purple-300 rounded-full text-sm font-medium">{{ $blog->category }}</span>
                        </div>
                        <h1 class="text-3xl md:text-5xl font-bold gradient-text leading-tight">{{ $blog->title }}</h1>
                        <div class="mt-4 flex items-center text-sm text-gray-500">
                            <span>By {{ $blog->author->name ?? 'Admin' }}</span>
                            <span class="mx-2">&bull;</span>
                            <span>{{ $blog->created_at->format('M d, Y') }}</span>
                        </div>
                    </header>
                    <div class="blog-placeholder-img h-64 md:h-96 rounded-lg mb-8">
                        @if ($blog->image)
                            <img src="{{ Storage::url($blog->image) }}" alt="{{ $blog->title }}"
                                class="w-full h-full object-cover rounded-lg">
                        @else
                            <div class="w-full h-full flex items-center justify-center">
                                <i class="fas fa-chart-line text-8xl opacity-50"></i>
                            </div>
                        @endif
                    </div>
                    <div class="prose-custom max-w-none text-lg leading-relaxed space-y-6">
                        {!! $blog->content !!}
                    </div>

                    <footer class="mt-10 pt-6 border-t border-gray-800">
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-semibold text-white">Share this post:</span>
                            <div class="flex space-x-3">
                                <a href="#"
                                    class="w-10 h-10 bg-gray-800 hover:bg-gray-700 rounded-full flex items-center justify-center transition-colors"><i
                                        class="fab fa-twitter"></i></a>
                                <a href="#"
                                    class="w-10 h-10 bg-gray-800 hover:bg-gray-700 rounded-full flex items-center justify-center transition-colors"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="#"
                                    class="w-10 h-10 bg-gray-800 hover:bg-gray-700 rounded-full flex items-center justify-center transition-colors"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </footer>
                </article>

                <!-- Author Box -->
                <div class="card-bg rounded-xl p-6 md:p-8 mt-8 flex items-start sm:items-center flex-col sm:flex-row">
                    <div
                        class="w-20 h-20 rounded-full author-img flex-shrink-0 mb-4 sm:mb-0 sm:mr-6 flex items-center justify-center text-white text-3xl font-bold">
                        {{ substr($blog->author->name ?? 'A', 0, 1) }}
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-white">About {{ $blog->author->name ?? 'Admin' }}</h4>
                        <p class="text-gray-400 mt-2">Experienced professional with expertise in digital marketing and SEO
                            strategies.</p>
                    </div>
                </div>

                <!-- Comments Section -->
                <div class="card-bg rounded-xl p-6 md:p-8 mt-8">
                    <h3 class="text-2xl font-bold text-white mb-6">Leave a Comment</h3>
                    <form action="{{ route('public.blogs.comment', $blog->slug) }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <input type="text" name="name" placeholder="Your Name"
                                class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-purple-500"
                                required>
                            <input type="email" name="email" placeholder="Your Email"
                                class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-purple-500"
                                required>
                        </div>
                        <textarea name="comment" placeholder="Your Comment" rows="5"
                            class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-purple-500 mb-6"
                            required></textarea>
                        <button type="submit"
                            class="px-8 py-3 bg-gradient-to-r from-purple-600 to-cyan-500 text-white rounded-full font-semibold shadow-lg hover:shadow-xl transition duration-300">Post
                            Comment</button>
                    </form>

                    <div class="mt-10 pt-6 border-t border-gray-800">
                        <h4 class="text-xl font-bold text-white mb-6">{{ $blog->comments->count() }} Comments</h4>
                        <div class="space-y-6">
                            @foreach ($blog->comments as $comment)
                                <div class="flex items-start">
                                    <div
                                        class="w-12 h-12 rounded-full author-img flex-shrink-0 mr-4 flex items-center justify-center text-white font-bold">
                                        {{ substr($comment->name, 0, 1) }}
                                    </div>
                                    <div>
                                        <p class="font-bold text-white">{{ $comment->name }}</p>
                                        <p class="text-xs text-gray-500 mb-2">{{ $comment->created_at->format('F j, Y') }}
                                        </p>
                                        <p class="text-gray-400">{{ $comment->comment }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Related Posts -->
                <div class="mt-12">
                    <h3 class="text-3xl font-bold text-white mb-6 gradient-text">You Might Also Like</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        @forelse ($relatedPosts as $related)
                            <div class="card-bg rounded-xl overflow-hidden">
                                <a href="{{ route('public.blogs.show', $related->slug) }}" class="block">
                                    <div class="blog-placeholder-img h-48">
                                        @if ($related->image)
                                            <img src="{{ Storage::url($related->image) }}" alt="{{ $related->title }}"
                                                class="w-full h-full object-cover">
                                        @else
                                            <div class="w-full h-full flex items-center justify-center">
                                                <i class="fas fa-palette text-5xl opacity-50"></i>
                                            </div>
                                        @endif
                                    </div>
                                </a>
                                <div class="p-6">
                                    <span
                                        class="px-3 py-1 bg-cyan-500 bg-opacity-20 text-cyan-300 rounded-full text-xs font-medium">{{ $related->category }}</span>
                                    <h4 class="text-lg font-bold mt-3 text-white hover:text-cyan-400 transition-colors">
                                        <a
                                            href="{{ route('public.blogs.show', $related->slug) }}">{{ $related->title }}</a>
                                    </h4>
                                </div>
                            </div>
                        @empty
                            <p class="text-gray-400 col-span-2">No related posts found</p>
                        @endforelse
                    </div>
                </div>

                <!-- Prev/Next Navigation -->
                <div class="flex justify-between items-center mt-12 pt-6 border-t border-gray-800">
                    @if ($previousPost)
                        <a href="{{ route('public.blogs.show', $previousPost->slug) }}"
                            class="flex items-center text-gray-400 hover:text-white transition-colors">
                            <i class="fas fa-arrow-left mr-3"></i>
                            <div>
                                <span class="text-xs">Previous Post</span>
                                <p class="font-semibold">{{ $previousPost->title }}</p>
                            </div>
                        </a>
                    @else
                        <div></div> <!-- Empty div for spacing -->
                    @endif

                    @if ($nextPost)
                        <a href="{{ route('public.blogs.show', $nextPost->slug) }}"
                            class="flex items-center text-right text-gray-400 hover:text-white transition-colors">
                            <div>
                                <span class="text-xs">Next Post</span>
                                <p class="font-semibold">{{ $nextPost->title }}</p>
                            </div>
                            <i class="fas fa-arrow-right ml-3"></i>
                        </a>
                    @endif
                </div>
            </div>

            <!-- Sidebar -->
            <aside class="w-full lg:w-1/3 space-y-8">
                <!-- Latest Posts -->
                <div class="card-bg rounded-xl p-6">
                    <h3 class="text-xl font-bold text-white mb-4 border-b border-gray-700 pb-3">Latest Posts</h3>
                    <ul class="space-y-4">
                        @foreach ($latestPosts as $latest)
                            <li>
                                <!-- FIXED: Use slug instead of object -->
                                <a href="{{ route('public.blogs.show', $latest->slug) }}"
                                    class="text-gray-300 hover:text-cyan-400 transition-colors">{{ $latest->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Categories -->
                <div class="card-bg rounded-xl p-6">
                    <h3 class="text-xl font-bold text-white mb-4 border-b border-gray-700 pb-3">Categories</h3>
                    <ul class="space-y-3">
                        @foreach ($categories as $category)
                            <li>
                                <a href="{{ route('public.blogs.category', Str::slug($category->category)) }}"
                                    class="flex justify-between items-center text-gray-300 hover:text-cyan-400 transition-colors">
                                    {{ $category->category }}
                                    <span class="text-xs text-gray-500">({{ $category->count }})</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Featured Post -->
                <div class="card-bg rounded-xl p-6">
                    <h3 class="text-xl font-bold text-white mb-4 border-b border-gray-700 pb-3">Featured Post</h3>
                    @if ($featuredPost)
                        <div class="rounded-lg overflow-hidden mb-4">
                            <a href="{{ route('public.blogs.show', $featuredPost->slug) }}" class="block">
                                <div class="blog-placeholder-img h-40">
                                    @if ($featuredPost->image)
                                        <img src="{{ Storage::url($featuredPost->image) }}"
                                            alt="{{ $featuredPost->title }}" class="w-full h-full object-cover">
                                    @else
                                        <div class="w-full h-full flex items-center justify-center">
                                            <i class="fas fa-star text-5xl opacity-50"></i>
                                        </div>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <h4 class="font-bold text-lg text-white hover:text-cyan-400 transition-colors">
                            <a
                                href="{{ route('public.blogs.show', $featuredPost->slug) }}">{{ $featuredPost->title }}</a>
                        </h4>
                        <p class="text-sm text-gray-400 mt-2">
                            {{ Str::limit(strip_tags($featuredPost->excerpt ?? $featuredPost->content), 80) }}</p>
                    @else
                        <p class="text-gray-400">No featured post available</p>
                    @endif
                </div>
            </aside>
        </div>
    </main>

    <style>
        .card-bg {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .blog-placeholder-img {
            /* background: linear-gradient(135deg, #6e45e2, #88d3ce); */
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .prose-custom {
            color: #d1d5db;
        }

        .prose-custom h2 {
            color: #ffffff;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding-bottom: 0.5rem;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }

        .prose-custom h3 {
            color: #ffffff;
            margin-top: 1.5rem;
            margin-bottom: 0.75rem;
        }

        .prose-custom p {
            margin-bottom: 1rem;
        }

        .prose-custom ul,
        .prose-custom ol {
            margin-bottom: 1rem;
            padding-left: 1.5rem;
        }

        .prose-custom li {
            margin-bottom: 0.5rem;
        }

        .author-img {
            background: linear-gradient(135deg, #6e45e2, #88d3ce);
        }

        .gradient-text {
            background: linear-gradient(to right, #00bfff, #007bff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
@endsection
