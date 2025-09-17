<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers | Join Our Team at Shil Consultancy</title>
    <meta name="description" content="Explore exciting career opportunities at Shil Consultancy in Chittagong. We're looking for passionate innovators to join our team. View our open positions today.">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="grid-bg">

    @include('partials.header')

    <section id="career-hero" class="min-h-[60vh] flex items-center justify-center relative overflow-hidden pt-24 md:pt-32">
        <div class="absolute top-1/4 left-1/4 w-40 h-40 rounded-full bg-purple-500 opacity-20 blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-40 h-40 rounded-full bg-cyan-400 opacity-20 blur-3xl animate-pulse"></div>

        <div class="text-center max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-5xl md:text-7xl font-bold mb-6 gradient-text" style="padding-bottom: 10px;">Build the Future With Us</h1>
            <p class="text-lg text-gray-300 mb-8 max-w-2xl mx-auto">
                At Shil Consultancy, we're not just building digital products; we're crafting the future of online experiences. We are a team of creators, thinkers, and innovators. If you're passionate about making an impact, you've come to the right place.
            </p>
            <div class="flex justify-center">
                <a href="#open-positions" class="btn-glow px-8 py-3 bg-gradient-to-r from-purple-600 to-cyan-500 text-white rounded-full font-semibold shadow-lg hover:shadow-xl transition duration-300">
                    View Open Roles
                </a>
            </div>
        </div>
    </section>

    <section id="why-us" class="py-20 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold mb-4 gradient-text">Why Join <span class="text-white">Shil Consultancy?</span></h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">We foster a culture of growth, collaboration, and innovation.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="service-card text-center rounded-xl p-8 transform transition-all duration-500 hover:glow h-full flex flex-col items-center">
                    <div class="w-16 h-16 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-rocket text-4xl gradient-text"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Innovate & Create</h3>
                    <p class="text-gray-300">Work on cutting-edge projects with the freedom to explore new ideas and technologies.</p>
                </div>
                <div class="service-card text-center rounded-xl p-8 transform transition-all duration-500 hover:glow h-full flex flex-col items-center">
                    <div class="w-16 h-16 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-seedling text-4xl gradient-text"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Grow With Us</h3>
                    <p class="text-gray-300">We invest in your professional development with continuous learning opportunities.</p>
                </div>
                <div class="service-card text-center rounded-xl p-8 transform transition-all duration-500 hover:glow h-full flex flex-col items-center">
                    <div class="w-16 h-16 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-users text-4xl gradient-text"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Collaborative Team</h3>
                    <p class="text-gray-300">Join a supportive and diverse team that values every member's contribution.</p>
                </div>
                <div class="service-card text-center rounded-xl p-8 transform transition-all duration-500 hover:glow h-full flex flex-col items-center">
                    <div class="w-16 h-16 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-balance-scale text-4xl gradient-text"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Work-Life Balance</h3>
                    <p class="text-gray-300">We believe in a healthy balance, offering flexible work arrangements to suit your lifestyle.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="open-positions" class="py-20 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold mb-4 gradient-text">Current <span class="text-white">Openings</span></h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">Find your next career adventure. We are looking for talented individuals to join our team in Chittagong.</p>
            </div>

            <div class="space-y-6 max-w-4xl mx-auto">
                <div class="service-card rounded-xl p-6 md:p-8 transform transition-all duration-500 hover:glow flex flex-col md:flex-row justify-between items-start md:items-center">
                    <div>
                        <h3 class="text-2xl font-bold mb-1 text-white">Senior Frontend Developer (React)</h3>
                        <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-gray-400">
                            <span><i class="fas fa-map-marker-alt mr-2"></i>Chittagong, BD</span>
                            <span><i class="fas fa-briefcase mr-2"></i>Full-time</span>
                            <span><i class="fas fa-code-branch mr-2"></i>Engineering</span>
                        </div>
                    </div>
                    <a href="#contact" class="btn-glow mt-4 md:mt-0 px-6 py-2 bg-gradient-to-r from-purple-600 to-cyan-500 text-white rounded-full font-semibold shadow-lg hover:shadow-xl transition duration-300 whitespace-nowrap">Apply Now</a>
                </div>

                <div class="service-card rounded-xl p-6 md:p-8 transform transition-all duration-500 hover:glow flex flex-col md:flex-row justify-between items-start md:items-center">
                    <div>
                        <h3 class="text-2xl font-bold mb-1 text-white">Digital Marketing Specialist (SEO/SMM)</h3>
                        <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-gray-400">
                            <span><i class="fas fa-map-marker-alt mr-2"></i>Chittagong, BD</span>
                            <span><i class="fas fa-briefcase mr-2"></i>Full-time</span>
                            <span><i class="fas fa-bullhorn mr-2"></i>Marketing</span>
                        </div>
                    </div>
                    <a href="#contact" class="btn-glow mt-4 md:mt-0 px-6 py-2 bg-gradient-to-r from-purple-600 to-cyan-500 text-white rounded-full font-semibold shadow-lg hover:shadow-xl transition duration-300 whitespace-nowrap">Apply Now</a>
                </div>

                <div class="service-card rounded-xl p-6 md:p-8 transform transition-all duration-500 hover:glow flex flex-col md:flex-row justify-between items-start md:items-center">
                    <div>
                        <h3 class="text-2xl font-bold mb-1 text-white">UI/UX Designer</h3>
                        <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-gray-400">
                            <span><i class="fas fa-map-marker-alt mr-2"></i>Remote / Chittagong</span>
                            <span><i class="fas fa-briefcase mr-2"></i>Contract</span>
                            <span><i class="fas fa-palette mr-2"></i>Design</span>
                        </div>
                    </div>
                    <a href="#contact" class="btn-glow mt-4 md:mt-0 px-6 py-2 bg-gradient-to-r from-purple-600 to-cyan-500 text-white rounded-full font-semibold shadow-lg hover:shadow-xl transition duration-300 whitespace-nowrap">Apply Now</a>
                </div>
            </div>
        </div>
    </section>
    
     <section id="contact" class="py-20 relative">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="service-card rounded-2xl p-8 md:p-12 relative overflow-hidden">
                <div class="absolute -right-20 -top-20 w-64 h-64 rounded-full bg-purple-600 opacity-20 blur-3xl"></div>
                <div class="absolute -left-20 -bottom-20 w-64 h-64 rounded-full bg-blue-600 opacity-20 blur-3xl"></div>
                <div class="relative z-10">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-white">Don't See The Right Fit?</h2>
                    <p class="text-lg text-purple-200 max-w-2xl mx-auto mb-8">
                        We are always looking for talented and passionate people to join our mission. If you believe you have what it takes, send us your resume!
                    </p>
                    <a href="mailto:careers@shilconsultancy.com" class="btn-glow inline-block px-8 py-3 bg-gradient-to-r from-purple-600 to-cyan-500 text-white rounded-full font-semibold shadow-lg hover:shadow-xl transition duration-300">
                        Submit Your CV
                    </a>
                </div>
            </div>
        </div>
    </section>


    @include('partials.footer')

</body>
</html>