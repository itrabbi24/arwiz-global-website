<?php
include 'Layout/header.php';
?>

<section class="inner-page">
   <div class="container">
      <div class="row">
         <h1>Contact Us</h1>
      </div>
   </div>
</section> 

<section class="section-inner">
  <div class="container">
    <div class="row">

      <!-- Left Column: Contact Info -->
      <div class="col-md-4 contact-bg-1">
        <div class="contact-info">
          <div class="contact-detail">
            <div class="cont-desc" style="color: #fff;">
              <h3>Head Office</h3>
              <ul>
                <li>
                  <i class="fa fa-map-marker"></i>
                  <strong>Address:</strong> 
                  16-A-B, Bismillah Tower, Jurain Bazar, Shyampur, Dhaka-1204.
                </li>
                <li>
                  <i class="fa fa-phone"></i>
                  <strong>Phone:</strong> 
                  +88 01902-994240, +88 01771-621905
                </li>
                <li>
                  <i class="fa fa-envelope"></i>
                  <strong>Email:</strong> 
                  arwiz.global@gmail.com
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column: Contact Form -->
      <div class="col-md-8 contact-bg-2">
        <div class="contact-form">
          <h1>GET IN TOUCH</h1>
          <form>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="name" placeholder="Full Name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="email" class="form-control" id="email" placeholder="Email Id">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="number" class="form-control" id="phone" placeholder="Mobile">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="subject" placeholder="Subject">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <textarea class="form-control" placeholder="Message" spellcheck="false"></textarea>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <button class="btn btn-lg btnconntact">Submit</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<?php
include 'Layout/footer.php';
?>
