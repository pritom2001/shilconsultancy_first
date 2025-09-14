// Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('active');
        });
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

    // Change product image when thumbnail is clicked
    function changeImage(element) {
        const mainImage = document.getElementById('mainImage');
        mainImage.src = element.src;
        
        // Remove border from all thumbnails
        const thumbnails = document.querySelectorAll('.product-gallery img');
        thumbnails.forEach(img => {
            img.classList.remove('border-2', 'border-indigo-300');
        });
        
        // Add border to clicked thumbnail
        element.classList.add('border-2', 'border-indigo-300');
    }
    
    // Tab functionality
    function openTab(evt, tabName) {
        const tabContents = document.querySelectorAll('.tab-content');
        tabContents.forEach(content => {
            content.classList.remove('active');
        });
        
        const tabButtons = document.querySelectorAll('.tab-button');
        tabButtons.forEach(button => {
            button.classList.remove('border-indigo-500', 'text-indigo-600', 'bg-indigo-50');
            button.classList.add('border-transparent', 'text-gray-500');
        });
        
        document.getElementById(tabName).classList.add('active');
        evt.currentTarget.classList.remove('border-transparent', 'text-gray-500');
        evt.currentTarget.classList.add('border-indigo-500', 'text-indigo-600', 'bg-indigo-50');
    }
    
    // FAQ accordion
    const faqQuestions = document.querySelectorAll('.faq-question');
    faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
            const answer = question.nextElementSibling;
            const icon = question.querySelector('i');
            
            // Toggle answer visibility
            answer.classList.toggle('hidden');
            
            // Rotate icon
            icon.classList.toggle('rotate-180');
        });
    });
    
    // Quantity controls
    function increaseQuantity() {
        const quantityInput = document.getElementById('quantity');
        let quantity = parseInt(quantityInput.value);
        quantityInput.value = quantity + 1;
    }
    
    function decreaseQuantity() {
        const quantityInput = document.getElementById('quantity');
        let quantity = parseInt(quantityInput.value);
        if (quantity > 1) {
            quantityInput.value = quantity - 1;
        }
    }
    
    // Sticky add to cart for mobile
    window.addEventListener('scroll', function() {
        const stickyCart = document.querySelector('.sticky-add-to-cart');
        if (window.innerWidth < 1024) { // Only for mobile
            if (window.scrollY > 300) {
                stickyCart.classList.add('visible');
            } else {
                stickyCart.classList.remove('visible');
            }
        }
    });
    
    // Zoom image function
    function zoomImage() {
        const mainImage = document.getElementById('mainImage');
        const currentSrc = mainImage.src;
        
        // Open the image in a new tab (simple zoom solution)
        window.open(currentSrc, '_blank');
    }