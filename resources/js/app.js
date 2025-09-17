// import { jsx } from 'react/jsx-runtime';
import './bootstrap';

     // Create floating particles
        function createParticles() {
            const container = document.getElementById('particles');
            const particleCount = 30;
            
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
                particle.style.animation = `float ${duration}s ease-in-out ${delay}s infinite`;
                
                container.appendChild(particle);
            }
        }
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });

                // Close mobile menu if open
                const mobileMenu = document.getElementById('mobile-menu');
                if (mobileMenu.classList.contains('active')) {
                    mobileMenu.classList.remove('active');
                }
            });
        });
        
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('active');
            });
        }
        
        // Initialize particles when DOM is loaded
        document.addEventListener('DOMContentLoaded', () => {
            createParticles();
            
            // Add scroll animation for elements
            const animateOnScroll = () => {
                const elements = document.querySelectorAll('.service-card, .floating, .btn-glow');
                
                elements.forEach(element => {
                    const elementPosition = element.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;
                    
                    if (elementPosition < windowHeight - 100) {
                        element.classList.add('animate__animated', 'animate__fadeInUp');
                    }
                });
            };
            
            window.addEventListener('scroll', animateOnScroll);
            animateOnScroll(); // Run once on load
        });
        
        // Form submission with EmailJS
        const contactForm = document.getElementById('contact-form');
        const successMessage = document.getElementById('success-message');
        const errorMessage = document.getElementById('error-message');

        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Show loading state
                const submitButton = contactForm.querySelector('button[type="submit"]');
                const originalButtonText = submitButton.innerHTML;
                submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
                submitButton.disabled = true;
                
                // Hide any previous messages
                successMessage.classList.add('hidden');
                errorMessage.classList.add('hidden');
                
                // Send the email
                emailjs.sendForm('service_r7xbupq', 'template_1hg6558', this)
                    .then(function() {
                        // Show success message
                        successMessage.classList.remove('hidden');
                        contactForm.reset();
                        
                        // Track successful submission
                        gtag('event', 'submit', {
                            'event_category': 'Form',
                            'event_label': 'Contact Form Submission - Success'
                        });
                    }, function(error) {
                        // Show error message
                        errorMessage.classList.remove('hidden');
                        console.error('Failed to send message:', error);
                        
                        // Track failed submission
                        gtag('event', 'exception', {
                            'event_category': 'Form',
                            'event_label': 'Contact Form Submission - Failed',
                            'value': error
                        });
                    })
                    .finally(function() {
                        // Reset button state
                        submitButton.innerHTML = originalButtonText;
                        submitButton.disabled = false;
                    });
            });
        }
        
        // Initialize particles when DOM is loaded
        document.addEventListener('DOMContentLoaded', () => {
            createParticles();
            
            // Add scroll animation for elements
            const animateOnScroll = () => {
                const elements = document.querySelectorAll('.service-card, .floating, .btn-glow');
                
                elements.forEach(element => {
                    const elementPosition = element.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;
                    
                    if (elementPosition < windowHeight - 100) {
                        element.classList.add('animate__animated', 'animate__fadeInUp');
                    }
                });
            };
            
            window.addEventListener('scroll', animateOnScroll);
            animateOnScroll(); // Run once on load
        });
        
        // Lazy load images
        document.addEventListener("DOMContentLoaded", function() {
            const lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));
            
            if ("IntersectionObserver" in window) {
                let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            let lazyImage = entry.target;
                            lazyImage.src = lazyImage.dataset.src;
                            lazyImage.classList.remove("lazy");
                            lazyImageObserver.unobserve(lazyImage);
                        }
                    });
                });
        
                lazyImages.forEach(function(lazyImage) {
                    lazyImageObserver.observe(lazyImage);
                });
            }
        });

//swiper js
var swiper_work = new Swiper(".swiper_work", {
  slidesPerView: 1,
  spaceBetween: 20,
  loop: true,
  speed: 7000, 
  autoplay: {
    delay: 0, 
    disableOnInteraction: false,
  },
  freeMode: true, 
  freeModeMomentum: false, 
  allowTouchMove: false, 
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    }
  }
});



