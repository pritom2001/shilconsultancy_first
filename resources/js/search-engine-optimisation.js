// --- SCRIPT FOR ORIGINAL SEO PAGE ---
        const navLinks = document.querySelectorAll('.nav-item');
        const sections = document.querySelectorAll('main section'); 

        function changeActiveLink() {
            let index = sections.length;
            while(--index && window.scrollY + 100 < sections[index].offsetTop) {}
            navLinks.forEach((link) => link.classList.remove('active'));
            if(navLinks[index]) {
               navLinks[index].classList.add('active');
            }
        }
        window.addEventListener('scroll', changeActiveLink);
        changeActiveLink();

        const searchInput = document.getElementById('searchInput');
        const keywords = [
            "best SEO agency in Chittagong",
            "best SEO agency in Bangladesh", 
            "best SEO agency near me",
            "top SEO services in Chittagong"
        ];
        let currentKeyword = 0;
        let charIndex = 0;
        let isDeleting = false;

        function type() {
            const fullKeyword = keywords[currentKeyword];
            
            if (isDeleting) {
                searchInput.placeholder = fullKeyword.substring(0, charIndex - 1);
                charIndex--;
            } else {
                searchInput.placeholder = fullKeyword.substring(0, charIndex + 1);
                charIndex++;
            }

            if (!isDeleting && charIndex === fullKeyword.length) {
                isDeleting = true;
                setTimeout(type, 2000);
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                currentKeyword = (currentKeyword + 1) % keywords.length;
                setTimeout(type, 500);
            } else {
                const typingSpeed = isDeleting ? 100 : 150;
                setTimeout(type, typingSpeed);
            }
        }
        setTimeout(type, 1000);

        // --- SCRIPT FOR NEWLY ADDED HEADER ---
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }