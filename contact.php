<?php
include 'Layout/header.php';
?>

<!-- Inner Page Hero -->
<section class="hero-v2" style="height: 55vh;">
    <div class="hero-inner reveal">
        <div class="hero-bg">
            <img src="img/testi.jpg" alt="Contact Us">
        </div>
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content-v2">
                <div class="glass-pill">
                    <span class="lang-en">RETAIL & WHOLESALE SUPPORT</span>
                    <span class="lang-bn">রিটেইল ও পাইকারি সহায়তা</span>
                </div>
                <h1 style="font-size: clamp(3rem, 6vw, 4.5rem);">
                    <span class="lang-en">Get In <span class="text-grad">Touch.</span></span>
                    <span class="lang-bn">আমাদের সাথে <span class="text-grad">যোগাযোগ করুন।</span></span>
                </h1>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="section">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 4rem;">
            
            <!-- Contact Details -->
            <div class="reveal">
                <div class="glass-pill">
                    <span class="lang-en">CONTACT INFO</span>
                    <span class="lang-bn">যোগাযোগের তথ্য</span>
                </div>
                <h2 style="font-size: 2.5rem; margin-bottom: 2rem;">
                    <span class="lang-en">Head <span class="text-grad">Office.</span></span>
                    <span class="lang-bn">প্রধান <span class="text-grad">কার্যালয়।</span></span>
                </h2>
                <p style="color: var(--clr-text-muted); margin-bottom: 3rem;">
                    <span class="lang-en">Whether you are an individual shopper looking for premium grains or a retail owner interested in bulk supply, our team is ready to assist.</span>
                    <span class="lang-bn">আপনি প্রিমিয়াম শস্য খুঁজছেন এমন একজন খুচরা ক্রেতা হোন বা পাইকারি সরবরাহে আগ্রহী একজন দোকানের মালিক হোন, আমাদের টিম আপনাকে সহায়তায় প্রস্তুত।</span>
                </p>
                
                <div style="display: flex; flex-direction: column; gap: 2rem;">
                    <div style="display: flex; gap: 1.5rem; align-items: flex-start;">
                        <div style="width: 50px; height: 50px; border-radius: 12px; background: var(--clr-surface); display: flex; align-items: center; justify-content: center; color: var(--clr-accent); flex-shrink: 0;">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div>
                            <h4 style="margin-bottom: 0.5rem;"><span class="lang-en">Address</span><span class="lang-bn">ঠিকানা</span></h4>
                            <p style="color: var(--clr-text-muted);">
                                <span class="lang-en">16-A-B, Bismillah Tower, Jurain Bazar, Shyampur, Dhaka-1204</span>
                                <span class="lang-bn">১৬-এ-বি, বিসমিল্লাহ টাওয়ার, জুরাইন বাজার, শ্যামপুর, ঢাকা-১২০৪</span>
                            </p>
                        </div>
                    </div>
                    
                    <div style="display: flex; gap: 1.5rem; align-items: flex-start;">
                        <div style="width: 50px; height: 50px; border-radius: 12px; background: var(--clr-surface); display: flex; align-items: center; justify-content: center; color: var(--clr-accent); flex-shrink: 0;">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div>
                            <h4 style="margin-bottom: 0.5rem;"><span class="lang-en">Phone Numbers</span><span class="lang-bn">ফোন নম্বর সমূহ</span></h4>
                            <p style="color: var(--clr-text-muted);">
                                +88 01902-994240<br>
                                +88 01771-621905
                            </p>
                        </div>
                    </div>
                    
                    <div style="display: flex; gap: 1.5rem; align-items: flex-start;">
                        <div style="width: 50px; height: 50px; border-radius: 12px; background: var(--clr-surface); display: flex; align-items: center; justify-content: center; color: var(--clr-accent); flex-shrink: 0;">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div>
                            <h4 style="margin-bottom: 0.5rem;"><span class="lang-en">Email Info</span><span class="lang-bn">ইমেইল তথ্য</span></h4>
                            <p style="color: var(--clr-text-muted);">arwiz.global@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="bento-item reveal">
                <h3 style="margin-bottom: 2rem;">
                    <span class="lang-en">Send a Store Inquiry</span>
                    <span class="lang-bn">একটি অনুসন্ধান পাঠান</span>
                </h3>
                <form action="#" method="POST">
                    <div class="form-group-v2">
                        <label class="label-v2"><span class="lang-en">Full Name</span><span class="lang-bn">পূর্ণ নাম</span></label>
                        <input type="text" class="input-v2" placeholder="ARG Rabbi" required>
                    </div>
                    <div class="form-group-v2">
                        <label class="label-v2"><span class="lang-en">Message</span><span class="lang-bn">বার্তা</span></label>
                        <textarea class="input-v2" rows="4" placeholder="How can we help?" required></textarea>
                    </div>
                    <button type="submit" class="btn-v2 btn-v2-main" style="width: 100%;">
                        <span class="lang-en">SEND MESSAGE</span>
                        <span class="lang-bn">বার্তা পাঠান</span>
                    </button>
                </form>
            </div>
            
        </div>
    </div>
</section>

<?php
include 'Layout/footer.php';
?>
