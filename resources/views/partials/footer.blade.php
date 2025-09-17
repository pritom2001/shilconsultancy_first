<!-- resources/views/partials/footer.blade.php -->
<footer class="py-12 bg-black bg-opacity-50 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
            <div>
                <h3 class="text-2xl font-bold gradient-text mb-4">SHIL CONSULTANCY</h3>
                <p class="text-gray-400">Innovative digital solutions for forward-thinking businesses.</p>
            </div>

            <div>
                <h4 class="text-lg font-bold text-white mb-4">Services</h4>
                <ul class="space-y-2">
                    <li><a href="{{route('services.web')}}" class="text-gray-400 hover:text-white">Web Development</a></li>
                    <li><a href="{{route('services.ecommerce')}}" class="text-gray-400 hover:text-white">E-Commerce</a></li>
                    <li><a href="{{route('services.seo')}}" class="text-gray-400 hover:text-white">Digital Marketing</a></li>
                    <li><a href="{{route('services.content')}}" class="text-gray-400 hover:text-white">Content Creation</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-bold text-white mb-4">Company</h4>
                <ul class="space-y-2">
                    <li><a href="#about" class="text-gray-400 hover:text-white">About Us</a></li>
                    <li><a href="#work" class="text-gray-400 hover:text-white">Our Work</a></li>
                    <li><a href="{{ route('careers') }}" class="text-gray-400 hover:text-white">Careers</a></li>
                    <li><a href="{{route('public.blogs.index')}}" class="text-gray-400 hover:text-white">Blog</a></li>
                    
          

                </ul>
            </div>

            <div>
                <h4 class="text-lg font-bold text-white mb-4">Legal</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('privacy.policy') }}" class="text-gray-400 hover:text-white">Privacy Policy</a></li>
                    <li><a href="{{ route('terms.of.service') }}" class="text-gray-400 hover:text-white">Terms of Service</a></li>
                    <li><a href="{{ route('cookie.policy') }}" class="text-gray-400 hover:text-white">Cookie Policy</a></li>
                </ul>
            </div>
        </div>

        <div class="pt-8 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-400 mb-4 md:mb-0">© 2025 Shil Consultancy Services. All rights reserved.</p>
            <div class="flex space-x-4">
                <a href="https://www.facebook.com/shilconsultancyukltd" class="w-10 h-10 bg-gray-800 hover:bg-gray-700 rounded-full flex items-center justify-center">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/shilconsultancy/" class="w-10 h-10 bg-gray-800 hover:bg-gray-700 rounded-full flex items-center justify-center">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://x.com/shilconsultancy" class="w-10 h-10 bg-gray-800 hover:bg-gray-700 rounded-full flex items-center justify-center">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://www.linkedin.com/company/shilconsultancy/" class="w-10 h-10 bg-gray-800 hover:bg-gray-700 rounded-full flex items-center justify-center">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="absolute -bottom-20 -right-20 w-64 h-64 rounded-full bg-gradient-to-r from-cyan-400 to-pink-500 opacity-10 blur-3xl rotate"></div>

 <a href="https://wa.me/8801768013249" target="_blank"
        class="fixed bottom-[96px] right-8 w-14 h-14 bg-gradient-to-br from-green-500 to-green-600 text-white rounded-full flex items-center justify-center shadow-xl hover:shadow-2xl transition-all duration-300 group z-50 animate-bounce">
        <i class="fab fa-whatsapp text-2xl"></i>
        <span
            class="absolute -top-10 -right-2 bg-gray-900 text-white text-xs px-3 py-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-200 shadow-md">
            Chat with us
        </span>
    </a>

    <a href="#home"
        class="fixed bottom-8 right-8 w-12 h-12 bg-gradient-to-r from-purple-600 to-cyan-500 text-white rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition duration-300 z-50">
        <i class="fas fa-arrow-up"></i>
    </a>
</footer>
