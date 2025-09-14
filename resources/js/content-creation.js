 document.addEventListener('DOMContentLoaded', function() {
            // --- Video Player Logic ---
            const video = document.getElementById('video-preview');
            const playPauseBtn = document.getElementById('play-pause-button');
            const playPauseIcon = playPauseBtn.querySelector('i');
            const previewIcon = document.getElementById('preview-icon');

            function togglePlayPause() {
                if (video.paused) {
                    video.play();
                    playPauseIcon.classList.remove('fa-play');
                    playPauseIcon.classList.add('fa-pause');
                    playPauseBtn.classList.add('bg-green-500');
                    playPauseBtn.classList.remove('bg-blue-600');
                    previewIcon.style.display = 'none'; // Hide center icon on play
                } else {
                    video.pause();
                    playPauseIcon.classList.remove('fa-pause');
                    playPauseIcon.classList.add('fa-play');
                    playPauseBtn.classList.remove('bg-green-500');
                    playPauseBtn.classList.add('bg-blue-600');
                    previewIcon.style.display = 'block'; // Show center icon on pause
                }
            }

            // Event listeners for the player
            playPauseBtn.addEventListener('click', togglePlayPause);
            previewIcon.addEventListener('click', togglePlayPause); // Allow clicking center icon
            video.addEventListener('ended', () => { // Reset icon when video finishes
                 playPauseIcon.classList.remove('fa-pause');
                 playPauseIcon.classList.add('fa-play');
                 previewIcon.style.display = 'block';
            });

            // --- Other interactive elements ---
            const toolBtns = document.querySelectorAll('.tool-btn');
            toolBtns.forEach(btn => {
                btn.addEventListener('mousedown', function() {
                    this.style.transform = 'translateY(1px)';
                });
                btn.addEventListener('mouseup', function() {
                    this.style.transform = 'translateY(-3px)';
                });
                btn.addEventListener('mouseleave', function() {
                    this.style.transform = '';
                });
            });

            // Media thumbnail selection
            const thumbnails = document.querySelectorAll('.media-thumbnail');
            thumbnails.forEach(thumb => {
                thumb.addEventListener('click', function() {
                    thumbnails.forEach(t => t.classList.remove('ring-2', 'ring-blue-500'));
                    this.classList.add('ring-2', 'ring-blue-500');
                });
            });

            // Mobile menu toggle for the header
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', () => {
                    mobileMenu.classList.toggle('active');
                });
            }
        });