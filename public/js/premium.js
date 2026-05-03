/* =========================================
   PREMIUM.JS — KSM Landing Page Interactions
   Three.js Globe · Particles · Animations
   ========================================= */

(function () {
    'use strict';

    const isMobile = /Android|iPhone|iPad|iPod/i.test(navigator.userAgent) || window.innerWidth < 768;
    const lerp = (a, b, t) => a + (b - a) * t;
    let mouseX = 0, mouseY = 0;
    document.addEventListener('mousemove', (e) => { mouseX = e.clientX; mouseY = e.clientY; });

    // =========================================
    // 1. THREE.JS — ELEGANT GLOBE
    // =========================================
    function initThreeScene() {
        const canvas = document.getElementById('hero-3d');
        if (!canvas || typeof THREE === 'undefined') return;

        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(45, canvas.clientWidth / canvas.clientHeight, 0.1, 1000);
        camera.position.z = 4.5;

        const renderer = new THREE.WebGLRenderer({ canvas, antialias: !isMobile, alpha: true });
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, isMobile ? 1 : 2));
        renderer.setSize(canvas.clientWidth, canvas.clientHeight);

        // Lights
        const ambient = new THREE.AmbientLight(0xffffff, 0.4);
        scene.add(ambient);
        const dirLight = new THREE.DirectionalLight(0xffffff, 0.8);
        dirLight.position.set(3, 3, 5);
        scene.add(dirLight);
        const rimLight = new THREE.PointLight(0x10c9b0, 1.5, 20);
        rimLight.position.set(-3, 2, -2);
        scene.add(rimLight);

        // Globe group
        const globeGroup = new THREE.Group();
        scene.add(globeGroup);

        // Solid sphere (semi-transparent)
        const sphereGeo = new THREE.SphereGeometry(1.4, 64, 64);
        const sphereMat = new THREE.MeshPhysicalMaterial({
            color: 0x0e8a7e,
            metalness: 0.1,
            roughness: 0.3,
            clearcoat: 0.8,
            transparent: true,
            opacity: 0.15,
        });
        const sphere = new THREE.Mesh(sphereGeo, sphereMat);
        globeGroup.add(sphere);

        // Wireframe globe (latitude/longitude lines)
        const wireGeo = new THREE.SphereGeometry(1.42, 36, 18);
        const wireMat = new THREE.MeshBasicMaterial({
            color: 0x0e8a7e,
            wireframe: true,
            transparent: true,
            opacity: 0.2
        });
        const wireGlobe = new THREE.Mesh(wireGeo, wireMat);
        globeGroup.add(wireGlobe);

        // Glowing edges sphere
        const glowGeo = new THREE.SphereGeometry(1.48, 32, 32);
        const glowMat = new THREE.MeshBasicMaterial({
            color: 0x10c9b0,
            transparent: true,
            opacity: 0.04,
            side: THREE.BackSide
        });
        const glowSphere = new THREE.Mesh(glowGeo, glowMat);
        globeGroup.add(glowSphere);

        // Orbit rings
        function createRing(radius, opacity, tiltX, tiltZ) {
            const geo = new THREE.RingGeometry(radius, radius + 0.008, 128);
            const mat = new THREE.MeshBasicMaterial({
                color: 0x10c9b0, transparent: true, opacity: opacity, side: THREE.DoubleSide
            });
            const ring = new THREE.Mesh(geo, mat);
            ring.rotation.x = tiltX;
            ring.rotation.z = tiltZ;
            return ring;
        }
        const ring1 = createRing(1.8, 0.15, Math.PI * 0.52, 0.15);
        const ring2 = createRing(2.0, 0.08, Math.PI * 0.35, -0.3);
        const ring3 = createRing(2.2, 0.05, Math.PI * 0.65, 0.5);
        globeGroup.add(ring1, ring2, ring3);

        // Small dots on the globe surface (like cities)
        const dotCount = isMobile ? 20 : 50;
        const dotGeo = new THREE.SphereGeometry(0.015, 6, 6);
        const dotMat = new THREE.MeshBasicMaterial({ color: 0x10c9b0, transparent: true, opacity: 0.7 });
        for (let i = 0; i < dotCount; i++) {
            const phi = Math.acos(2 * Math.random() - 1);
            const theta = 2 * Math.PI * Math.random();
            const dot = new THREE.Mesh(dotGeo, dotMat);
            dot.position.setFromSphericalCoords(1.43, phi, theta);
            globeGroup.add(dot);
        }

        // Floating particles around the globe
        const pCount = isMobile ? 30 : 80;
        const pGeo = new THREE.BufferGeometry();
        const positions = new Float32Array(pCount * 3);
        const velocities = [];
        for (let i = 0; i < pCount; i++) {
            positions[i * 3] = (Math.random() - 0.5) * 8;
            positions[i * 3 + 1] = (Math.random() - 0.5) * 8;
            positions[i * 3 + 2] = (Math.random() - 0.5) * 4;
            velocities.push({
                x: (Math.random() - 0.5) * 0.003,
                y: (Math.random() - 0.5) * 0.003,
                z: (Math.random() - 0.5) * 0.002
            });
        }
        pGeo.setAttribute('position', new THREE.BufferAttribute(positions, 3));
        const pMat = new THREE.PointsMaterial({
            color: 0x10c9b0, size: 0.02, transparent: true, opacity: 0.5, sizeAttenuation: true
        });
        const particles = new THREE.Points(pGeo, pMat);
        scene.add(particles);

        // Mouse target
        let targetRotX = 0, targetRotY = 0;
        let time = 0;

        function animate() {
            requestAnimationFrame(animate);
            time += 0.003;

            // Mouse influence
            const cx = (mouseX / window.innerWidth - 0.5) * 0.3;
            const cy = (mouseY / window.innerHeight - 0.5) * 0.3;
            targetRotX = lerp(targetRotX, cy * 0.2, 0.02);
            targetRotY = lerp(targetRotY, cx * 0.2, 0.02);

            // Globe rotation
            globeGroup.rotation.y = time * 0.8 + targetRotY;
            globeGroup.rotation.x = 0.15 + targetRotX;

            // Float
            globeGroup.position.y = Math.sin(time * 2.5) * 0.08;

            // Ring subtle rotation
            ring1.rotation.z = 0.15 + time * 0.2;
            ring2.rotation.z = -0.3 + time * 0.15;
            ring3.rotation.z = 0.5 - time * 0.1;

            // Animate particles
            const posArr = pGeo.attributes.position.array;
            for (let i = 0; i < pCount; i++) {
                posArr[i * 3] += velocities[i].x;
                posArr[i * 3 + 1] += velocities[i].y;
                posArr[i * 3 + 2] += velocities[i].z;
                if (Math.abs(posArr[i * 3]) > 4) velocities[i].x *= -1;
                if (Math.abs(posArr[i * 3 + 1]) > 4) velocities[i].y *= -1;
                if (Math.abs(posArr[i * 3 + 2]) > 2) velocities[i].z *= -1;
            }
            pGeo.attributes.position.needsUpdate = true;

            renderer.render(scene, camera);
        }
        animate();

        window.addEventListener('resize', () => {
            camera.aspect = canvas.clientWidth / canvas.clientHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(canvas.clientWidth, canvas.clientHeight);
        });
    }

    // =========================================
    // 2. PARTICLE NETWORK BACKGROUND
    // =========================================
    function initParticleNetwork() {
        const canvas = document.getElementById('particles-canvas');
        if (!canvas) return;
        const ctx = canvas.getContext('2d');
        let width, height;
        const particles = [];
        const COUNT = isMobile ? 25 : 60;
        const CONNECT = 120, MOUSE_R = 150;

        function resize() { width = canvas.width = canvas.parentElement.clientWidth; height = canvas.height = canvas.parentElement.clientHeight; }
        resize();
        window.addEventListener('resize', resize);

        for (let i = 0; i < COUNT; i++) {
            particles.push({ x: Math.random() * width, y: Math.random() * height, vx: (Math.random() - 0.5) * 0.4, vy: (Math.random() - 0.5) * 0.4, r: Math.random() * 1.5 + 0.5, o: Math.random() * 0.4 + 0.15 });
        }

        function draw() {
            ctx.clearRect(0, 0, width, height);
            const rect = canvas.getBoundingClientRect();
            const mx = mouseX - rect.left, my = mouseY - rect.top;
            for (let i = 0; i < particles.length; i++) {
                const p = particles[i];
                p.x += p.vx; p.y += p.vy;
                if (p.x < 0 || p.x > width) p.vx *= -1;
                if (p.y < 0 || p.y > height) p.vy *= -1;
                const dx = p.x - mx, dy = p.y - my, dist = Math.sqrt(dx * dx + dy * dy);
                if (dist < MOUSE_R && dist > 0) { const f = (MOUSE_R - dist) / MOUSE_R * 0.02; p.vx += (dx / dist) * f; p.vy += (dy / dist) * f; }
                p.vx *= 0.99; p.vy *= 0.99;
                ctx.beginPath(); ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
                ctx.fillStyle = `rgba(255,255,255,${p.o})`; ctx.fill();
                for (let j = i + 1; j < particles.length; j++) {
                    const p2 = particles[j], ddx = p.x - p2.x, ddy = p.y - p2.y, dd = Math.sqrt(ddx * ddx + ddy * ddy);
                    if (dd < CONNECT) { ctx.beginPath(); ctx.moveTo(p.x, p.y); ctx.lineTo(p2.x, p2.y); ctx.strokeStyle = `rgba(255,255,255,${(1 - dd / CONNECT) * 0.1})`; ctx.lineWidth = 0.5; ctx.stroke(); }
                }
            }
            requestAnimationFrame(draw);
        }
        draw();
    }

    // =========================================
    // 3. ANIMATED COUNTERS
    // =========================================
    function initCounters() {
        const counters = document.querySelectorAll('[data-target]');
        if (!counters.length) return;
        const obs = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const el = entry.target, target = parseInt(el.dataset.target, 10), suffix = el.dataset.suffix || '', dur = 2000, start = performance.now();
                    function update(now) { const p = Math.min((now - start) / dur, 1); el.textContent = Math.floor(target * (1 - Math.pow(1 - p, 4))) + suffix; if (p < 1) requestAnimationFrame(update); }
                    requestAnimationFrame(update);
                    obs.unobserve(el);
                }
            });
        }, { threshold: 0.5 });
        counters.forEach(c => obs.observe(c));
    }

    // =========================================
    // 4. 3D CARD TILT
    // =========================================
    function initCardTilt() {
        if (isMobile) return;
        document.querySelectorAll('.service-card, .portfolio-card').forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const r = card.getBoundingClientRect(), x = e.clientX - r.left, y = e.clientY - r.top;
                const rx = ((y - r.height / 2) / r.height) * -6, ry = ((x - r.width / 2) / r.width) * 6;
                card.style.transform = `perspective(800px) rotateX(${rx}deg) rotateY(${ry}deg) translateZ(5px)`;
                card.style.setProperty('--glow-x', `${(x / r.width) * 100}%`);
                card.style.setProperty('--glow-y', `${(y / r.height) * 100}%`);
            });
            card.addEventListener('mouseleave', () => { card.style.transform = ''; });
        });
    }

    // =========================================
    // 5. MAGNETIC BUTTONS
    // =========================================
    function initMagneticButtons() {
        if (isMobile) return;
        document.querySelectorAll('.magnetic').forEach(btn => {
            btn.addEventListener('mousemove', (e) => {
                const r = btn.getBoundingClientRect();
                btn.style.transform = `translate(${(e.clientX - r.left - r.width / 2) * 0.25}px, ${(e.clientY - r.top - r.height / 2) * 0.25}px)`;
            });
            btn.addEventListener('mouseleave', () => { btn.style.transform = ''; });
        });
    }

    // =========================================
    // 6. SCROLL REVEALS
    // =========================================
    function initScrollReveal() {
        const obs = new IntersectionObserver((entries) => {
            entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); obs.unobserve(entry.target); } });
        }, { threshold: 0.15, rootMargin: '0px 0px -50px 0px' });
        document.querySelectorAll('.reveal').forEach(el => obs.observe(el));
    }

    // =========================================
    // 7. NAVBAR
    // =========================================
    function initNavbar() {
        const navbar = document.getElementById('navbar');
        if (!navbar) return;
        window.addEventListener('scroll', () => { navbar.classList.toggle('scrolled', window.scrollY > 50); });
        const hamburger = document.getElementById('menu-toggle'), menu = document.getElementById('mobile-menu');
        if (hamburger && menu) {
            hamburger.addEventListener('click', () => { hamburger.classList.toggle('active'); menu.classList.toggle('open'); document.body.classList.toggle('menu-open'); });
            menu.querySelectorAll('a').forEach(a => a.addEventListener('click', () => { hamburger.classList.remove('active'); menu.classList.remove('open'); document.body.classList.remove('menu-open'); }));
        }
    }

    // =========================================
    // 8. TYPED TEXT
    // =========================================
    function initTypedText() {
        const el = document.getElementById('typed-text');
        if (!el) return;
        const text = el.dataset.text || el.textContent;
        el.textContent = ''; el.style.visibility = 'visible';
        let i = 0;
        function type() { if (i < text.length) { el.textContent += text.charAt(i); i++; setTimeout(type, 30); } }
        setTimeout(type, 600);
    }

    // =========================================
    // 9. ACTIVE NAV
    // =========================================
    function initActiveNav() {
        const sections = document.querySelectorAll('section[id]');
        const links = document.querySelectorAll('.nav-links a, .mobile-nav-links a');
        const obs = new IntersectionObserver((entries) => {
            entries.forEach(entry => { if (entry.isIntersecting) { const id = entry.target.id; links.forEach(l => { l.classList.toggle('active', l.getAttribute('href') === '#' + id); }); } });
        }, { threshold: 0.3, rootMargin: '-80px 0px -50% 0px' });
        sections.forEach(s => obs.observe(s));
    }

    // =========================================
    // 10. CTA GLOW
    // =========================================
    function initGlowCursor() {
        if (isMobile) return;
        const cta = document.querySelector('.cta-section');
        if (!cta) return;
        cta.addEventListener('mousemove', (e) => {
            const r = cta.getBoundingClientRect();
            cta.style.setProperty('--cursor-x', `${e.clientX - r.left}px`);
            cta.style.setProperty('--cursor-y', `${e.clientY - r.top}px`);
        });
    }

    // =========================================
    // INIT
    // =========================================
    document.addEventListener('DOMContentLoaded', () => {
        initNavbar();
        initParticleNetwork();
        initCounters();
        initCardTilt();
        initMagneticButtons();
        initScrollReveal();
        initTypedText();
        initActiveNav();
        initGlowCursor();
        setTimeout(initThreeScene, 300);
    });

})();
