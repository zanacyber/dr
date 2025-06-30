document.addEventListener('DOMContentLoaded', function() {
    // Navigation scroll effect
    const navbar = document.querySelector('.navbar');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Smooth scrolling for all links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        if (anchor.getAttribute('href') !== '#') { // Skip empty hashes
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 70,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    const navbarCollapse = document.querySelector('.navbar-collapse');
                    if (navbarCollapse.classList.contains('show')) {
                        new bootstrap.Collapse(navbarCollapse);
                    }
                }
            });
        }
    });

    // Countdown timer
    function updateCountdown() {
        const countdownElement = document.getElementById('countdown');
        if (!countdownElement) return;

        const eventDate = new Date('2025-07-09').getTime();
        const now = new Date().getTime();
        const distance = eventDate - now;

        if (distance < 0) {
            countdownElement.innerHTML = '<div class="alert alert-warning">L\'événement a commencé!</div>';
            return;
        }

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        countdownElement.innerHTML = `
            <div class="row g-3 justify-content-center">
                <div class="col-auto">
                    <div class="countdown-item bg-dark bg-opacity-50 p-3 rounded text-center">
                        <div class="countdown-number">${days}</div>
                        <div class="countdown-label">Jours</div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="countdown-item bg-dark bg-opacity-50 p-3 rounded text-center">
                        <div class="countdown-number">${hours}</div>
                        <div class="countdown-label">Heures</div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="countdown-item bg-dark bg-opacity-50 p-3 rounded text-center">
                        <div class="countdown-number">${minutes}</div>
                        <div class="countdown-label">Minutes</div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="countdown-item bg-dark bg-opacity-50 p-3 rounded text-center">
                        <div class="countdown-number">${seconds}</div>
                        <div class="countdown-label">Secondes</div>
                    </div>
                </div>
            </div>
        `;
    }

    // Initialize and update countdown
    updateCountdown();
    setInterval(updateCountdown, 1000);

    // Vote button animation
    document.querySelectorAll('.vote-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            this.innerHTML = '<i class="fas fa-check me-1"></i> Merci!';
            this.classList.remove('btn-gradient');
            this.classList.add('btn-success');
            
            // Animation
            this.style.transform = 'scale(1.1)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 300);
        });
    });

    // Lightbox initialization
    if (typeof lightbox !== 'undefined') {
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true,
            'albumLabel': 'Image %1 sur %2'
        });
    }

    animateStats()
    initTypingEffect()
});

// Animation des chiffres des statistiques
function animateStats() {
    const statItems = document.querySelectorAll('.stat-number');
    
    statItems.forEach(item => {
        const target = parseInt(item.getAttribute('data-count'));
        const duration = 2000; // 2 secondes
        const step = target / (duration / 16); // 60fps
        
        let current = 0;
        const increment = () => {
            current += step;
            if (current < target) {
                item.textContent = Math.floor(current);
                requestAnimationFrame(increment);
            } else {
                item.textContent = target.toLocaleString();
            }
        };
        
        increment();
    });
}

// Machine à écrire pour le sous-titre
function initTypingEffect() {
    const element = document.querySelector('.typing-text');
    if (!element) return;
    
    const words = JSON.parse(element.getAttribute('data-words'));
    let wordIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    let typingSpeed = 100;
    
    const type = () => {
        const currentWord = words[wordIndex];
        
        if (isDeleting) {
            element.textContent = currentWord.substring(0, charIndex - 1);
            charIndex--;
            typingSpeed = 50;
        } else {
            element.textContent = currentWord.substring(0, charIndex + 1);
            charIndex++;
            typingSpeed = 100;
        }
        
        if (!isDeleting && charIndex === currentWord.length) {
            isDeleting = true;
            typingSpeed = 1500; // Pause à la fin du mot
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            wordIndex = (wordIndex + 1) % words.length;
            typingSpeed = 500;
        }
        
        setTimeout(type, typingSpeed);
    };
    
    type();
}