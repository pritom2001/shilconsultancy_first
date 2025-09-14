<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEO Services - Search Engine Experts</title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
      {{-- link --}}
     @vite(['resources/css/search-engine-optimisation.css', 'resources/js/search-engine-optimisation.js'])
          @vite(['resources/css/app.css', 'resources/js/app.js'])
   
</head>
<body class="bg-white min-h-screen font-sans">
    
   
    
    <header class="sticky top-0 bg-white shadow-sm z-10" style="padding-top: 80px;"> <div class="container mx-auto px-4 py-3">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <div class="flex items-center justify-between mb-4 md:mb-0">
                    <div class="flex items-center">
                        <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="SEO Services" class="h-8 w-auto">
                        <span class="ml-2 text-gray-600 text-lg">SEO</span>
                    </div>
                </div>
                
                <div class="search-container mx-auto md:mx-0 md:w-1/2 lg:w-2/5">
                    <div class="search-box flex items-center w-full rounded-full border border-gray-200 px-4 py-3 transition-all duration-200">
                         <i class="fa-solid fa-magnifying-glass text-gray-400 mr-3"></i>
                        <input type="text" placeholder="Search for SEO services..." class="w-full focus:outline-none text-gray-800" id="searchInput">
                        <div class="flex space-x-2">
                            <button class="text-gray-400 hover:text-gray-600">
                                <i class="fas fa-microphone"></i>
                            </button>
                            <button class="text-gray-400 hover:text-gray-600">
                                <i class="fas fa-camera"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="hidden md:flex items-center space-x-4">
                    <button class="text-gray-600 hover:text-blue-600">
                        <i class="fas fa-th"></i>
                    </button>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                        Sign In
                    </button>
                </div>
            </div>
            
            <div class="flex overflow-x-auto mt-4 pb-2 hide-scrollbar">
                <div class="flex space-x-8">
                    <a href="#all" class="nav-item active text-sm pb-2 px-1 whitespace-nowrap">All</a>
                    <a href="#about-us" class="nav-item text-sm pb-2 px-1 whitespace-nowrap">About Us</a>
                    <a href="#services" class="nav-item text-sm pb-2 px-1 whitespace-nowrap">Services</a>
                    <a href="#pricing" class="nav-item text-sm pb-2 px-1 whitespace-nowrap">Pricing</a>
                    <a href="#contact" class="nav-item text-sm pb-2 px-1 whitespace-nowrap">Contact</a>
                </div>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-6 max-w-4xl">
        <section id="all">
            <div class="text-sm text-gray-600 mb-6">
                About 127,000,000 results (0.39 seconds)
            </div>
        </section>

        <section id="what-is-seo">
            <div class="bg-blue-50 border border-blue-100 rounded-lg p-4 mb-6">
                <div class="flex items-start">
                    <div class="mr-4 text-blue-500">
                        <i class="fas fa-lightbulb text-2xl"></i>
                    </div>
                    <div>
                        <h2 class="text-xl font-medium text-gray-900 mb-2">What is SEO?</h2>
                        <p class="text-gray-700 mb-3">
                            SEO, or Search Engine Optimization, is a strategic digital marketing discipline that enhances website visibility in organic search results through technical optimizations, content excellence, and authoritative link acquisition. A holistic approach combines cutting-edge techniques with white-hat principles to drive sustainable, high-converting traffic.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-800 text-xs px-2.5 py-0.5 rounded">On-page SEO</span>
                            <span class="bg-blue-100 text-blue-800 text-xs px-2.5 py-0.5 rounded">Off-page SEO</span>
                            <span class="bg-blue-100 text-blue-800 text-xs px-2.5 py-0.5 rounded">Technical SEO</span>
                            <span class="bg-blue-100 text-blue-800 text-xs px-2.5 py-0.5 rounded">Local SEO</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="about-us">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">About Shil Consultancy</h2>
            <div class="result-card p-4 rounded-lg transition duration-150">
                 <div class="flex items-center text-sm text-gray-500 mb-1">
                    <span class="text-green-700">www.shilconsultancy.com</span>
                    <span class="mx-1">›</span>
                    <span>about-us</span>
                </div>
                <h3 class="text-xl text-blue-700 hover:underline mb-1">
                    <a href="#">Your Digital Growth Partner in Chittagong</a>
                </h3>
                <p class="text-gray-700 mb-2">
                    Shil Consultancy is a premier digital marketing agency based in the heart of Chittagong, Bangladesh. We are passionate about helping local and national businesses thrive in the digital landscape. Our team of certified experts specializes in creating data-driven SEO strategies that deliver not just rankings, but real, measurable results and sustainable growth for our clients.
                </p>
                 <div class="flex items-center text-sm text-gray-600 mt-2">
                    <span class="mr-4"><i class="fas fa-users text-blue-500 mr-1"></i> Certified Experts</span>
                    <span><i class="fas fa-bullseye text-red-500 mr-1"></i> Results-Driven Approach</span>
                </div>
            </div>
        </section>

        <section id="services">
            <h2 class="text-2xl font-semibold text-gray-800 mt-8 mb-4">Our Services</h2>
            <div class="space-y-6">
                <div class="result-card p-4 rounded-lg transition duration-150">
                    <div class="flex items-center text-sm text-gray-500 mb-1">
                        <span class="text-green-700">www.shilconsultancy.com</span>
                        <span class="mx-1">›</span>
                        <span>premium-seo</span>
                    </div>
                    <h3 class="text-xl text-blue-700 hover:underline mb-1">
                        <a href="#">Premium SEO Services - Get First Page Rankings</a>
                    </h3>
                    <p class="text-gray-700 mb-2">
                        Our premium SEO services deliver measurable results through data-driven strategies. Our certified experts optimize every aspect of your online presence, from technical SEO audits to content optimization and authoritative link building.
                    </p>
                </div>
                <div class="result-card p-4 rounded-lg transition duration-150">
                    <div class="flex items-center text-sm text-gray-500 mb-1">
                        <span class="text-green-700">www.shilconsultancy.com</span>
                        <span class="mx-1">›</span>
                        <span>local-seo</span>
                    </div>
                    <h3 class="text-xl text-blue-700 hover:underline mb-1">
                        <a href="#">Local SEO Services - Get Found in Your Area</a>
                    </h3>
                    <p class="text-gray-700 mb-2">
                        We help businesses dominate their geographic markets. We implement hyper-local strategies including Google Business Profile optimization, localized content creation, citation building, and reputation management.
                    </p>
                </div>
            </div>
        </section>
        
        <section id="pricing">
            <h2 class="text-2xl font-semibold text-gray-800 my-4">Pricing</h2>
            <div class="result-card p-4 rounded-lg transition duration-150">
                <div class="flex items-center text-sm text-gray-500 mb-1">
                    <span class="text-green-700">www.shilconsultancy.com</span>
                    <span class="mx-1">›</span>
                    <span>pricing</span>
                </div>
                <h3 class="text-xl text-blue-700 hover:underline mb-1">
                    <a href="#">Affordable SEO Packages - Starting at $299/month</a>
                </h3>
                <p class="text-gray-700 mb-2">
                    We offer transparent, performance-based SEO packages with flexible monthly engagements, backed by detailed monthly performance reports and ROI analysis.
                </p>
            </div>
        </section>

        <section id="contact">
            <h2 class="text-2xl font-semibold text-gray-800 my-4">Contact Us</h2>
            <div class="bg-gray-50 border border-gray-200 rounded-lg p-6 text-center">
                <p class="text-gray-700 mb-4">Ready to boost your rankings? Get in touch with our team in Chittagong for a free consultation.</p>
                <a href=" https://shilconsultancy.com/#contact">
                    <button class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 transition font-semibold">
                    Request a Free SEO Audit
                    </button>
                </a>
            </div>
        </section>
    </main>

   @include('partials.footer')

   
</body>
</html>