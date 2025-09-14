@extends('layouts.template')

@section('title', 'Our Team')

@section('content')
<main id="team" class="py-20 relative overflow-hidden pt-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h1 class="text-4xl md:text-6xl font-bold mb-4 gradient-text">Meet Our Team</h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">The architects of your digital success. A blend of creativity, technology, and strategy.</p>
            </div>

            <!-- CEO Section -->
            <section class="mb-20">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-10 text-white orbitron">Leadership</h2>
                <div class="flex justify-center">
                    <div class="team-card rounded-xl p-6 w-full max-w-sm text-center">
                        <img src="https://placehold.co/160x160/6e45e2/ffffff?text=JD" alt="Photo of John Doe" class="w-40 h-40 rounded-full mx-auto mb-4 object-cover">
                        <h3 class="text-2xl font-bold text-white">John Doe</h3>
                        <p class="gradient-text font-semibold">Chief Executive Officer</p>
                        <div class="mt-4 flex justify-center space-x-4 text-gray-400">
                            <a href="#" class="hover:text-white"><i class="fab fa-linkedin-in text-xl"></i></a>
                            <a href="#" class="hover:text-white"><i class="fab fa-twitter text-xl"></i></a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Managers Section -->
            <section class="mb-20">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-10 text-white orbitron">Managers</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="team-card rounded-xl p-6 text-center">
                        <img src="https://placehold.co/128x128/88d3ce/0f0e17?text=JS" alt="Photo of Jane Smith" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
                        <h3 class="text-xl font-bold text-white">Jane Smith</h3>
                        <p class="text-secondary font-medium">Head of Technology</p>
                    </div>
                    <div class="team-card rounded-xl p-6 text-center">
                        <img src="https://placehold.co/128x128/88d3ce/0f0e17?text=MC" alt="Photo of Michael Chen" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
                        <h3 class="text-xl font-bold text-white">Michael Chen</h3>
                        <p class="text-secondary font-medium">Marketing Director</p>
                    </div>
                    <div class="team-card rounded-xl p-6 text-center">
                        <img src="https://placehold.co/128x128/88d3ce/0f0e17?text=ER" alt="Photo of Emily Rodriguez" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
                        <h3 class="text-xl font-bold text-white">Emily Rodriguez</h3>
                        <p class="text-secondary font-medium">Creative Lead</p>
                    </div>
                </div>
            </section>

            <!-- Department Sections -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-12 gap-y-16">
                <!-- Tech Team -->
                <section>
                    <h2 class="text-3xl font-bold mb-8 text-white orbitron">Tech Team</h2>
                    <div class="space-y-6">
                        <div class="team-card rounded-lg p-4 flex items-center space-x-4">
                           <img src="https://placehold.co/64x64/6e45e2/ffffff?text=AL" alt="Photo of Alex Lee" class="w-16 h-16 rounded-full flex-shrink-0 object-cover">
                           <div>
                               <h3 class="font-bold text-white">Alex Lee</h3>
                               <p class="text-sm text-gray-400">Senior Web Developer</p>
                           </div>
                        </div>
                         <div class="team-card rounded-lg p-4 flex items-center space-x-4">
                           <img src="https://placehold.co/64x64/6e45e2/ffffff?text=SK" alt="Photo of Samantha Kim" class="w-16 h-16 rounded-full flex-shrink-0 object-cover">
                           <div>
                               <h3 class="font-bold text-white">Samantha Kim</h3>
                               <p class="text-sm text-gray-400">Frontend Specialist</p>
                           </div>
                        </div>
                    </div>
                </section>
                <!-- Marketing Team -->
                <section>
                    <h2 class="text-3xl font-bold mb-8 text-white orbitron">Marketing Team</h2>
                     <div class="space-y-6">
                        <div class="team-card rounded-lg p-4 flex items-center space-x-4">
                           <img src="https://placehold.co/64x64/6e45e2/ffffff?text=BW" alt="Photo of Ben Williams" class="w-16 h-16 rounded-full flex-shrink-0 object-cover">
                           <div>
                               <h3 class="font-bold text-white">Ben Williams</h3>
                               <p class="text-sm text-gray-400">SEO Strategist</p>
                           </div>
                        </div>
                         <div class="team-card rounded-lg p-4 flex items-center space-x-4">
                           <img src="https://placehold.co/64x64/6e45e2/ffffff?text=CF" alt="Photo of Chloe Foster" class="w-16 h-16 rounded-full flex-shrink-0 object-cover">
                           <div>
                               <h3 class="font-bold text-white">Chloe Foster</h3>
                               <p class="text-sm text-gray-400">Social Media Manager</p>
                           </div>
                        </div>
                    </div>
                </section>
                <!-- Creative Team -->
                 <section>
                    <h2 class="text-3xl font-bold mb-8 text-white orbitron">Creative Team</h2>
                     <div class="space-y-6">
                        <div class="team-card rounded-lg p-4 flex items-center space-x-4">
                           <img src="https://placehold.co/64x64/6e45e2/ffffff?text=DG" alt="Photo of David Garcia" class="w-16 h-16 rounded-full flex-shrink-0 object-cover">
                           <div>
                               <h3 class="font-bold text-white">David Garcia</h3>
                               <p class="text-sm text-gray-400">UI/UX Designer</p>
                           </div>
                        </div>
                    </div>
                </section>
                <!-- Admin Team -->
                 <section>
                    <h2 class="text-3xl font-bold mb-8 text-white orbitron">Admin Team</h2>
                     <div class="space-y-6">
                        <div class="team-card rounded-lg p-4 flex items-center space-x-4">
                           <img src="https://placehold.co/64x64/6e45e2/ffffff?text=OH" alt="Photo of Olivia Harris" class="w-16 h-16 rounded-full flex-shrink-0 object-cover">
                           <div>
                               <h3 class="font-bold text-white">Olivia Harris</h3>
                               <p class="text-sm text-gray-400">Office Manager</p>
                           </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

@endsection

@push('scripts')
<script>
  
</script>
@endpush
