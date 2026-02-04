<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>AssetEdge</title>

    <!-- Global CSS -->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="fonts/flaticon.css" />

    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" type="image/png" sizes="16x16" href="public/faviconAE-img.jpg">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css">
  </head>

  <body>
   
  <?php
    include('include/header.php');
  ?>

 <!-- hero-home section start -->

       <section class="hero-home-sec" id="homehero">
       <div class="home-form">
        <form class="home-form-container" id="homeForm">
        <h2 class="home-form-title">Get in Touch</h2>

    <div class="home-form-group">
        <input type="text" class="home-form-input" id="name" name="name" placeholder="Name" required>
    </div>

    <div class="home-form-group">
        <input type="email" class="home-form-input" id="email" name="email" placeholder="Email" required>
    </div>

    <div class="home-form-group">
        <input type="tel" class="home-form-input" id="phone" name="phone" placeholder="Phone Number" required>
        
    </div>

    <div class="home-form-group">
        <textarea class="home-form-textarea" id="message" name="message" placeholder="Message" required></textarea>
    </div>

    <button type="submit" class="home-form-button">Submit</button>

    <p class="home-form-error" id="formError">Please fill in all fields.</p>
    <p class="home-form-success" id="formSuccess">Form submitted successfully!</p>
    <button type="button" class="home-form-close" onclick="closeForm()">×</button>
        </form>
        </div>
  
        <div class="bg-img-shape">
          <img src="public/bg-shape.png" alt="">
        </div>

      <div class="home-hero-slider">
          <!-- SLIDE 1 – HOME (Your existing content) -->
          <div class="home-hero slide active">
            <div class="home-hero-content">
              <h1>Smart Property Solutions<br>
                <span class="highlight">Asset Excellence</span>
              </h1>
              <p>
                AssetEdge is a trusted real estate advisory focused on office assets nationwide. We help organizations secure high-quality, legally sound workspaces through expert acquisition, leasing, and development services - simplifying complex real estate decisions with clarity and precision.
              </p>

              <div class="home-hero-buttons">
                <a href="inventory.html"><button class="btn-buy">Explore Properties</button></a>
                <button class="btn-rent">Get Started</button>
              </div>
            </div>
            <div class="home-hero-image">
              <img src="public/home/home-hero.jpg" alt="Modern house">
            </div>
          </div>

          <!-- SLIDE 2 – ABOUT US -->
          <div class="home-hero slide">
            <div class="home-hero-content">
              <h1>Who We Are<br>
                <span class="highlight">About AssetEdge</span>
              </h1>
              <p>
                We are a trusted real estate advisory firm offering strategic expertise, deep market intelligence, and tailored property solutions aligned with your business goals.
              </p>
              <div class="home-hero-buttons">
                <a href="about.html"><button class="btn-buy">Learn More</button></a>
                <button class="btn-rent btn-our-story">Our Story</button>
              </div>
            </div>
            <div class="home-hero-image">
              <img src="public/home/about-home.jpg" alt="About us">
            </div>
          </div>

          <!-- SLIDE 3 – INVENTORY -->
          <div class="home-hero slide">
            <div class="home-hero-content">
              <h1>Premium Listings<br>
                <span class="highlight">Our Inventory</span>
              </h1>

              <p>
                Explore our exclusive portfolio of thoughtfully chosen commercial properties built for modern enterprises and smart investors. 
              </p>
              <div class="home-hero-buttons">
                <a href="inventory.html"><button class="btn-buy">View Inventory</button></a>
                <a href="contact.html"><button class="btn-rent">Schedule Visit</button></a>
              </div>
            </div>
            <div class="home-hero-image">
              <img src="public/home/home-hero3.jpg" alt="Inventory">
            </div>
          </div>

          <!-- SLIDE 4 – CONTACT US -->
          <div class="home-hero slide">
            <div class="home-hero-content">
              <h1>Let’s Connect<br>
                <span class="highlight">Contact Us</span>
              </h1>
              <p>
                Have questions or ready to take the next step?
                Our experts are here to guide you with clarity and confidence.
              </p>
              <div class="home-hero-buttons">
                <a href="contact.html"><button class="btn-buy">Contact Now</button></a>
                <button class="btn-rent">Book Consultation</button>
              </div>
            </div>
            <div class="home-hero-image">
              <img src="public/home/home-hero4.jpg" alt="Contact us">
            </div>
          </div>
      </div>

      <div class="pagination-container-home">
      <div class="home-hero-pagination">
      <span class="dot active" data-slide="0"></span>
      <span class="dot" data-slide="1"></span>
      <span class="dot" data-slide="2"></span>
      <span class="dot" data-slide="3"></span>
      </div>
      </div>
      </section>

    <!-- hero home end  -->
     
    <!-- Mandatory property start  -->

     <section class="feature-property-sec">

    <div class="main-heading-container ">
      <h1 class="whychoose-heading">Exclusive Mandated Properties</h1>
    </div>

    <div class="feature-prop-slider-container">
        
        <div class="feature-prop-slider" id="slider">
            
            <div class="feature-prop-card" style="background-image: url('https://i.pinimg.com/1200x/9c/fc/63/9cfc632d2a19ee2d442b73bced0cf7f9.jpg');">
                <div class="feature-prop-content">
                    <h2 class="feature-prop-title">Penthouse View</h2>
                    <p class="feature-prop-description">Premium penthouse with skyline view.</p>
                    <button class="feature-prop-btn">View More &rarr;</button>
                </div>
            </div>

            <div class="feature-prop-card" style="background-image: url('https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80');">
                <div class="feature-prop-content">
                    <h2 class="feature-prop-title">Luxury Residence</h2>
                    <p class="feature-prop-description">Elegant living with premium finishes.</p>
                    <button class="feature-prop-btn">View More &rarr;</button>
                </div>
            </div>

            <div class="feature-prop-card" style="background-image: url('https://sobharealty.com/sites/default/files/styles/webp/public/2025-10/1006x608%20%E2%80%93%2095.jpg.webp?itok=LfjJt-ws');">
                <div class="feature-prop-content">
                    <h2 class="feature-prop-title">Beachside Villa</h2>
                    <p class="feature-prop-description">Luxury villa with ocean views.</p>
                    <button class="feature-prop-btn">View More &rarr;</button>
                </div>
            </div>

            <div class="feature-prop-card" style="background-image: url('https://i.pinimg.com/1200x/07/f5/54/07f55430b864c6a091a7091214724543.jpg');">
                <div class="feature-prop-content">
                    <h2 class="feature-prop-title">Urban Loft</h2>
                    <p class="feature-prop-description">Modern loft in the city center.</p>
                    <button class="feature-prop-btn">View More &rarr;</button>
                </div>
            </div>

            <div class="feature-prop-card" style="background-image: url('https://sobharealty.com/sites/default/files/styles/webp/public/2025-10/1006x608%20%E2%80%93%2095.jpg.webp?itok=LfjJt-ws');">
                <div class="feature-prop-content">
                    <h2 class="feature-prop-title">Modern Tower</h2>
                    <p class="feature-prop-description">Spacious interiors and garden.</p>
                    <button class="feature-prop-btn">View More &rarr;</button>
                </div>
            </div>

            <div class="feature-prop-card" style="background-image: url('https://i.pinimg.com/1200x/07/f5/54/07f55430b864c6a091a7091214724543.jpg');">
                <div class="feature-prop-content">
                    <h2 class="feature-prop-title">Cozy Cottage</h2>
                    <p class="feature-prop-description">Perfect getaway in the woods.</p>
                    <button class="feature-prop-btn">View More &rarr;</button>
                </div>
            </div>

            </div>
        
      
      <div class="feature-prop-buttons">
          <button id="prev"><i class="fa-solid fa-arrow-left"></i></button>
          <button id="next"><i class="fa-solid fa-arrow-right"></i></button>
      </div>
      </div>
     </section>

     <!-- Mandatory property end  -->


     <!-- why choose us section start -->

     <section class="why-choose-us p-sec">
    <div class="main-heading-container ">
      <h1 class="whychoose-heading">Why Choose Us</h1>
    </div>
    <div class="why-choose-us-container">
        <div class="why-choose-us-images-container">
        <div class="why-choose-us-images">
            <div class="why-choose-us-main-img">
                <img src="public/about-us/whychoose-2.jpg " alt="Person holding a card">
            </div>

            <div class="why-choose-us-small-img">
                <img src="public/about-us/whychoose-1.jpg" alt="Person using laptop">
                <div class="why-choose-us-clients">
                    <h3 id="clientCount"></h3></h3>
                    <p>Trusted Clients</p>
                </div>
            </div>

        </div>
        </div>
      
         <div class="why-choose-us-content">
            <p class="why-choose-us-subtitle">About Company</p>
            <h2 class="why-choose-us-title">Your Mandated Property Compliance Partner</h2>

            <p class="why-choose-us-description">
               AssetEdge provides reliable, mandated property compliance and asset management services. We help property owners and businesses meet regulatory requirements while protecting asset value. 
            </p>

            <div class="why-choose-us-features">
                <div class="why-choose-us-feature">
                    <span class="why-choose-us-icon"><img src="public/why-choose-us/Give-Womens-Rights.png" alt=""></span>
                    <div>
                        <h4>Trusted Partner</h4>
                        <p>End-to-end compliance support that ensures your property meets every regulatory requirement-smoothly and stress-free.</p>
                    </div>
                </div>

                <div class="why-choose-us-feature">
                    <span class="why-choose-us-icon"><img src="public/why-choose-us/rating.png" alt=""></span>
                    <div>
                        <h4>Fastpace Platform</h4>
                        <p> A streamlined, efficient approach to property compliance and asset management, designed for speed and simplicity</p>
                    </div>
                </div>

                <div class="why-choose-us-feature">
                    <span class="why-choose-us-icon"><img src="public/why-choose-us/live-chat (1).png" alt=""></span>
                    <div>
                        <h4>Proven Reliability</h4>
                        <p>A seasoned team delivering dependable results and consistent service you can rely on, every step of the way.</p>
                    </div>
                </div>

            </div>
        </div>

     </div>
     </section> 

   <!-- why choose us end  -->

   <!-- Key features section start -->

    <section class="keyfeature-sec p-sec">

      <div class="main-heading-container ">
      <h1 class="whychoose-heading">Key Features</h1>
    </div>

      <div class="feature-container">
        <div class="feature-box">
          <div class="feature-img-icon">
            <img src="public/key-feature/verified.svg" alt="Verified Listings">
          </div>
          <h3>Verified Listings</h3>
          <p class="zfr3Q TMjjoe CDt4Ke">
            All properties are verified by the AsstEdge experts to ensure genuine ownership, accurate pricing, and complete transparency. 
          </p>
        </div>

        <div class="feature-box">
          <div class="feature-img-icon">
            <img src="public/key-feature/regular.svg" alt="Regular Updates">
          </div>
          <h3>Regular Updates</h3>
          <p class="zfr3Q TMjjoe CDt4Ke">
            Property listings are frequently updated with the latest availability and market changes, so you always stay informed. 
          </p>
        </div>

        <div class="feature-box active">
            <div class="feature-img-icon">
            <img src="public/key-feature/easy.svg" alt="Easy Contact Process">
          </div>
          <h3>Easy Access </h3>
          <p>
            Get in touch directly with property owners or agents through a simple, fast, and transparent contact system.
          </p>

        </div>

        <div class="feature-box">
           <div class="feature-img-icon">
            <img src="public/key-feature/high.svg" alt="High-quality Property Details">
           </div>
          <h3>Listing Details</h3>
          <p>
           View detailed descriptions, clear images, and essential specifications to make confident property decisions.
          </p>
        </div>
      </div>
    </section>

<!-- key features end  --> 

<!-- Our Partners section start -->

      <section class="our-partner-section p-sec">
        <div class="our-partner-container">
          <h2 class="our-partner-title">Our Partners</h2>

          <p class="our-partner-subtitle">
          We are grateful to our partners who have collaborated with us in delivering seamless leasing solutions and long-term value.
          </p>
          
        
              <div class="partners-grid-container">
                <ul class="our-partner-grid row our-partner-border reveal">

                  <!-- Always visible (first 6) -->
                  <li class="col-4 col-md-2 our-partner-item">
                    <a href="#"><img src="public/partners/blackngreen.jpg" /></a>
                  </li>
                  <li class="col-4 col-md-2 our-partner-item">
                    <a href="#"><img src="public/partners/cloudnine.jpg" /></a>
                  </li>
                  <li class="col-4 col-md-2 our-partner-item">
                    <a href="#"><img src="public/partners/awfis.jpg" /></a>
                  </li>
                  <li class="col-4 col-md-2 our-partner-item">
                    <a href="#"><img src="public/partners/A&t.jpg" /></a>
                  </li>
                  <li class="col-4 col-md-2 our-partner-item">
                    <a href="#"><img src="public/partners/samsung.jpg" /></a>
                  </li>
                  <li class="col-4 col-md-2 our-partner-item">
                    <a href="#"><img src="public/partners/orange.jpg" /></a>
                  </li>
                  <li class="col-4 col-md-2 our-partner-item">
                <a href="#"
                  ><img src="public/partners/olx.jpg" alt="partner"
                /></a>
              </li>

              <li class="col-4 col-md-2 our-partner-item">
                <a href="#"
                  ><img src="public/partners/cardekho.jpg" alt="partner"
                /></a>
              </li>

              <li class="col-4 col-md-2 our-partner-item">
                <a href="#"
                  ><img src="public/partners/dsv.jpg" alt="partner"
                /></a>
              </li>
              <li class="col-4 col-md-2 our-partner-item">
                <a href="#"
                  ><img src="public/partners/filipkart.jpg" alt="partner"
                /></a>
              </li>

                  

                  <!-- Hidden initially -->
                  <li class="col-4 col-md-2 our-partner-item extra-partners">
                    <a href="#"><img src="public/partners/cocordw.jpg" /></a>
                  </li>
                  <li class="col-4 col-md-2 our-partner-item extra-partners">
                    <a href="#"><img src="public/partners/DE.jpg" /></a>
                  </li>
                  <li class="col-4 col-md-2 our-partner-item extra-partners">
                    <a href="#"><img src="public/partners/dalmia.jpg" /></a>
                  </li>
                  <li class="col-4 col-md-2 our-partner-item extra-partners">
                    <a href="#"><img src="public/partners/tcf.jpg" /></a>
                  </li>
                  <li class="col-4 col-md-2 our-partner-item extra-partners">
                    <a href="#"><img src="public/partners/dew.jpg" /></a>
                  </li>
                  <li class="col-4 col-md-2 our-partner-item extra-partners">
                    <a href="#"><img src="public/partners/coopersurgical.jpg" /></a>
                  </li>
                  <li class="col-4 col-md-2 our-partner-item extra-partners">
                    <a href="#"><img src="public/partners/cars24.jpg" /></a>
                  </li>
                  <li class="col-4 col-md-2 our-partner-item extra-partners">
                    <a href="#"><img src="public/partners/campus.jpg" /></a>
                  </li>
                  <li class="col-4 col-md-2 our-partner-item extra-partners">
                    <a href="#"><img src="public/partners/club-factory.jpg" /></a>
                  </li>
                  <li class="col-4 col-md-2 our-partner-item extra-partners">
                    <a href="#"><img src="public/partners/finner.jpg" /></a>
                  </li>
                  <li class="col-4 col-md-2 our-partner-item extra-partners">
                    <a href="#"><img src="public/partners/micromax.jpg" /></a>
                  </li>
                  <li class="col-4 col-md-2 our-partner-item extra-partners">
                    <a href="#"><img src="public/partners/raymond.jpg" /></a>
                  </li>
                  
              <li class="col-4 col-md-2 our-partner-item">
                <a href="#"
                  ><img src="public/partners/hdfc.jpg" alt="partner"
                /></a>
              </li>
              <li class="col-4 col-md-2 our-partner-item">
                <a href="#"
                  ><img src="public/partners/panasonic.jpg" alt="partner"
                /></a>
              </li>

                </ul>
              </div>

                <!-- View More Button -->
                      <div class="partner-view-con">
    <button class="partner-view-btn" onclick="togglePartners()">
      <span class="btn-text">View More</span>
      
    </button>
  </div>


      </section>
          
<!-- Our Partners  end  -->

<!-- footer -->
  <?php
    include('include/footer.php');
  ?>

<!--footer End-->

<a href="tel:+919773880555" class="floating-call-btn" aria-label="Call Us">
    <i class="fi fi-sr-phone-call"></i>  
  <span class="pulse"></span>
</a>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const reveals = document.querySelectorAll(".reveal");
        const observer = new IntersectionObserver(
          (entries) => {
            entries.forEach((entry) => {
              if (entry.isIntersecting) {
                entry.target.classList.add("active");
              }
            });
          },
          {
            threshold: 0.2, 
          }
        );

        reveals.forEach((elem) => observer.observe(elem));
        
      });

      function togglePartners() {
      const extras = document.querySelectorAll('.extra-partners');
      const btn = document.querySelector('.partner-view-btn');

      const isOpen = extras[0].classList.contains('show');

      extras.forEach(item => {
        item.classList.toggle('show');
      });

      btn.textContent = isOpen ? 'View More' : 'View Less';

    }

  // const hamburger = document.getElementById("hamburger");
  // const menuOverlay = document.getElementById("menuOverlay");

  // hamburger.addEventListener("click", () => {
  //   hamburger.classList.toggle("active");
  //   menuOverlay.classList.toggle("active");
  // });



    </script>
    <!-- Global JS -->
    <script src="script.js"></script>
  </body>

</html>
