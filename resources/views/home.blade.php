<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shil Consultancy</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</head>

<body class="grid-bg">
    <div id="particles"></div>

    <!-- Include global header -->
    @include('partials.header')

    <section id="home" class="min-h-screen flex items-center justify-center relative overflow-hidden pt-12 md:pt-20">
        <div class="absolute top-1/4 left-1/4 w-40 h-40 rounded-full bg-purple-500 opacity-20 blur-3xl animate-pulse">
        </div>
        <div class="absolute bottom-1/4 right-1/4 w-40 h-40 rounded-full bg-cyan-400 opacity-20 blur-3xl animate-pulse">
        </div>

        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 md:pt-20 pb-20 w-full flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0 relative">
                <div
                    class="absolute -top-20 -left-20 w-64 h-64 rounded-full bg-gradient-to-r from-purple-500 to-cyan-400 opacity-10 blur-3xl">
                </div>
                <div
                    class="absolute -bottom-20 -right-20 w-64 h-64 rounded-full bg-gradient-to-r from-cyan-400 to-pink-500 opacity-10 blur-3xl">
                </div>

                <h1 class="text-5xl md:text-7xl font-bold mb-6 gradient-text" style="padding-bottom: 10px;">Digital
                    Growth <span class="block">Reimagined</span></h1>
                <p class="text-lg text-gray-300 mb-8 max-w-lg">We craft innovative digital solutions that propel your
                    business into the future. From stunning websites to comprehensive marketing strategies, we've got
                    you covered.</p>
                <div class="flex space-x-4">
                    <a href="#contact"
                        class="btn-glow px-8 py-3 bg-gradient-to-r from-purple-600 to-cyan-500 text-white rounded-full font-semibold shadow-lg hover:shadow-xl transition duration-300">Get
                        Started</a>
                 
                </div>
            </div>
            <div class="md:w-1/2 relative">
                <div class="floating">
                    <div class=" w-full h-96 max-w-lg mx-auto flex items-center justify-center">
                        <div>
                            <img src="{{ asset('images/shil_consultancy _services _hero_image.webp') }}"
                                alt="Professional digital marketing services in Chittagong" loading="lazy"
                                width="800" height="600">

                        </div>
                    </div>
                </div>
                <div
                    class="absolute top-0 right-0 w-32 h-32 bg-purple-500 rounded-full opacity-20 blur-xl animate-pulse">
                </div>
                <div
                    class="absolute bottom-0 left-0 w-32 h-32 bg-cyan-400 rounded-full opacity-20 blur-xl animate-pulse">
                </div>
            </div>
        </div>

        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#services" class="text-white text-2xl">
                <i class="fas fa-chevron-down"></i>
            </a>
        </div>
    </section>
                                        {{-- services section --}}

    <section id="services" class="py-20 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold mb-4 gradient-text">Our <span
                        class="text-white">Services</span></h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">Comprehensive digital solutions tailored to your
                    business needs</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <a href="{{ route('services.web') }}" class="block h-full">

                    <div class="service-card h-full rounded-xl p-8 transform transition-all duration-500 hover:glow ">
                        <!--<div-->
                        <!--    class="w-16 h-16  rounded-xl flex items-center justify-center mb-6">-->
                        <!--    <i class="fas fa-code text-4xl gradient-text"></i>-->
                        <!--</div>-->
                        <h3 class="text-2xl font-bold mb-4 mt-6">Web Design & Development</h3>
                        <p class="text-gray-300 mb-6">Custom websites that combine stunning design with seamless
                            functionality to showcase your brand effectively.</p>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-purple-500 bg-opacity-20 text-purple-300 rounded-full text-sm">UI/UX</span>
                            <span
                                class="px-3 py-1 bg-cyan-500 bg-opacity-20 text-cyan-300 rounded-full text-sm">Responsive</span>
                            <span
                                class="px-3 py-1 bg-pink-500 bg-opacity-20 text-pink-300 rounded-full text-sm">CMS</span>
                        </div>
                    </div>
                </a>


                <a href="{{ route('services.ecommerce') }}" class="block h-full">
                    <div class="service-card h-full rounded-xl p-8 transform transition-all duration-500 hover:glow">
                        <!--<div-->
                        <!--    class="w-16 h-16  rounded-xl flex items-center justify-center mb-6">-->
                        <!--    <i class="fas fa-shopping-cart text-4xl gradient-text"></i>-->
                        <!--</div>-->
                        <h3 class="text-2xl font-bold mb-4 mt-10">E-Commerce Development</h3>
                        <p class="text-gray-300 mb-6">Powerful online stores with seamless checkout, inventory
                            management, and payment integration to boost your sales.</p>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-purple-500 bg-opacity-20 text-purple-300 rounded-full text-sm">Shopify</span>
                            <span
                                class="px-3 py-1 bg-cyan-500 bg-opacity-20 text-cyan-300 rounded-full text-sm">WooCommerce</span>
                            <span
                                class="px-3 py-1 bg-pink-500 bg-opacity-20 text-pink-300 rounded-full text-sm">Custom</span>
                        </div>
                    </div>
                </a>


                <a href="{{ route('services.smm') }}" class="block h-full">
                    <div
                        class="service-card h-full rounded-xl p-8 transform transition-all duration-500 hover:glow group-hover:-translate-y-1">
                        <!--<div-->
                        <!--    class="w-16 h-16  rounded-xl flex items-center justify-center mb-6">-->
                        <!--    <i class="fas fa-bullseye text-4xl gradient-text"></i>-->
                        <!--</div>-->
                        <h3 class="text-2xl font-bold mb-4 group-hover:text-purple-400 transition-colors mt-10">Social Media
                            Marketing</h3>
                        <p class="text-gray-300 mb-6 group-hover:text-gray-100 transition-colors">Data-driven strategies
                            to increase your social media visibility, attract quality leads, and convert them into
                            customers.</p>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-purple-500 bg-opacity-20 text-purple-300 rounded-full text-sm group-hover:bg-opacity-30 transition-all">SMM</span>
                            <span
                                class="px-3 py-1 bg-cyan-500 bg-opacity-20 text-cyan-300 rounded-full text-sm group-hover:bg-opacity-30 transition-all">Instagram</span>
                            <span
                                class="px-3 py-1 bg-pink-500 bg-opacity-20 text-pink-300 rounded-full text-sm group-hover:bg-opacity-30 transition-all">Facebook</span>
                            <span
                                class="px-3 py-1 bg-pink-500 bg-opacity-20 text-pink-300 rounded-full text-sm group-hover:bg-opacity-30 transition-all">Pintrest</span>

                        </div>
                    </div>
                </a>

                <a href="{{ route('services.content') }}" class="block h-full">

                    <div class="service-card h-full rounded-xl p-8 transform transition-all duration-500 hover:glow">
                        <!--<div-->
                        <!--    class="w-16 h-16  rounded-xl flex items-center justify-center mb-6">-->
                        <!--    <i class="fas fa-photo-film text-4xl gradient-text"></i>-->
                        <!--</div>-->
                        <h3 class="text-2xl font-bold mb-4 mt-10">Content Creation</h3>
                        <p class="text-gray-300 mb-6">Engaging content that tells your brand story, connects with your
                            audience, and drives meaningful interactions.</p>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-purple-500 bg-opacity-20 text-purple-300 rounded-full text-sm">Video</span>
                            <span
                                class="px-3 py-1 bg-cyan-500 bg-opacity-20 text-cyan-300 rounded-full text-sm">Graphics</span>
                            <span
                                class="px-3 py-1 bg-pink-500 bg-opacity-20 text-pink-300 rounded-full text-sm">Copywriting</span>
                        </div>
                    </div>
                </a>

                <a href="{{ route('services.brand') }}" class="block h-full">
                    <div class="service-card h-full rounded-xl p-8 transform transition-all duration-500 hover:glow">
                        <!--<div-->
                        <!--    class="w-16 h-16  rounded-xl flex items-center justify-center mb-6">-->
                        <!--    <i class="fas fa-chess-queen text-4xl gradient-text"></i>-->
                        <!--</div>-->
                        <h3 class="text-2xl font-bold mb-4 mt-10">Brand Strategy</h3>
                        <p class="text-gray-300 mb-6">Comprehensive branding solutions that define your identity and
                            position you as an industry leader.</p>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-purple-500 bg-opacity-20 text-purple-300 rounded-full text-sm">Identity</span>
                            <span
                                class="px-3 py-1 bg-cyan-500 bg-opacity-20 text-cyan-300 rounded-full text-sm">Positioning</span>
                            <span
                                class="px-3 py-1 bg-pink-500 bg-opacity-20 text-pink-300 rounded-full text-sm">Messaging</span>
                        </div>
                    </div>
                </a>

                <a href="{{ route('services.seo') }}" class="block h-full">
                    <div class="service-card h-full rounded-xl p-8 transform transition-all duration-500 hover:glow">
                        <!--<div-->
                        <!--    class="w-16 h-16  rounded-xl flex items-center justify-center mb-6">-->
                        <!--    <i class="fas fa-chart-line text-4xl gradient-text"></i>-->
                        <!--</div>-->
                        <h3 class="text-2xl font-bold mb-4 mt-6">Search Engine Optimization</h3>
                        <p class="text-gray-300 mb-6">Data-driven insights and continuous optimization of website to
                            maximize your digital performance and ROI.</p>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-purple-500 bg-opacity-20 text-purple-300 rounded-full text-sm">Analytics</span>
                            <span
                                class="px-3 py-1 bg-cyan-500 bg-opacity-20 text-cyan-300 rounded-full text-sm">SEO</span>
                            <span
                                class="px-3 py-1 bg-pink-500 bg-opacity-20 text-pink-300 rounded-full text-sm">CRO</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div
            class="absolute -top-20 -right-20 w-64 h-64 rounded-full bg-gradient-to-r from-purple-500 to-cyan-400 opacity-10 blur-3xl rotate">
        </div>
    </section> 
             
    
                                              {{-- ABOUT SECTION --}}

    <section id="about" class="py-20 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 relative">
                    <div class="relative floating">
                        <div class=" w-full h-96 max-w-lg mx-auto flex items-center justify-center">
                            <div>
                                <img src="{{ asset('images/aboutus.webp') }}"
                                    alt="Astronaut with purple gradient helmet in a digital marketing and web design company workspace">
                            </div>
                        </div>
                        <div
                            class="absolute -top-10 -left-10 w-40 h-40 bg-purple-500 rounded-full opacity-20 blur-3xl">
                        </div>
                        <div
                            class="absolute -bottom-10 -right-10 w-40 h-40 bg-cyan-400 rounded-full opacity-20 blur-3xl">
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 md:pl-12">
                    <h2 class="text-4xl md:text-5xl font-bold mb-6 gradient-text">About <span
                            class="text-white">Us</span></h2>
                    <p class="text-gray-300 mb-6">Shil Consultancy Services is a forward-thinking digital agency that
                        combines creativity with technology to deliver exceptional results for businesses of all sizes.
                    </p>
                    <p class="text-gray-300 mb-8">Founded in 2021, we've grown from a small team of passionate
                        designers to a full-service digital powerhouse with clients across multiple industries. Our
                        mission is to help businesses thrive in the digital landscape through innovative solutions and
                        data-driven strategies.</p>

                    <div class="grid grid-cols-2 gap-6 mb-8">
                        <div class="flex items-center">
                            <div
                                class="w-12 h-12  rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-rocket text-white text-3xl  gradient-text"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-white">Innovation</h4>
                                <p class="text-gray-400 text-sm">Cutting-edge solutions</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div
                                class="w-12 h-12  rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-heart  text-3xl  gradient-text"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-white">Passion</h4>
                                <p class="text-gray-400 text-sm">Driven by creativity</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div
                                class="w-12 h-12 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-chart-line text-3xl  gradient-text"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-white">Results</h4>
                                <p class="text-gray-400 text-sm">Proven track record</p>
                            </div>
                        </div>
                        
                             <div class="flex items-center">
                                <a href="{{route('aboutUs.team-member')}}">
                            <div
                                class="w-12 h-12  rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-users text-3xl  gradient-text"></i>
                            </div>
                            <div>
                                <a href="{{route('aboutUs.team-member')}}"> <h4 class="text-xl font-bold text-white">Team</h4></a>
                               
                                <p class="text-gray-400 text-sm">Expert professionals</p>
                            </div>
                        </div>
                        </a>
                       
                    </div>

                    <a href="#contact"
                        class="btn-glow px-8 py-3 bg-gradient-to-r from-purple-600 to-cyan-500 text-white rounded-full font-semibold shadow-lg hover:shadow-xl transition duration-300 inline-block">Learn
                        More</a>
                </div>
            </div>
        </div>

        <div
            class="absolute -bottom-20 -left-20 w-64 h-64 rounded-full bg-gradient-to-r from-cyan-400 to-pink-500 opacity-10 blur-3xl rotate">
        </div>
    </section>

                                                   {{-- WORK SECTION  --}}

    <section id="work" class="py-20 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold mb-4 gradient-text">Our <span class="text-white">Work</span>
                </h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">A showcase of our successful projects and happy
                    clients</p>
            </div>


            {{-- workcard slider --}}
            <!-- Swiper Container -->
<div class=" swiper_work mb-16 overflow-visible">
  <div class="swiper-wrapper">
    
    <!-- Slide 1 -->
    <div class="swiper-slide">
      <div class="service-card rounded-xl overflow-hidden transform transition-all duration-500 hover:glow">
        <div class="relative h-64 overflow-hidden">
          <div class="placeholder-img w-full h-full flex items-center justify-center">
            <div>
              <div class="text-4xl mb-4"><i class="fas fa-briefcase"></i></div>
              <div>Corporate Website</div>
            </div>
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
          <div class="absolute bottom-0 left-0 p-6">
            <h3 class="text-2xl font-bold text-white mb-2">Sallow Trading</h3>
            <p class="text-gray-300">75% increase in lead generation</p>
          </div>
        </div>
        <div class="p-6">
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="px-3 py-1 bg-purple-500 bg-opacity-20 text-purple-300 rounded-full text-sm">WordPress</span>
            <span class="px-3 py-1 bg-cyan-500 bg-opacity-20 text-cyan-300 rounded-full text-sm">UI/UX</span>
            <span class="px-3 py-1 bg-pink-500 bg-opacity-20 text-pink-300 rounded-full text-sm">Responsive</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="swiper-slide">
      <div class="service-card rounded-xl overflow-hidden transform transition-all duration-500 hover:glow">
        <div class="relative h-64 overflow-hidden">
          <div class="placeholder-img w-full h-full flex items-center justify-center">
            <div>
              <div class="text-4xl mb-4"><i class="fas fa-paint-brush"></i></div>
              <div>Brand Campaign</div>
            </div>
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
          <div class="absolute bottom-0 left-0 p-6">
            <h3 class="text-2xl font-bold text-white mb-2">Suger Comb</h3>
            <p class="text-gray-300">3M+ impressions</p>
          </div>
        </div>
        <div class="p-6">
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="px-3 py-1 bg-purple-500 bg-opacity-20 text-purple-300 rounded-full text-sm">Visual Identity</span>
            <span class="px-3 py-1 bg-cyan-500 bg-opacity-20 text-cyan-300 rounded-full text-sm">Content</span>
            <span class="px-3 py-1 bg-pink-500 bg-opacity-20 text-pink-300 rounded-full text-sm">Influencers</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="swiper-slide">
      <div class="service-card rounded-xl overflow-hidden transform transition-all duration-500 hover:glow">
        <div class="relative h-64 overflow-hidden">
          <div class="placeholder-img w-full h-full flex items-center justify-center">
            <div>
              <div class="text-4xl mb-4"><i class="fas fa-palette"></i></div>
              <div>Portfolio Website</div>
            </div>
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
          <div class="absolute bottom-0 left-0 p-6">
            <h3 class="text-2xl font-bold text-white mb-2">Perth Air Conditioning</h3>
            <p class="text-gray-300">40% more client inquiries</p>
          </div>
        </div>
        <div class="p-6">
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="px-3 py-1 bg-purple-500 bg-opacity-20 text-purple-300 rounded-full text-sm">Custom Design</span>
            <span class="px-3 py-1 bg-cyan-500 bg-opacity-20 text-cyan-300 rounded-full text-sm">Animation</span>
            <span class="px-3 py-1 bg-pink-500 bg-opacity-20 text-pink-300 rounded-full text-sm">Showcase</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Repeat for all other cards... -->
    <div class="swiper-slide">
         <div class="service-card rounded-xl overflow-hidden transform transition-all duration-500 hover:glow">
                    <div class="relative h-64 overflow-hidden">
                        <div class="placeholder-img w-full h-full flex items-center justify-center">
                            <div>
                                <div class="text-4xl mb-4"><i class="fas fa-paint-brush"></i></div>
                                <div>Brand Campaign</div>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <h3 class="text-2xl font-bold text-white mb-2">Suger Comb</h3>
                            <p class="text-gray-300">3M+ impressions</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span
                                class="px-3 py-1 bg-purple-500 bg-opacity-20 text-purple-300 rounded-full text-sm">Visual
                                Identity</span>
                            <span
                                class="px-3 py-1 bg-cyan-500 bg-opacity-20 text-cyan-300 rounded-full text-sm">Content</span>
                            <span
                                class="px-3 py-1 bg-pink-500 bg-opacity-20 text-pink-300 rounded-full text-sm">Influencers</span>
                        </div>
                    </div>
                </div>
    </div>
    <div class="swiper-slide">
         <div class="service-card rounded-xl overflow-hidden transform transition-all duration-500 hover:glow">
                    <div class="relative h-64 overflow-hidden">
                        <div class="placeholder-img w-full h-full flex items-center justify-center">
                            <div>
                                <div class="text-4xl mb-4"><i class="fas fa-store"></i></div>
                                <div>E-Commerce Platform</div>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <h3 class="text-2xl font-bold text-white mb-2">Imperial Lash</h3>
                            <p class="text-gray-300">300% revenue growth in 6 months</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span
                                class="px-3 py-1 bg-purple-500 bg-opacity-20 text-purple-300 rounded-full text-sm">Shopify</span>
                            <span
                                class="px-3 py-1 bg-cyan-500 bg-opacity-20 text-cyan-300 rounded-full text-sm">Payment
                                Gateway</span>
                            <span
                                class="px-3 py-1 bg-pink-500 bg-opacity-20 text-pink-300 rounded-full text-sm">Inventory</span>
                        </div>
                    </div>
                </div>
    </div>
    <div class="swiper-slide">
              <div class="service-card rounded-xl overflow-hidden transform transition-all duration-500 hover:glow">
                    <div class="relative h-64 overflow-hidden">
                        <div class="placeholder-img w-full h-full flex items-center justify-center">
                            <div>
                                <div class="text-4xl mb-4"><i class="fas fa-briefcase"></i></div>
                                <div>Corporate Website</div>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <h3 class="text-2xl font-bold text-white mb-2">Sallow Trading</h3>
                            <p class="text-gray-300">75% increase in lead generation</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span
                                class="px-3 py-1 bg-purple-500 bg-opacity-20 text-purple-300 rounded-full text-sm">WordPress</span>
                            <span
                                class="px-3 py-1 bg-cyan-500 bg-opacity-20 text-cyan-300 rounded-full text-sm">UI/UX</span>
                            <span
                                class="px-3 py-1 bg-pink-500 bg-opacity-20 text-pink-300 rounded-full text-sm">Responsive</span>
                        </div>
                    </div>
                </div>

    </div>
     <div class="swiper-slide">
        <div class="service-card rounded-xl overflow-hidden transform transition-all duration-500 hover:glow">
                    <div class="relative h-64 overflow-hidden">
                        <div class="placeholder-img w-full h-full flex items-center justify-center">
                            <div>
                                <div class="text-4xl mb-4"><i class="fas fa-store"></i></div>
                                <div>E-Commerce Platform</div>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <h3 class="text-2xl font-bold text-white mb-2">Imperial Lash</h3>
                            <p class="text-gray-300">300% revenue growth in 6 months</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span
                                class="px-3 py-1 bg-purple-500 bg-opacity-20 text-purple-300 rounded-full text-sm">Shopify</span>
                            <span
                                class="px-3 py-1 bg-cyan-500 bg-opacity-20 text-cyan-300 rounded-full text-sm">Payment
                                Gateway</span>
                            <span
                                class="px-3 py-1 bg-pink-500 bg-opacity-20 text-pink-300 rounded-full text-sm">Inventory</span>
                        </div>
                    </div>
                </div>
     </div>
    
  </div>


 
</div>


        </div>

        <div
            class="absolute top-1/4 right-0 w-40 h-40 rounded-full bg-gradient-to-r from-purple-500 to-cyan-400 opacity-10 blur-3xl rotate">
        </div>
    </section>
    
    
                                              {{-- TESTIMONIAL SECTION  --}}

    <section class="py-20 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold mb-4 gradient-text">Client <span
                        class="text-white">Testimonials</span></h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">What our clients say about working with us</p>
            </div>

           
                                                              {{-- slider --}}
            <!-- Swiper Container -->
<div class="swiper_work py-8 overflow-visible">
    <div class="swiper-wrapper">
        <!-- Slide 1 -->
        <div class="swiper-slide">
            <div class="service-card rounded-xl p-8 transform transition-all duration-500 hover:glow ">
                <div class="flex items-center mb-6">
                    <div class="testimonial-img w-12 h-12 flex items-center justify-center mr-4">SJ</div>
                    <div>
                        <h4 class="text-lg font-bold text-white">Sarah Johnson</h4>
                        <p class="text-gray-400 text-sm">CEO, Imperial Lash</p>
                    </div>
                </div>
                <p class="text-gray-300 mb-6">"Shil Consultancy Services transformed our online presence completely. Our website traffic increased by 200% within three months of working with them."</p>
                <div class="flex text-yellow-400">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide">
            <div class="service-card rounded-xl p-8 transform transition-all duration-500 hover:glow">
                <div class="flex items-center mb-6">
                    <div class="testimonial-img w-12 h-12 flex items-center justify-center mr-4">MC</div>
                    <div>
                        <h4 class="text-lg font-bold text-white">Michael Chen</h4>
                        <p class="text-gray-400 text-sm">Marketing Director, Suger Comb</p>
                    </div>
                </div>
                <p class="text-gray-300 mb-6">"Their digital marketing strategies are next-level. We've seen a consistent 30% month-over-month growth in our online sales since partnering with them."</p>
                <div class="flex text-yellow-400">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
         <div class="swiper-slide">
            <div class="service-card rounded-xl p-8 transform transition-all duration-500 hover:glow">
                <div class="flex items-center mb-6">
                    <div class="testimonial-img w-12 h-12 flex items-center justify-center mr-4">MC</div>
                    <div>
                        <h4 class="text-lg font-bold text-white">Michael Chen</h4>
                        <p class="text-gray-400 text-sm">Marketing Director, Suger Comb</p>
                    </div>
                </div>
                <p class="text-gray-300 mb-6">"Their digital marketing strategies are next-level. We've seen a consistent 30% month-over-month growth in our online sales since partnering with them."</p>
                <div class="flex text-yellow-400">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
            </div>
        </div>
        
        {{-- slide-4 --}}
         <div class="swiper-slide">
            <div class="service-card rounded-xl p-8 transform transition-all duration-500 hover:glow">
                <div class="flex items-center mb-6">
                    <div class="testimonial-img w-12 h-12 flex items-center justify-center mr-4">MC</div>
                    <div>
                        <h4 class="text-lg font-bold text-white">Michael Chen</h4>
                        <p class="text-gray-400 text-sm">Marketing Director, Suger Comb</p>
                    </div>
                </div>
                <p class="text-gray-300 mb-6">"Their digital marketing strategies are next-level. We've seen a consistent 30% month-over-month growth in our online sales since partnering with them."</p>
                <div class="flex text-yellow-400">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
            </div>
        </div>
    </div>


</div>
        </div>

        <div
            class="absolute bottom-0 left-1/4 w-40 h-40 rounded-full bg-gradient-to-r from-cyan-400 to-pink-500 opacity-10 blur-3xl rotate">
        </div>
    </section>

    <section id="contact" class="py-20 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h2 class="text-4xl md:text-5xl font-bold mb-6 gradient-text">Get In <span
                            class="text-white">Touch</span></h2>
                    <p class="text-gray-300 mb-8 max-w-lg">Ready to take your digital presence to the next level?
                        Contact us today for a free consultation.</p>

                    <div class="space-y-6 mb-10">
                        <div class="flex items-center">
                            <div
                                class="w-12 h-12  rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-envelope text-3xl gradient-text"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-white">Email Us</h4>
                                <a href="mailto:hello@shilconsultancy.com"
                                    class="text-gray-400 hover:text-white">hello@shilconsultancy.com</a>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div
                                class="w-12 h-12  rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-phone text-3xl gradient-text"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-white">Call Us</h4>
                                <a href="tel:+8801768013249" class="text-gray-400 hover:text-white">+880 1768
                                    013249</a>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div
                                class="w-12 h-12  rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-map-marker-alt text-3xl gradient-text"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-white">Head Office</h4>
                                <p class="text-gray-400">1054, 5th floor, Rahim manson, Suborna R/A,</p>
                                <p class="text-gray-400">Golpahar, Chittagong, Chittagong, Bangladesh</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/shilconsultancyservices"
                            class="w-10 h-10 bg-gray-800 hover:bg-gray-700 rounded-full flex items-center justify-center">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/shilconsultancy/"
                            class="w-10 h-10 bg-gray-800 hover:bg-gray-700 rounded-full flex items-center justify-center">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://x.com/shilconsultancy"
                            class="w-10 h-10 bg-gray-800 hover:grid-bg-gray-700 rounded-full flex items-center justify-center">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/shilconsultancy/"
                            class="w-10 h-10 bg-gray-800 hover:bg-gray-700 rounded-full flex items-center justify-center">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>

                <div class="md:w-1/2 md:pl-12">
                    <form action="{{ route('send.message') }}" method="POST" class="service-card rounded-xl p-8 bg-gray-900 shadow-lg">
                         @csrf 
                        <h3 class="text-2xl font-bold text-white mb-6">Send Us a Message</h3>

                        <div class="mb-6">
                            <label for="name" class="block text-gray-300 mb-2">Your Name</label>
                            <input type="text" id="name" name="user_name"
                                class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                                placeholder="Your Name" required>
                        </div>

                        <div class="mb-6">
                            <label for="email" class="block text-gray-300 mb-2">Email Address</label>
                            <input type="email" id="email" name="user_email"
                                class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                                placeholder="email@example.com" required>
                        </div>
                        <div class="mb-6">
                            <label for="phone" class="block text-gray-300 mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="user_phone"
                                class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                                placeholder="+880 XXXX XXXXX" required>
                        </div>

                        <div class="mb-6">
                            <label for="service" class="block text-gray-300 mb-2">Service Interested In</label>
                            <select id="service" name="service"
                                class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                                <option value="">Select a service</option>
                                <option value="web">Web Design & Development</option>
                                <option value="ecommerce">E-Commerce Development</option>
                                <option value="marketing">Digital Marketing</option>
                                <option value="content">Content Creation</option>
                                <option value="branding">Brand Strategy</option>
                                <option value="analytics">Analytics & Optimization</option>
                            </select>
                        </div>

                        <div class="mb-6">
                            <label for="message" class="block text-gray-300 mb-2">Your Message</label>
                            <textarea id="message" name="message" rows="4"
                                class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                                placeholder="Tell us about your project..." required></textarea>
                        </div>

                        <button type="submit"
                            class="btn-glow w-full px-8 py-3 bg-gradient-to-r from-purple-600 to-cyan-500 text-white rounded-lg font-semibold shadow-lg hover:shadow-xl transition duration-300">
                            Send Message <i class="fas fa-paper-plane ml-2"></i>
                        </button>

                        <div id="success-message"
                            class="hidden mt-4 p-4 bg-green-500 bg-opacity-20 text-green-300 rounded-lg">
                            Thank you! Your message has been sent successfully.
                        </div>

                        <div id="error-message"
                            class="hidden mt-4 p-4 bg-red-500 bg-opacity-20 text-red-300 rounded-lg">
                            Oops! Something went wrong. Please try again later.
                        </div>
                    </form>
                </div>
                <div
                    class="absolute top-20 right-20 w-40 h-40 rounded-full bg-gradient-to-r from-purple-500 to-cyan-400 opacity-10 blur-3xl rotate">
                </div>
            </div>
        </div>

        <div
            class="absolute top-20 right-20 w-40 h-40 rounded-full bg-gradient-to-r from-purple-500 to-cyan-400 opacity-10 blur-3xl rotate">
        </div>
    </section>

    @include('partials.footer')


<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
   
</body>
