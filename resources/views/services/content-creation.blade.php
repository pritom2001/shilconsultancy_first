<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
      {{-- link --}}
     @vite(['resources/css/content-creation.css', 'resources/js/content-creation.js'])
          @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 text-white font-sans overflow-x-hidden">

    @include('partials.header')
    <div class="container mx-auto px-4 py-8 pt-24"> <div class="flex justify-between items-center mb-8">
            
        </div>

        <div class="bg-gray-800 rounded-xl overflow-hidden shadow-2xl">
            <div class="bg-gray-700 px-4 py-3 flex items-center justify-between">
                <div class="flex space-x-2">
                    <button class="tool-btn bg-gray-600 hover:bg-gray-500 px-4 py-2 rounded-lg flex items-center">
                        <i class="fas fa-plus mr-2"></i> New Project
                    </button>
                    <button class="tool-btn bg-gray-600 hover:bg-gray-500 px-4 py-2 rounded-lg flex items-center">
                        <i class="fas fa-folder-open mr-2"></i> Open
                    </button>
                    <button class="tool-btn bg-gray-600 hover:bg-gray-500 px-4 py-2 rounded-lg flex items-center">
                        <i class="fas fa-save mr-2"></i> Save
                    </button>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="flex items-center">
                        <i class="fas fa-bolt text-yellow-400 mr-2"></i>
                        <span class="text-sm">AI Tools</span>
                    </div>
                    <div class="w-8 h-8 rounded-full bg-gradient-to-r from-purple-500 to-pink-500"></div>
                </div>
            </div>

            <div class="flex flex-col lg:flex-row">
                <div class="w-full lg:w-16 bg-gray-750 p-2 flex lg:flex-col justify-between">
                    <div class="flex lg:flex-col space-x-2 lg:space-x-0 lg:space-y-2">
                        <button class="tool-btn w-12 h-12 rounded-lg bg-blue-600 hover:bg-blue-500 flex items-center justify-center">
                            <i class="fas fa-cut text-xl"></i>
                        </button>
                        <button class="tool-btn w-12 h-12 rounded-lg bg-gray-600 hover:bg-gray-500 flex items-center justify-center">
                            <i class="fas fa-text text-xl"></i>
                        </button>
                        <button class="tool-btn w-12 h-12 rounded-lg bg-gray-600 hover:bg-gray-500 flex items-center justify-center">
                            <i class="fas fa-music text-xl"></i>
                        </button>
                        <button class="tool-btn w-12 h-12 rounded-lg bg-gray-600 hover:bg-gray-500 flex items-center justify-center">
                            <i class="fas fa-sliders-h text-xl"></i>
                        </button>
                    </div>
                    <div class="flex lg:flex-col space-x-2 lg:space-x-0 lg:space-y-2">
                        <button class="tool-btn w-12 h-12 rounded-lg bg-gray-600 hover:bg-gray-500 flex items-center justify-center">
                            <i class="fas fa-cog text-xl"></i>
                        </button>
                        <button class="tool-btn w-12 h-12 rounded-lg bg-gray-600 hover:bg-gray-500 flex items-center justify-center">
                            <i class="fas fa-question-circle text-xl"></i>
                        </button>
                    </div>
                </div>

                <div class="flex-1 flex flex-col">
                    
                    <div class="editor-preview h-64 md:h-96 flex items-center justify-center relative overflow-hidden">
    
                        <video id="video-preview" class="w-full h-full object-cover" src=""></video>

                        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-20">
                            <div class="text-center">
                                <i id="preview-icon" class="fas fa-play-circle text-6xl text-white opacity-50 mb-4 cursor-pointer"></i>
                            </div>
                        </div>
                        <div class="absolute bottom-4 left-0 right-0 flex justify-center">
                            <div class="bg-black bg-opacity-50 rounded-full px-4 py-2 flex items-center">
                                <button class="mx-2 text-white hover:text-blue-400">
                                    <i class="fas fa-step-backward"></i>
                                </button>
                                <button id="play-pause-button" class="mx-2 w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center">
                                    <i class="fas fa-play"></i>
                                </button>
                                <button class="mx-2 text-white hover:text-blue-400">
                                    <i class="fas fa-step-forward"></i>
                                </button>
                                <div class="ml-4 text-sm">
                                    <span>00:00</span>
                                    <span class="mx-1">/</span>
                                    <span>01:30</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="editor-timeline p-4">
                        <div class="flex items-center mb-2">
                            <div class="flex-1 h-8 timeline-track rounded-lg relative">
                                <div class="absolute left-0 top-0 bottom-0 w-1 bg-blue-500 timeline-marker rounded-full"></div>
                            </div>
                            <button class="ml-4 w-8 h-8 rounded-full bg-blue-600 flex items-center justify-center">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                        <div class="grid grid-cols-4 md:grid-cols-6 lg:grid-cols-8 gap-2">
                            <div class="media-thumbnail aspect-video bg-gray-700 rounded-md flex items-center justify-center cursor-pointer">
                                <i class="fas fa-video text-gray-400"></i>
                            </div>
                            <div class="media-thumbnail aspect-video bg-gray-700 rounded-md flex items-center justify-center cursor-pointer">
                                <i class="fas fa-image text-gray-400"></i>
                            </div>
                            <div class="media-thumbnail aspect-video bg-gray-700 rounded-md flex items-center justify-center cursor-pointer">
                                <i class="fas fa-music text-gray-400"></i>
                            </div>
                            <div class="media-thumbnail aspect-video bg-gray-700 rounded-md flex items-center justify-center cursor-pointer">
                                <i class="fas fa-font text-gray-400"></i>
                            </div>
                            <div class="media-thumbnail aspect-video bg-gray-700 rounded-md flex items-center justify-center cursor-pointer">
                                <i class="fas fa-plus text-gray-400"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-64 bg-gray-750 p-4">
                    <h3 class="font-medium mb-4 flex items-center">
                        <i class="fas fa-sliders-h mr-2"></i> Video Properties
                    </h3>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm text-gray-400 mb-1">Resolution</label>
                            <select class="w-full bg-gray-700 rounded-md px-3 py-2 text-sm">
                                <option>1080p (Full HD)</option>
                                <option>720p (HD)</option>
                                <option>4K (Ultra HD)</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm text-gray-400 mb-1">Frame Rate</label>
                            <select class="w-full bg-gray-700 rounded-md px-3 py-2 text-sm">
                                <option>30 fps</option>
                                <option>60 fps</option>
                                <option>24 fps</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm text-gray-400 mb-1">Duration</label>
                            <input type="text" class="w-full bg-gray-700 rounded-md px-3 py-2 text-sm" value="01:30">
                        </div>
                        <button class="w-full bg-gradient-to-r from-purple-600 to-blue-600 py-2 rounded-md text-sm font-medium mt-4 hover:opacity-90">
                            Export Video
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-16">
            <h2 class="text-3xl font-bold text-center mb-8 bg-clip-text text-transparent bg-gradient-to-r from-purple-400 to-blue-500">
                Our Professional Services
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-gray-800 rounded-xl p-6 hover:bg-gray-750 transition-all cursor-pointer group">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-r from-purple-600 to-blue-600 flex items-center justify-center mb-4 group-hover:rotate-12 transition-transform">
                        <i class="fas fa-video text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-medium mb-2">Video Editing</h3>
                    <p class="text-gray-400">Professional editing for YouTube, social media, commercials and more with advanced effects.</p>
                </div>
                
                <div class="bg-gray-800 rounded-xl p-6 hover:bg-gray-750 transition-all cursor-pointer group">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-r from-pink-600 to-purple-600 flex items-center justify-center mb-4 group-hover:rotate-12 transition-transform">
                        <i class="fas fa-ad text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-medium mb-2">Ad Creation</h3>
                    <p class="text-gray-400">Eye-catching advertisements designed to convert viewers into customers.</p>
                </div>
                
                <div class="bg-gray-800 rounded-xl p-6 hover:bg-gray-750 transition-all cursor-pointer group">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-r from-blue-600 to-teal-600 flex items-center justify-center mb-4 group-hover:rotate-12 transition-transform">
                        <i class="fas fa-music text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-medium mb-2">Audio Production</h3>
                    <p class="text-gray-400">High quality voice overs, sound effects and background music for your projects.</p>
                </div>
                
                <div class="bg-gray-800 rounded-xl p-6 hover:bg-gray-750 transition-all cursor-pointer group">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-r from-orange-600 to-yellow-600 flex items-center justify-center mb-4 group-hover:rotate-12 transition-transform">
                        <i class="fas fa-lightbulb text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-medium mb-2">Creative Consulting</h3>
                    <p class="text-gray-400">Strategic guidance to develop engaging content that resonates with your audience.</p>
                </div>
            </div>
        </div>

        <div class="mt-20 bg-gradient-to-r from-purple-900 to-blue-900 rounded-2xl p-8 md:p-12 text-center relative overflow-hidden">
            <div class="absolute -right-20 -top-20 w-64 h-64 rounded-full bg-purple-600 opacity-20"></div>
            <div class="absolute -left-20 -bottom-20 w-64 h-64 rounded-full bg-blue-600 opacity-20"></div>
            <div class="relative z-10">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Elevate Your Content?</h2>
                <p class="text-lg text-purple-200 max-w-2xl mx-auto mb-8">
                    Let our team of professionals in Chittagong transform your ideas into stunning visual stories.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="index.html#contact" class="bg-white text-purple-900 px-8 py-3 rounded-full font-bold hover:bg-opacity-90 transition-all">
                        Get a Free Consultation
                    </a>
                    <a href="index.html#work" class="border-2 border-white text-white px-8 py-3 rounded-full font-bold hover:bg-white hover:bg-opacity-10 transition-all">
                        View Portfolio
                    </a>
                </div>
            </div>
        </div>
    </div>

@include('partials.footer')
   
</body>
</html>