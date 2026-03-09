// ============================================================
// DENDI APRILIO SETIAWAN — Portfolio Script
// ============================================================

document.addEventListener('DOMContentLoaded', () => {

    // ── 1. GLOBAL CANVAS (Particle Background) ──
    const canvas = document.getElementById('global-canvas');
    if (canvas) {
        const ctx = canvas.getContext('2d');
        let w, h, particles = [];
        const COUNT = 70;
        const DIST  = 130;
        const SPEED = 0.3;
        const COLOR = 'rgba(245, 158, 11, 0.6)';   // Gold particles

        function resize() { w = canvas.width = innerWidth; h = canvas.height = innerHeight; }

        class Particle {
            constructor() { this.reset(); }
            reset() {
                this.x  = Math.random() * w;
                this.y  = Math.random() * h;
                this.vx = (Math.random() - 0.5) * SPEED;
                this.vy = (Math.random() - 0.5) * SPEED;
                this.r  = Math.random() * 1.5 + 0.5;
            }
            update() {
                this.x += this.vx; this.y += this.vy;
                if (this.x < 0 || this.x > w) this.vx *= -1;
                if (this.y < 0 || this.y > h) this.vy *= -1;
            }
            draw() {
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.r, 0, Math.PI * 2);
                ctx.fillStyle = COLOR;
                ctx.fill();
            }
        }

        function init() {
            particles = [];
            for (let i = 0; i < COUNT; i++) particles.push(new Particle());
        }

        function animate() {
            ctx.clearRect(0, 0, w, h);
            particles.forEach((p, i) => {
                p.update(); p.draw();
                for (let j = i + 1; j < particles.length; j++) {
                    const q = particles[j];
                    const dx = p.x - q.x, dy = p.y - q.y;
                    const d  = Math.sqrt(dx * dx + dy * dy);
                    if (d < DIST) {
                        ctx.beginPath();
                        ctx.strokeStyle = `rgba(245,158,11,${0.12 * (1 - d / DIST)})`;
                        ctx.lineWidth = 0.6;
                        ctx.moveTo(p.x, p.y);
                        ctx.lineTo(q.x, q.y);
                        ctx.stroke();
                    }
                }
            });
            requestAnimationFrame(animate);
        }

        window.addEventListener('resize', () => { resize(); init(); });
        resize(); init(); animate();
    }


    // ── 2. NAVBAR ──
    const navbar = document.querySelector('.navbar');
    const hamburger = document.querySelector('.hamburger');
    const navLinks  = document.querySelector('.nav-links');

    window.addEventListener('scroll', () => {
        navbar.classList.toggle('scrolled', scrollY > 40);
    });

    if (hamburger) {
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('open');
            navLinks.classList.toggle('open');
        });
        // Close on link click
        navLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                hamburger.classList.remove('open');
                navLinks.classList.remove('open');
            });
        });
    }


    // ── 3. ACTIVE NAV ON SCROLL ──
    const sections = document.querySelectorAll('section[id], header[id]');
    const navItems = document.querySelectorAll('.nav-links a[href^="#"]');

    const sectionMap = {};
    sections.forEach(s => { sectionMap[s.id] = s; });

    const observer = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                navItems.forEach(a => a.classList.remove('active'));
                const active = document.querySelector(`.nav-links a[href="#${e.target.id}"]`);
                if (active) active.classList.add('active');
            }
        });
    }, { threshold: 0.35 });

    sections.forEach(s => observer.observe(s));


    // ── 4. SCROLL REVEAL ──
    const revealAll = document.querySelectorAll(
        '.section-title, .section-label, .about-grid, .contact-wrapper, .edu-card-block, .service-list-block, .about-stats'
    );
    const revealGroups = document.querySelectorAll(
        '.projects-grid, .skill-tags-group, .proficiency-block, .skills-block'
    );

    const revealObs = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.classList.add('visible');
                revealObs.unobserve(e.target);
            }
        });
    }, { threshold: 0.1 });

    revealAll.forEach(el => { el.classList.add('hidden-el'); revealObs.observe(el); });

    // Staggered children
    revealGroups.forEach(container => {
        Array.from(container.children).forEach((child, idx) => {
            child.classList.add('hidden-el');
            child.style.transitionDelay = `${idx * 80}ms`;
            revealObs.observe(child);
        });
    });


    // ── 5. SKILL BAR ANIMATION ──
    const fills = document.querySelectorAll('.sb-fill');
    let barsAnimated = false;

    const barObs = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting && !barsAnimated) {
                barsAnimated = true;
                fills.forEach(fill => {
                    const w = fill.style.width;
                    fill.style.width = '0';
                    requestAnimationFrame(() => {
                        setTimeout(() => { fill.style.width = w; }, 100);
                    });
                });
                barObs.disconnect();
            }
        });
    }, { threshold: 0.2 });

    document.querySelector('#skills-experience') && barObs.observe(document.querySelector('#skills-experience'));


    // ── 6. PROJECT FILTER ──
    const filterBtns  = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card[data-category]');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            const filter = btn.getAttribute('data-filter');
            projectCards.forEach(card => {
                if (filter === 'all' || card.getAttribute('data-category') === filter) {
                    card.style.display = '';
                    requestAnimationFrame(() => { card.classList.add('visible'); card.classList.remove('hidden-el'); });
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });


    // ── 7. SMOOTH COUNTER ANIMATION (Stats) ──
    function animateCounter(el) {
        const target = parseInt(el.textContent.replace(/\D/g, ''), 10);
        const suffix = el.textContent.replace(/[0-9]/g, '');
        let current = 0;
        const increment = Math.ceil(target / 30);
        const timer = setInterval(() => {
            current = Math.min(current + increment, target);
            el.textContent = current + suffix;
            if (current >= target) clearInterval(timer);
        }, 40);
    }

    const statNums = document.querySelectorAll('.stat-num');
    const statObs  = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                animateCounter(e.target);
                statObs.unobserve(e.target);
            }
        });
    }, { threshold: 0.7 });

    statNums.forEach(el => statObs.observe(el));


    // ── 8. THEME TOGGLE (Light / Dark) ──
    const themeToggle = document.getElementById('theme-toggle');
    const htmlEl = document.documentElement;

    // Apply saved theme on load (also handled by inline script to prevent flash)
    const savedTheme = localStorage.getItem('portfolio-theme') || 'dark';
    htmlEl.setAttribute('data-theme', savedTheme);

    if (themeToggle) {
        themeToggle.addEventListener('click', () => {
            const current = htmlEl.getAttribute('data-theme') || 'dark';
            const next = current === 'dark' ? 'light' : 'dark';
            htmlEl.setAttribute('data-theme', next);
            localStorage.setItem('portfolio-theme', next);
        });
    }

});
