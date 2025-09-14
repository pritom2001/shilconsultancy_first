<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background Design Template</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        :root {
            --primary: #6e45e2;
            --secondary: #88d3ce;
            --accent: #ff7e5f;
            --dark: #0f0e17;
            --light: #fffffe;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--dark);
            color: var(--light);
            overflow-x: hidden;
        }

        /* Grid background style */
        .grid-bg {
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
            background-size: 40px 40px;
        }

        /* Particle styles */
        .particle {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(var(--primary), var(--secondary));
            opacity: 0.6;
            z-index: -1;
        }

        /* Floating animation for particles */
        @keyframes floating {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .swiper {
            width: 100%;
            height: 300px;
        }

        .swiper-slide {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: #fff;
            
        }
    </style>
</head>

<body class="grid-bg">
    <div id="particles"></div>

    <div class="max-w-7xl mx-auto py-12 grid-bg ">

        <h1 class="mt-20  text-4xl text-center font-bold"> Meet our team members </h1>
        {{-- slider start --}}
        <div class="team_slider mt-10">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    {{-- slide-1 --}}
                    <div class="swiper-slide">
                        <div
                            class="bg-gradient-to-r from-purple-600 via-indigo-600 to-blue-500 
              text-white rounded-xl shadow-lg p-10 flex flex-col md:flex-row 
              items-center gap-8 w-[900px] max-w-full">

                            <!-- Image Section -->
                            <div class="w-48 h-64 overflow-hidden rounded-lg shadow-md flex-shrink-0">
                                <img src="{{ asset('images/person-1.png') }}" alt="Profile Image"
                                    class="object-cover w-full h-full">
                            </div>

                            <!-- Position/Name Section -->
                            <div class="flex-1">
                                <h2 class="text-3xl font-semibold">Neaz Morshed</h2>
                                <div class="mt-2 w-16 h-1 bg-white"></div>
                                <p class="mt-4 text-lg uppercase tracking-wider text-gray-200">
                                    Founder & Managing Partner
                                </p>
                            </div>

                            <!-- About Section -->
                            <div class="flex-1 text-base leading-relaxed text-gray-100">
                                <p>
                                    Neaz has over 10 years of experience in business strategy, leadership,
                                    and innovation. Passionate about empowering teams and driving growth.
                                </p>
                            </div>

                        </div>
                    </div>
                    {{-- slide-1 --}}
                    <div class="swiper-slide">
                        <div
                            class="bg-gradient-to-r from-purple-600 via-indigo-600 to-blue-500 
              text-white rounded-xl shadow-lg p-10 flex flex-col md:flex-row 
              items-center gap-8 w-[900px] max-w-full">

                            <!-- Image Section -->
                            <div class="w-48 h-64 overflow-hidden rounded-lg shadow-md flex-shrink-0">
                                <img src="{{ asset('images/person-1.png') }}" alt="Profile Image"
                                    class="object-cover w-full h-full">
                            </div>

                            <!-- Position/Name Section -->
                            <div class="flex-1">
                                <h2 class="text-3xl font-semibold">Neaz Morshed</h2>
                                <div class="mt-2 w-16 h-1 bg-white"></div>
                                <p class="mt-4 text-lg uppercase tracking-wider text-gray-200">
                                    Founder & Managing Partner
                                </p>
                            </div>

                            <!-- About Section -->
                            <div class="flex-1 text-base leading-relaxed text-gray-100">
                                <p>
                                    Neaz has over 10 years of experience in business strategy, leadership,
                                    and innovation. Passionate about empowering teams and driving growth.
                                </p>
                            </div>

                        </div>
                    </div>
                    {{-- slide-1 --}}
                    <div class="swiper-slide">
                        <div
                            class="bg-gradient-to-r from-purple-600 via-indigo-600 to-blue-500 
              text-white rounded-xl shadow-lg p-10 flex flex-col md:flex-row 
              items-center gap-8 w-[900px] max-w-full">

                            <!-- Image Section -->
                            <div class="w-48 h-64 overflow-hidden rounded-lg shadow-md flex-shrink-0">
                                <img src="{{ asset('images/person-1.png') }}" alt="Profile Image"
                                    class="object-cover w-full h-full">
                            </div>

                            <!-- Position/Name Section -->
                            <div class="flex-1">
                                <h2 class="text-3xl font-semibold">Neaz Morshed</h2>
                                <div class="mt-2 w-16 h-1 bg-white"></div>
                                <p class="mt-4 text-lg uppercase tracking-wider text-gray-200">
                                    Founder & Managing Partner
                                </p>
                            </div>

                            <!-- About Section -->
                            <div class="flex-1 text-base leading-relaxed text-gray-100">
                                <p>
                                    Neaz has over 10 years of experience in business strategy, leadership,
                                    and innovation. Passionate about empowering teams and driving growth.
                                </p>
                            </div>

                        </div>
                    </div>
                    {{-- slide-1 --}}
                    <div class="swiper-slide">
                        <div
                            class="bg-gradient-to-r from-purple-600 via-indigo-600 to-blue-500 
              text-white rounded-xl shadow-lg p-10 flex flex-col md:flex-row 
              items-center gap-8 w-[900px] max-w-full">

                            <!-- Image Section -->
                            <div class="w-48 h-64 overflow-hidden rounded-lg shadow-md flex-shrink-0">
                                <img src="{{ asset('images/person-1.png') }}" alt="Profile Image"
                                    class="object-cover w-full h-full">
                            </div>

                            <!-- Position/Name Section -->
                            <div class="flex-1">
                                <h2 class="text-3xl font-semibold">Neaz Morshed</h2>
                                <div class="mt-2 w-16 h-1 bg-white"></div>
                                <p class="mt-4 text-lg uppercase tracking-wider text-gray-200">
                                    Founder & Managing Partner
                                </p>
                            </div>

                            <!-- About Section -->
                            <div class="flex-1 text-base leading-relaxed text-gray-100">
                                <p>
                                    Neaz has over 10 years of experience in business strategy, leadership,
                                    and innovation. Passionate about empowering teams and driving growth.
                                </p>
                            </div>

                        </div>
                    </div>





                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>

        <script>
            new Swiper('.mySwiper', {
                loop: true,
                slidesPerView: 1, // show only 1 slide at a time
                slidesPerGroup: 1, // move 1 slide per transition
                spaceBetween: 0, // no gap needed since it's one slide
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                speed: 800,
            });


            function createParticles() {
                const container = document.getElementById('particles');
                const particleCount = 30; // You can adjust this number

                for (let i = 0; i < particleCount; i++) {
                    const particle = document.createElement('div');
                    particle.classList.add('particle');

                    // Random size between 2px and 6px
                    const size = Math.random() * 4 + 2;
                    particle.style.width = `${size}px`;
                    particle.style.height = `${size}px`;

                    // Random position
                    particle.style.left = `${Math.random() * 100}%`;
                    particle.style.top = `${Math.random() * 100}%`;

                    // Random animation duration and delay
                    const duration = Math.random() * 20 + 10;
                    const delay = Math.random() * 5;
                    particle.style.animation = `floating ${duration}s ease-in-out ${delay}s infinite`;

                    container.appendChild(particle);
                }
            }

            document.addEventListener('DOMContentLoaded', () => {
                createParticles();
            });
        </script>
</body>

</html>
