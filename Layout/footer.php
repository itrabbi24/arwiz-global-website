
<!--footer-->
<footer id="contact">
 <div class="footer-info">
   <div class="container">
       <div class="row">
         <div class="col-md-4">
    <div class="footer-fix">
        <div class="logo">
            <a href="index.php">
                <h3>AR WIZ GLOBAL</h3>
            </a>
        </div>
        <p>
            AR WIZ GLOBAL is a trusted name in international trade, specializing in the import and export of quality products across multiple industries. 
            We connect global markets by ensuring timely delivery, competitive pricing, and exceptional customer service for our clients worldwide.
        </p>
    </div>
</div>

        
         <div class="col-md-4">
           <div class="footer-fix fotr-ser">
            <h3 class="footertitle">Information</h3>
             <ul>
                 <li><a href="about.php">About</a></li>
                 <!-- <li><a href="import.php">Import</a></li>
                 <li><a href="export.php">Export</a></li> -->
                
             </ul>
             <ul>
                 
                 <!-- <li><a href="event.php">Recent Event</a></li> -->
                 <!-- <li><a href="gallery.php">Gallery</a></li> -->
                  <li><a href="contact.php">Contact Us</a></li>
             </ul>
           </div>
         </div>
          <div class="col-md-4">
           <div class="footer-fix">
            <h3 class="footertitle">Address Info</h3>
             <ul>
                <li>
                 <i class="fa fa-map-marker"></i>
                 <strong>address</strong> 
                 16-A-B, Bismillah Tower, Jurain Bazar, Shyampur, Dhaka-1204.
                </li>
                <li>
                 <i class="fa fa-phone"></i>
                 <strong>phone</strong>
                 +88 01902-994240, +88 01771-621905
                </li>
                <li>
                 <i class="fa fa-envelope"></i>
                 <strong>email</strong>arwiz.global@gmail.com
                </li>
             </ul>
           </div>
         </div>
     </div>
   </div>
 </div>
<div class="footer-copyright" style="text-align: center;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <p>
                        Copyright © 2025 All Rights Reserved | 
                        Developed by <a style="color: #fff;" href="https://rotexit.com" target="_blank" rel="noopener noreferrer">ROTEXIT</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

   </footer>
        
  <!-- all js here -->

  <!-- jquery latest version -->
  <script src="./js/jquery-1.12.4.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/owl.carousel.min.js"></script>
  <script src="./js/jquery.meanmenu.js"></script>
  <script src="./js/plugins.js"></script>
  <script src="./js/main.js"></script>
  <script src="./js/main-slider-script.js"></script>
  <!--Revolution Slider-->
  <script src="./js/jquery.themepunch.revolution.min.js"></script>
  <script src="./js/jquery.themepunch.tools.min.js"></script>
  <script src="./js/extensions/revolution.extension.actions.min.js"></script>
  <script src="./js/extensions/revolution.extension.carousel.min.js"></script>
  <script src="./js/extensions/revolution.extension.kenburn.min.js"></script>
  <script src="./js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script src="./js/extensions/revolution.extension.migration.min.js"></script>
  <script src="./js/extensions/revolution.extension.navigation.min.js"></script>
  <script src="./js/extensions/revolution.extension.parallax.min.js"></script>
  <script src="./js/extensions/revolution.extension.slideanims.min.js"></script>
  <script src="./js/extensions/revolution.extension.video.min.js"></script>
  <script type="text/javascript">
     $(window).scroll(function(){
        var sticky = $('.sticky'),
            scroll = $(window).scrollTop();

        if (scroll >= 100) sticky.addClass('fixed');
        else sticky.removeClass('fixed');
      });
  </script>

  <script type="text/javascript">
      $(document).ready(function(){
        $("#testimonial-slider").owlCarousel({
            items:1,
            itemsDesktop:[1199,2],
            itemsDesktopSmall:[979,2],
            itemsTablet:[768,2],
            itemsMobile:[600,1],
            pagination:true,
            navigation:false,
            navigationText:["",""],
            slideSpeed:1000,
            autoPlay:true
        });
    });
  </script>
  <script>
   $(document).ready(function(){
       $('.counter-value').each(function(){
           $(this).prop('Counter',0).animate({
               Counter: $(this).text()
           },{
               duration: 3500,
               easing: 'swing',
               step: function (now){
                   $(this).text(Math.ceil(now));
               }
           });
       });
   });
  </script>
  <script type="text/javascript">
    $('.owl-event').owlCarousel({
        loop:true,
        margin:30,
        autoplay:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    })
  </script>    
</body>

</html>