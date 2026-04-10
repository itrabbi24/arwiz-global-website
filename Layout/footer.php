    <footer class="fat-footer section reveal">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <img src="./img/logo.png" alt="ARWIZ Global" style="height: 35px; margin-bottom: 2rem;">
                    <p style="color: var(--clr-text-muted); font-size: 0.95rem; margin-bottom: 2rem;">
                        <span class="lang-en">ARWIZ Global provides signature agricultural quality from the farm directly to your neighborhood. Reliable retail and wholesale distribution.</span>
                        <span class="lang-bn">আরউইজ গ্লোবাল সরাসরি খামার থেকে আপনার প্রতিবেশে সিগনেচার কৃষি পণ্য পৌঁছে দেয়। নির্ভরযোগ্য রিটেইল এবং পাইকারি ডিস্ট্রিবিউশন।</span>
                    </p>
                    <div style="display: flex; gap: 1rem;">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>
                        <span class="lang-en">Quick Links</span>
                        <span class="lang-bn">দ্রুত লিংক</span>
                    </h4>
                    <ul>
                        <li><a href="index"><span class="lang-en">Home</span><span class="lang-bn">মূলপাতা</span></a></li>
                        <li><a href="index#catalog"><span class="lang-en">Catalog</span><span class="lang-bn">পণ্য তালিকা</span></a></li>
                        <li><a href="about"><span class="lang-en">Our Story</span><span class="lang-bn">আমাদের গল্প</span></a></li>
                        <li><a href="contact"><span class="lang-en">Contact</span><span class="lang-bn">যোগাযোগ</span></a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>
                        <span class="lang-en">Partnerships</span>
                        <span class="lang-bn">পার্টনারশিপ</span>
                    </h4>
                    <ul>
                        <li><a href="contact"><span class="lang-en">Bulk Inquiry</span><span class="lang-bn">পাইকারি অনুসন্ধান</span></a></li>
                        <li><a href="contact"><span class="lang-en">Distributor Portal</span><span class="lang-bn">ডিস্ট্রিবিউটর পোর্টাল</span></a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>
                        <span class="lang-en">Head Office</span>
                        <span class="lang-bn">প্রধান কার্যালয়</span>
                    </h4>
                    <p style="color: var(--clr-text-muted); font-size: 0.9rem; line-height: 1.8;">
                        <i class="fa fa-map-marker" style="color: var(--clr-accent); margin-right: 0.5rem;"></i>
                        <span class="lang-en">16-A-B, Bismillah Tower, Jurain Bazar, Shyampur, Dhaka-1204</span>
                        <span class="lang-bn">১৬-এ-বি, বিসমিল্লাহ টাওয়ার, জুরাইন বাজার, শ্যামপুর, ঢাকা-১২০৪</span><br>
                        
                        <i class="fa fa-phone" style="color: var(--clr-accent); margin-right: 0.5rem;"></i>
                        +88 01902-994240, +88 01771-621905<br>
                        
                        <i class="fa fa-envelope" style="color: var(--clr-accent); margin-right: 0.5rem;"></i>
                        arwiz.global@gmail.com
                    </p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>
                    <span class="lang-en">&copy; 2025 ARWIZ Global. All Rights Reserved.</span>
                    <span class="lang-bn">&copy; ২০২৫ আরউইজ গ্লোবাল। সর্বস্বত্ব সংরক্ষিত।</span>
                </p>
                <div class="dev-credit">
                    <span class="lang-en">Developed by</span><span class="lang-bn">তৈরি করেছেন</span>
                    <a href="https://github.com/itrabbi24" target="_blank">ARG RABBI</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- all js here -->
    <script src="./js/jquery-1.12.4.min.js"></script>
    <script src="./js/main.js"></script>
    
    <script>
        // Scroll Reveal Animation
        const observerOptions = { threshold: 0.1 };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) entry.target.classList.add('active');
            });
        }, observerOptions);
        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
    </script>
</body>

</html>