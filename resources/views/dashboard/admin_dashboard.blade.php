@extends('layouts.admin_panel')
@section('content')
 <main class="flex-1 overflow-x-hidden overflow-y-auto bg-dark p-6">
            <div class="container mx-auto">
                <h2 class="text-3xl font-bold mb-6  gradient-text  ">Dashboard</h2>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                    <div class="card-bg p-6 rounded-xl flex items-center space-x-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-cyan-400 rounded-xl flex items-center justify-center">
                             <i class="fas fa-file-alt text-2xl"></i>
                        </div>
                        <div>
                            <p class="text-gray-400 text-sm">Total Pages</p>
                            <p class="text-2xl font-bold text-white">12</p>
                        </div>
                    </div>
                    <div class="card-bg p-6 rounded-xl flex items-center space-x-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-cyan-400 to-pink-500 rounded-xl flex items-center justify-center">
                             <i class="fas fa-pen-nib text-2xl"></i>
                        </div>
                        <div>
                            <p class="text-gray-400 text-sm">Total Posts</p>
                            <p class="text-2xl font-bold text-white">{{ $blogs->count() }}</p>
                        </div>
                    </div>
                    <div class="card-bg p-6 rounded-xl flex items-center space-x-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-yellow-500 rounded-xl flex items-center justify-center">
                             <i class="fas fa-comments text-2xl"></i>
                        </div>
                        <div>
                            <p class="text-gray-400 text-sm">Comments</p>
                            <p class="text-2xl font-bold text-white">{{ $blogs->sum('comments_count') }}</p>
                        </div>
                    </div>
                    <div class="card-bg p-6 rounded-xl flex items-center space-x-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-green-400 to-blue-500 rounded-xl flex items-center justify-center">
                             <i class="fas fa-users text-2xl"></i>
                        </div>
                        <div>
                            <p class="text-gray-400 text-sm">Users</p>
                            <p class="text-2xl font-bold text-white">3</p>
                        </div>
                    </div>
                </div>

                <!-- Chart -->
                <div class="card-bg p-6 rounded-xl mb-6">
                    <h3 class="text-xl font-bold text-white mb-4">Website Traffic</h3>
                    <div class="relative h-96">
                        <canvas id="trafficChart"></canvas>
                    </div>
                </div>
                
                <!-- Recent Activity -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Recent Blog Posts -->
                    <div class="card-bg p-6 rounded-xl">
                        <h3 class="text-xl font-bold text-white mb-4">Recent Blog Posts</h3>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left table-custom">
                                <thead>
                                    <tr>
                                        <th class="p-3">Title</th>
                                        <th class="p-3">Category</th>
                                        <th class="p-3">Date</th>
                                        <th class="p-3">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($blogs->take(5) as $blog)
                                    <tr>
                                        <td class="p-3 border-t border-dark-3">{{ $blog->title }}</td>
                                        <td class="p-3 border-t border-dark-3">{{ $blog->category }}</td>
                                        <td class="p-3 border-t border-dark-3">{{ $blog->created_at->format('M d, Y') }}</td>
                                        <td class="p-3 border-t border-dark-3">
                                            <a href="{{ route('dashboard.blogs.edit', $blog->slug) }}" class="text-cyan-400 hover:underline">Edit</a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="p-3 border-t border-dark-3 text-center text-gray-400">No blog posts found</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Recent Comments -->
                     <div class="card-bg p-6 rounded-xl">
                        <h3 class="text-xl font-bold text-white mb-4">Recent Comments</h3>
                        <div class="space-y-4">
                            @php
                                $recentComments = [];
                                // Collect recent comments from all blogs
                                foreach ($blogs as $blog) {
                                    foreach ($blog->comments->take(2) as $comment) {
                                        $recentComments[] = [
                                            'blog' => $blog,
                                            'comment' => $comment
                                        ];
                                    }
                                }
                                // Sort by comment creation date and take the latest 2
                                usort($recentComments, function($a, $b) {
                                    return $b['comment']->created_at <=> $a['comment']->created_at;
                                });
                                $recentComments = array_slice($recentComments, 0, 2);
                            @endphp
                            
                            @forelse($recentComments as $item)
                            <div class="p-3 rounded-lg bg-dark-3">
                                <p class="text-sm text-white">
                                    <strong>{{ $item['comment']->name }}</strong> on 
                                    <a href="{{ route('public.blogs.show', $item['blog']->slug) }}" class="text-cyan-400">{{ Str::limit($item['blog']->title, 20) }}...</a>
                                </p>
                                <p class="text-xs text-gray-400 mt-1">"{{ Str::limit($item['comment']->content, 60) }}"</p>
                                <p class="text-xs text-gray-500 mt-2">{{ $item['comment']->created_at->diffForHumans() }}</p>
                            </div>
                            @empty
                            <div class="p-3 rounded-lg bg-dark-3">
                                <p class="text-sm text-gray-400">No comments yet</p>
                            </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script>
         document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('trafficChart').getContext('2d');
        
        // Gradient for chart
        const gradient = ctx.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, 'rgba(110, 69, 226, 0.5)');
        gradient.addColorStop(1, 'rgba(110, 69, 226, 0)');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
                datasets: [{
                    label: 'Page Views',
                    data: [1200, 1900, 3000, 5000, 2300, 3100, 4500, 3800, 4200],
                    borderColor: 'rgba(136, 211, 206, 1)',
                    backgroundColor: gradient,
                    borderWidth: 2,
                    pointBackgroundColor: 'rgba(136, 211, 206, 1)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgba(136, 211, 206, 1)',
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(255, 255, 255, 0.1)'
                        },
                        ticks: {
                            color: '#9ca3af'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                         ticks: {
                            color: '#9ca3af'
                        }
                    }
                }
            }
        });
    });
</script>
@endsection