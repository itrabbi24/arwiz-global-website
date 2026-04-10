<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ARWIZ Global | Premium Agricultural Retail & Wholesale</title>
    <meta name="description" content="ARWIZ Global - Your trusted retailer and wholesaler for premium food essentials in Bangladesh.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- all css here -->
    <link rel="icon" href="./img/favicon.png" sizes="16x16" type="image/png">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./style.css">
    
    <script>
        // Theme Management
        const getPreferredTheme = () => {
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme) return savedTheme;
            return 'dark'; // Set Dark Mode as default
        };

        const setTheme = (theme) => {
            document.documentElement.setAttribute('data-theme', theme);
            localStorage.setItem('theme', theme);
            const icon = document.querySelector('#theme-toggle i');
            if (icon) {
                icon.className = theme === 'dark' ? 'fa fa-moon-o' : 'fa fa-sun-o';
            }
        };

        // Language Management
        const getPreferredLang = () => {
            return localStorage.getItem('lang') || 'en';
        };

        const setLang = (lang) => {
            document.documentElement.setAttribute('data-lang', lang);
            localStorage.setItem('lang', lang);
            const switchBtn = document.getElementById('lang-switch');
            if (switchBtn) {
                switchBtn.innerText = lang === 'en' ? 'BN' : 'EN';
            }
        };

        // Initialize state
        document.addEventListener('DOMContentLoaded', () => {
            setTheme(getPreferredTheme());
            setLang(getPreferredLang());
        });
    </script>
</head>

<body>

    <header class="nav-header" id="navbar">
        <div class="nav-logo">
            <a href="index">
                <img src="./img/logo.png" alt="ARWIZ Global">
            </a>
        </div>
        <nav class="nav-links">
            <a href="index">
                <span class="lang-en">Home</span>
                <span class="lang-bn">মূলপাতা</span>
            </a>
            <a href="#catalog">
                <span class="lang-en">Catalog</span>
                <span class="lang-bn">পণ্য তালিকা</span>
            </a>
            <a href="about">
                <span class="lang-en">About</span>
                <span class="lang-bn">আমাদের সম্পর্কে</span>
            </a>
            <a href="contact">
                <span class="lang-en">Contact</span>
                <span class="lang-bn">যোগাযোগ</span>
            </a>
        </nav>
        <div class="nav-actions">
            <div class="lang-switch" id="lang-switch" onclick="toggleLang()">BN</div>
            <div class="theme-toggle" id="theme-toggle" onclick="toggleTheme()">
                <i class="fa fa-adjust"></i>
            </div>
            <div class="mobile-menu-btn" onclick="toggleMobileMenu()" style="display: none; cursor: pointer; font-size: 1.2rem; color: var(--clr-text-main); margin-left: 0.5rem;"><i class="fa fa-bars"></i></div>
            <a href="contact" class="nav-cta">
                <span class="lang-en">PARTNER WITH US</span>
                <span class="lang-bn">আমাদের সাথে যুক্ত হোন</span>
            </a>
        </div>
    </header>

    <!-- Mobile Drawer -->
    <div id="mobile-drawer" style="position: fixed; top: 0; right: -100%; width: 80%; height: 100vh; background: var(--clr-surface); backdrop-filter: blur(20px); z-index: 3000; padding: 4rem 2rem; transition: 0.4s ease; border-left: 1px solid var(--border);">
        <div onclick="toggleMobileMenu()" style="position: absolute; top: 1.5rem; right: 2rem; font-size: 1.5rem; cursor: pointer;"><i class="fa fa-times"></i></div>
        <div style="display: flex; flex-direction: column; gap: 2rem; margin-top: 2rem;">
            <a href="index" onclick="toggleMobileMenu()"><span class="lang-en">Home</span><span class="lang-bn">মূলপাতা</span></a>
            <a href="#catalog" onclick="toggleMobileMenu()"><span class="lang-en">Catalog</span><span class="lang-bn">পণ্য তালিকা</span></a>
            <a href="about" onclick="toggleMobileMenu()"><span class="lang-en">About</span><span class="lang-bn">আমাদের সম্পর্কে</span></a>
            <a href="contact" onclick="toggleMobileMenu()"><span class="lang-en">Contact</span><span class="lang-bn">যোগাযোগ</span></a>
        </div>
    </div>

    <script>
        // Toggle Logic
        function toggleMobileMenu() {
            const drawer = document.getElementById('mobile-drawer');
            if (drawer.style.right === '0%') drawer.style.right = '-100%';
            else drawer.style.right = '0%';
        }
        function toggleTheme() {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            setTheme(currentTheme === 'dark' ? 'light' : 'dark');
        }

        function toggleLang() {
            const currentLang = document.documentElement.getAttribute('data-lang');
            setLang(currentLang === 'en' ? 'bn' : 'en');
        }

        // Header Scroll
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) navbar.classList.add('scrolled');
            else navbar.classList.remove('scrolled');
        });
    </script>