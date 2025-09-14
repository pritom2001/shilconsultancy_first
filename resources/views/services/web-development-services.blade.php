<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        @vite(['resources/css/web-development-services.css', 'resources/js/web-development-services.js'])
          @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

    <body class="min-h-screen flex flex-col">
     @include('partials.header')

  

    <!-- VS Code Interface -->
    <div class="flex flex-1 overflow-hidden" style="margin-top: 80px;">
        <!-- VS Code Sidebar -->
        <div class="hidden md:flex w-16 md:w-56 bg-[#252526] flex-col items-center py-4 border-r border-[#37373d]">
            <div class="w-full px-4 py-2 flex items-center justify-center md:justify-start space-x-2 text-blue-400">
                <i class="fas fa-code text-lg"></i>
                <span class="hidden md:block">Explorer</span>
            </div>
            <div class="w-full mt-4">
                <div class="px-4 py-1 text-gray-400 text-sm hidden md:block mt-6">TECH STACK</div>
                <div class="grid grid-cols-2 gap-2 p-2">
                    <div class="tech-icon p-2 flex flex-col items-center" title="WordPress">
                        <i class="fab fa-wordpress text-2xl text-[#21759b]"></i>
                        <span class="text-xs mt-1 hidden md:block">WordPress</span>
                    </div>
                    <div class="tech-icon p-2 flex flex-col items-center" title="React">
                        <i class="fab fa-react text-2xl text-[#61dafb]"></i>
                        <span class="text-xs mt-1 hidden md:block">React</span>
                    </div>
                    <div class="tech-icon p-2 flex flex-col items-center" title="Node.js">
                        <i class="fab fa-node-js text-2xl text-[#68a063]"></i>
                        <span class="text-xs mt-1 hidden md:block">Node.js</span>
                    </div>
                    <div class="tech-icon p-2 flex flex-col items-center" title="JavaScript">
                        <i class="fab fa-js text-2xl text-[#f7df1e]"></i>
                        <span class="text-xs mt-1 hidden md:block">JavaScript</span>
                    </div>
                    <div class="tech-icon p-2 flex flex-col items-center" title="HTML5">
                        <i class="fab fa-html5 text-2xl text-[#e34f26]"></i>
                        <span class="text-xs mt-1 hidden md:block">HTML5</span>
                    </div>
                    <div class="tech-icon p-2 flex flex-col items-center" title="CSS3">
                        <i class="fab fa-css3-alt text-2xl text-[#1572b6]"></i>
                        <span class="text-xs mt-1 hidden md:block">CSS3</span>
                    </div>
                    <div class="tech-icon p-2 flex flex-col items-center" title="Git">
                        <i class="fab fa-git-alt text-2xl text-[#f05032]"></i>
                        <span class="text-xs mt-1 hidden md:block">Git</span>
                    </div>
                    <div class="tech-icon p-2 flex flex-col items-center" title="AWS">
                        <i class="fab fa-aws text-2xl text-[#ff9900]"></i>
                        <span class="text-xs mt-1 hidden md:block">AWS</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Main Editor Area -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Editor Tabs -->
            <div class="bg-[#2d2d2d] flex overflow-x-auto scrollbar-hide">
                <div class="editor-tab active flex items-center">
                    <span>services.js</span>
                    <span class="close ml-2 text-gray-400 hover:text-white"><i class="fas fa-times"></i></span>
                </div>
                <div class="editor-tab flex items-center">
                    <span>why-us.md</span>
                    <span class="close ml-2 text-gray-400 hover:text-white"><i class="fas fa-times"></i></span>
                </div>
                <div class="editor-tab flex items-center">
                    <span>success-stories.json</span>
                    <span class="close ml-2 text-gray-400 hover:text-white"><i class="fas fa-times"></i></span>
                </div>
                <div class="editor-tab flex items-center">
                    <span>process.config</span>
                    <span class="close ml-2 text-gray-400 hover:text-white"><i class="fas fa-times"></i></span>
                </div>
            </div>
            
            <!-- Editor Content -->
            <div class="flex-1 overflow-auto p-4 bg-[#1e1e1e] editor-content" id="editor-content">
                <!-- Content loaded dynamically -->
            </div>
            
            <!-- Terminal -->
            <div class="terminal p-4 h-40 overflow-auto">
                <div id="terminal-content"></div>
                <div>
                    <span class="terminal-prompt">$</span> <span id="terminal-cursor" class="terminal-cursor"></span>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Status Bar -->
    <div class="bg-[#007acc] text-white text-sm px-4 py-1 flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <div class="flex items-center">
                <i class="fas fa-code-branch mr-1"></i>
                <span>main</span>
            </div>
            <div class="hidden md:flex items-center">
                <i class="fas fa-shield-alt mr-1"></i>
                <span>Secure Connection</span>
            </div>
        </div>
        <div class="flex items-center space-x-4">
            <div class="hidden md:flex items-center">
                <i class="fas fa-bolt mr-1"></i>
                <span>High Performance</span>
            </div>
            <div class="flex items-center">
                <i class="fas fa-mobile-alt mr-1"></i>
                <span>Responsive</span>
            </div>
            <div class="flex items-center">
                <span>UTF-8</span>
            </div>
        </div>
    </div>
    
    <!-- Floating Contact Button -->
    <div class="fixed bottom-6 right-6">
        <a href="https://shilconsultancy.com/#contact" class="bg-[#007acc] hover:bg-[#0062a3] text-white font-bold py-3 px-6 rounded-full shadow-lg flex items-center transform hover:scale-105 transition-all duration-300">
            <i class="fas fa-paper-plane mr-2"></i>
            <span>Start Project</span>
        </a>
    </div>
    @include('partials.footer')
    
    
</body>
</html>