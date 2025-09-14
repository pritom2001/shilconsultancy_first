        // Sample posts data
        let posts = [
            {
                id: 1,
                username: "Shil Consultancy",
                userImage: "/Media/favicon/ms-icon-310x310.png",
                image: "Media/1.jpg",
                caption: "Tired of flat lines? 📈 We turn aspirations into upward trends. Our data-driven strategies are designed to deliver real, measurable growth for your brand on social media. Let's chart your success together. #SocialGrowth #DigitalMarketing #PerformanceDriven",
                likes: 2431,
                comments: 124,
                timeAgo: "3 HOURS AGO",
                location: "Sponsored Post"
            },
            {
                id: 2,
                username: "Shil Consultancy",
                userImage: "/Media/favicon/ms-icon-310x310.png",
                image: "Media/2.jpg",
                caption: "Beyond likes and shares: we build comprehensive social strategies. 🎯 From crafting engaging content to running targeted campaigns and analyzing performance, our services cover every aspect of your online presence. What's your biggest social media challenge? #SocialMediaSolutions #FullServiceMarketing #DigitalStrategy",
                likes: 1872,
                comments: 89,
                timeAgo: "1 DAY AGO",
                location: "Sponsored Post"
            },
            {
                id: 3,
                username: "Shil Consultancy",
                userImage: "/Media/favicon/ms-icon-310x310.png",
                image: "Media/3.jpg",
                caption: "Who are you really talking to online? 🗣️ Effective social media starts with understanding your audience. We dive deep into demographics and behaviors to ensure your message reaches the right people, every time. Discover your ideal customer. #AudienceInsights #TargetedMarketing #KnowYourAudience",
                likes: 3210,
                comments: 156,
                timeAgo: "2 DAYS AGO",
                location: "Sponsored Post"
            }
        ];

        // More posts for infinite scroll
        const morePosts = [
            {
                id: 4,
                username: "Shil Consultancy",
                userImage: "/Media/favicon/ms-icon-310x310.png",
                image: "Media/4.jpg",
                caption: "Nothing speaks louder than client success. We're proud to empower businesses to thrive on social platforms. Ready to experience similar results? #ClientSuccess #SocialProof #MarketingTestimonial ",
                likes: 4321,
                comments: 210,
                timeAgo: "4 DAYS AGO",
                location: "Bangladesh"
            },
            {
                id: 5,
                username: "Shil Consultancy",
                userImage: "/Media/favicon/ms-icon-310x310.png",
                image: "Media/5.jpg",
                caption: "Behind every scroll-stopping post is a strategic process. ➡️ From initial concept to final optimization, our content creation workflow ensures every piece of content resonates, performs, and drives engagement. Let's tell your story. #ContentMarketing #CreativeProcess #DigitalContent",
                likes: 2890,
                comments: 145,
                timeAgo: "5 DAYS AGO",
                location: "Chittagong"
            },
            {
                id: 6,
                username: "Shil Consultancy",
                userImage: "/Media/favicon/ms-icon-310x310.png",
                image: "Media/6.jpg",
                caption: "Are your social channels feeling quiet? 🔇 It's time to turn up the volume! We specialize in strategies that spark conversations, build communities, and significantly increase your audience engagement. Let's make some noise! #EngagementBoost #SocialMediaGrowth #ConnectWithUs",
                likes: 3560,
                comments: 178,
                timeAgo: "1 WEEK AGO",
                location: "Dhaka"
            }
        ];

        // Stories data - This array is now unused but kept for reference if needed elsewhere.
        const stories = [
            {
                id: 1,
                username: "your_story",
                userImage: "https://randomuser.me/api/portraits/women/65.jpg",
                image: "https://images.unsplash.com/photo-1611162616305-c69b3fa7fbe0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80",
                seen: false,
                time: "Just now"
            },
            {
                id: 2,
                username: "local_eats",
                userImage: "https://randomuser.me/api/portraits/men/32.jpg",
                image: "https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=880&q=80",
                seen: false,
                time: "1h ago"
            },
            {
                id: 3,
                username: "fashionista_trend",
                userImage: "https://randomuser.me/api/portraits/women/44.jpg",
                image: "https://images.unsplash.com/photo-1483985988355-763728e1935b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80",
                seen: false,
                time: "2h ago"
            },
            {
                id: 4,
                username: "global_travels",
                userImage: "https://randomuser.me/api/portraits/women/63.jpg",
                image: "https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80",
                seen: true,
                time: "4h ago"
            },
            {
                id: 5,
                username: "tech_insights",
                userImage: "https://randomuser.me/api/portraits/men/75.jpg",
                image: "https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80",
                seen: false,
                time: "5h ago"
            },
            {
                id: 6,
                username: "adventure_seeker",
                userImage: "https://randomuser.me/api/portraits/women/68.jpg",
                image: "https://images.unsplash.com/photo-1470114716159-e389f8712fda?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80",
                seen: true,
                time: "6h ago"
            },
            {
                id: 7,
                username: "comedy_central",
                userImage: "https://randomuser.me/api/portraits/men/44.jpg",
                image: "https://images.unsplash.com/photo-1611162616475-465b1874d1ec?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80",
                seen: false,
                time: "8h ago"
            }
        ];

        // Function to create a post element
        function createPostElement(post) {
            return `
                <div class="post" data-post-id="${post.id}">
                    <div class="post-header">
                        <div class="post-user">
                            <img src="${post.userImage}" class="w-8 h-8 rounded-full object-cover mr-3">
                            <div>
                                <p class="text-sm font-semibold">${post.username}</p>
                                ${post.location ? `<p class="text-xs">${post.location}</p>` : ''}
                            </div>
                        </div>
                        <i class="fas fa-ellipsis-h text-gray-900"></i>
                    </div>
                    
                    <img src="${post.image}" alt="Post image" class="post-image w-full">
                    
                    <div class="post-actions">
                        <div class="post-actions-left">
                            <button class="like-btn" data-post="${post.id}">
                                <i class="far fa-heart text-2xl"></i>
                            </button>
                            <i class="far fa-comment text-2xl"></i>
                            <button class="share-btn" data-post="${post.id}">
                                <i class="far fa-paper-plane text-2xl"></i>
                            </button>
                        </div>
                        <i class="far fa-bookmark text-2xl"></i>
                    </div>
                    
                    <p class="post-likes"><span class="like-count">${post.likes.toLocaleString()}</span> likes</p>
                    
                    <p class="post-caption">
                        <span class="font-semibold">${post.username}</span> ${post.caption}
                    </p>
                    
                    <p class="post-comments">View all ${post.comments} comments</p>
                    
                    <p class="post-time">${post.timeAgo}</p>
                    
                    <div class="post-add-comment">
                        <i class="far fa-smile text-xl"></i>
                        <input type="text" placeholder="Add a comment..." class="post-comment-input">
                        <button class="post-comment-button">Post</button>
                    </div>
                </div>
            `;
        }

        // Function to load posts
        function loadPosts() {
            const container = document.getElementById('posts-container');
            
            // Add posts to container
            posts.forEach(post => {
                container.insertAdjacentHTML('beforeend', createPostElement(post));
            });
        }

        // Function to load more posts (for infinite scroll)
        function loadMorePosts() {
            const container = document.getElementById('posts-container');
            const spinner = document.getElementById('loading-spinner');
            
            // Show loading spinner
            spinner.classList.add('active');
            
            // Simulate API delay
            setTimeout(() => {
                // Add more posts
                morePosts.forEach(post => {
                    container.insertAdjacentHTML('beforeend', createPostElement(post));
                });
                
                // Update posts array
                posts = [...posts, ...morePosts];
                
                // Hide loading spinner
                spinner.classList.remove('active');
                
                // Reset flag
                isLoading = false;
            }, 1000);
        }

        // Function to show share modal
        function showShareModal(postId) {
            const modal = document.getElementById('share-modal');
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
        
        // Function to close share modal
        function closeShareModal() {
            const modal = document.getElementById('share-modal');
            modal.classList.remove('active');
            document.body.style.overflow = '';
        }

        // Infinite scroll variables
        let isLoading = false;
        let hasMorePosts = true;

        // Initialize the page
        document.addEventListener('DOMContentLoaded', function() {
            // Load initial posts
            loadPosts();
            
            // Like button functionality
            document.addEventListener('click', function(e) {
                if (e.target.closest('.like-btn')) {
                    const btn = e.target.closest('.like-btn');
                    const icon = btn.querySelector('i');
                    const postId = btn.getAttribute('data-post');
                    const likesElement = btn.closest('.post').querySelector('.like-count');
                    
                    if (icon.classList.contains('far')) {
                        icon.classList.remove('far');
                        icon.classList.add('fas', 'text-red-500');
                        
                        // Increment likes count
                        const currentLikes = parseInt(likesElement.textContent.replace(/,/g, ''));
                        likesElement.textContent = (currentLikes + 1).toLocaleString();
                    } else {
                        icon.classList.remove('fas', 'text-red-500');
                        icon.classList.add('far');
                        
                        // Decrement likes count
                        const currentLikes = parseInt(likesElement.textContent.replace(/,/g, ''));
                        likesElement.textContent = (currentLikes - 1).toLocaleString();
                    }
                }
                
                // Share button functionality
                if (e.target.closest('.share-btn')) {
                    const btn = e.target.closest('.share-btn');
                    const postId = btn.getAttribute('data-post');
                    showShareModal(postId);
                }
            });
            
            // Close share modal
            const shareClose = document.getElementById('share-close');
            if (shareClose) {
                shareClose.addEventListener('click', closeShareModal);
            }
            
            // Infinite scroll
            window.addEventListener('scroll', function() {
                const { scrollTop, scrollHeight, clientHeight } = document.documentElement;
                
                // Check if we're near the bottom of the page
                if (scrollTop + clientHeight >= scrollHeight - 500 && !isLoading && hasMorePosts) {
                    isLoading = true;
                    loadMorePosts();
                }
            });
        });
        
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