(function () {
    const track = document.getElementById('servicesTrack');
    const dotsWrap = document.getElementById('servicesDots');
    const prev = document.getElementById('prevSlide');
    const next = document.getElementById('nextSlide');
    if (!track) return;

    const slides = Array.from(track.querySelectorAll('.carousel-slide'));
    if (!slides.length) return;

    // Crear dots
    if (dotsWrap) {
        slides.forEach((_, i) => {
            const dot = document.createElement('button');
            dot.type = 'button';
            dot.className = 'carousel-dot' + (i === 0 ? ' is-active' : '');
            dot.setAttribute('aria-label', `Ir al slide ${i + 1}`);
            dot.addEventListener('click', () => goTo(i));
            dotsWrap.appendChild(dot);
        });
    }

    let active = 0;
    let autoplayTimer = null;
    const INTERVAL = 3000; // 3s

    const slideLeft = (i) => slides[i].offsetLeft;

    function goTo(index) {
        active = (index + slides.length) % slides.length; // loop
        track.scrollTo({ left: slideLeft(active), behavior: 'smooth' });
        updateDots();
    }

    function updateDots() {
        if (!dotsWrap) return;
        const dots = dotsWrap.querySelectorAll('.carousel-dot');
        dots.forEach((d, i) => d.classList.toggle('is-active', i === active));
    }

    // Sincroniza "active" cuando se arrastra
    let scrollDebounce;
    track.addEventListener('scroll', () => {
        clearTimeout(scrollDebounce);
        scrollDebounce = setTimeout(() => {
            const cur = slides.reduce((best, _, i) => {
                const dist = Math.abs(track.scrollLeft - slideLeft(i));
                return dist < best.dist ? { i, dist } : best;
            }, { i: active, dist: Infinity }).i;
            if (cur !== active) {
                active = cur;
                updateDots();
            }
        }, 80);
    });

    prev && prev.addEventListener('click', () => goTo(active - 1));
    next && next.addEventListener('click', () => goTo(active + 1));

    // --- AUTOPLAY ---
    function startAutoplay() {
        stopAutoplay();
        autoplayTimer = setInterval(() => goTo(active + 1), INTERVAL);
    }
    function stopAutoplay() {
        if (autoplayTimer) clearInterval(autoplayTimer);
        autoplayTimer = null;
    }

    // Pausas de cortesía
    track.addEventListener('mouseenter', stopAutoplay);
    track.addEventListener('mouseleave', startAutoplay);
    track.addEventListener('touchstart', stopAutoplay, { passive: true });
    track.addEventListener('touchend', startAutoplay);
    document.addEventListener('visibilitychange', () => {
        if (document.hidden) stopAutoplay(); else startAutoplay();
    });

    // Recalcular posición al redimensionar
    window.addEventListener('resize', () => goTo(active));

    // Init
    updateDots();
    startAutoplay();
})();
