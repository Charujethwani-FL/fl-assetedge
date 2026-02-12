<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact - AssetEdge</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="16x16" href="public/faviconAE-img.jpg">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css">
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css"/>
  </head> 
<body>

   <header class="main-header">
    <div class="main-header-container">
      <div class="logo">
        <img src="public/logo-img.jpg" alt="Asset Edge Logo">
      </div>

      <nav class="navbar">
        <ul>
          <li><a href="index.php" >Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="inventory.php">Inventory</a></li>
          <li><a href="contact.php" class="active">Contact Us</a></li>
        </ul>
        </nav>
      </div>
      </header>

  <section class="breadcrumbs-section">
    <div class="breadcrumb">
      <h1 class="breadcrumb-heading">Contact Us</h1>
    <a href="index.php">Home</a>
    <span>/</span>
    <span class="current">Contact Us</span>
    </div>
  </section>

  <section class="contact-section p-sec">
    <div class="arrow-img-contactus"
    ><img src="public/contact/arrow-img.png" alt="">
  </div>
    <!-- <div class="bg-image-right">
          <img src="public/inventory/Deco-contact-2.png" alt="">
        </div> -->
  
  <div class="form-contactus-container">
    <div class="contactus-container">
      

      <!-- LEFT SIDE (FORM) -->
      <div class="form-container">
        <p class="form-subtitle">Contact Us</p>
        <h2 class="form-title">Let’s Help You Lease the Right Property</h2>
        <p class="desc">
          Share your requirements with us and we’ll guide you through available properties, pricing, and next steps.
        </p>

        <form  class="contact-form" id="contactForm" >
          <div class="row">
            <div class="input-group">
              <label>First Name</label>
              <input type="text" id="firstName" placeholder="First name" required>
            </div>

            <div class="input-group">
              <label>Last Name</label>
              <input type="text" id="lastName" placeholder="Last name" required>
            </div>
          </div>

          <div class="row">
            <div class="input-group">
              <label>Email Address</label>
              <input type="email" id="email" placeholder="Email address" required>
            </div>

            <div class="input-group">
                <label>Phone Number</label>
              <input type="tel" id="phone" placeholder="Enter phone number" required>
            </div>
           </div>

          <div class="input-group">
            <label>Message</label>
            <textarea rows="5" id="message" placeholder="Leave us Message" required></textarea>
          </div>

          <button type="submit" class="btn">Send Message</button>
        </form>
      </div>

      <!-- RIGHT SIDE (IMAGE + CONTACT INFO) -->
      <div class="info-container">
        <div class="image-box">
          <img src="public/contact/contact-form-img.jpg" alt="Person using phone">
        </div>

        <div class="contact-card">
          <div class="contact-item">
            <div class="contact-icon"><i class="fa-regular fa-envelope" style=" color:#006599; font-size: 18px;"></i></div>
            <div>
              <h4>Email</h4>
              <p>info@assetedge.in</p>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-icon" ><i class=" fa-light fa-phone" style=" color:#006599; font-size:22px;"></i></div>
            <div>
              <h4>Phone</h4>
              <p>91233 24921</p>
            </div>
          </div>
          
          </div>
      

      </div>

    </div>
    </div>

  <div class="contact-location">
    <div id="location">
      <h2>Location</h2>
      <div class="map-container">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.500692723456!2d77.08127907549573!3d28.494579975740386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d193f4031351d%3A0x43b2320634a39e68!2sSauch%20Tower!5e0!3m2!1sen!2sin!4v1768827953843!5m2!1sen!2sin" 
          loading="lazy">
        </iframe>
      </div>
    </div>
  </div>
  </section>

  <!-- footer -->
    <?php
      include('include/footer.php');
    ?>

  <!--footer End-->

  <a href="tel:+919773880555" class="floating-call-btn" aria-label="Call Us">
      <i class="fi fi-sr-phone-call"></i>  
    <span class="pulse"></span>
  </a>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>

  <script>
    const phoneInput = document.querySelector("#phone");

    window.intlTelInput(phoneInput, {
      initialCountry: "in",  
      separateDialCode: true,
      utilsScript:
        "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"
    });
  </script>

  <script src="script.js"></script>
</body>
</html>
