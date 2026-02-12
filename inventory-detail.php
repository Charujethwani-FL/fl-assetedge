<?php
  $jsonData = file_get_contents('properties.json');
  $properties = json_decode($jsonData, true);
  $slug = $_GET['property'] ?? null;
  $property = null;
  foreach ($properties as $id => $prop) {
      if ($prop['slug'] === $slug) {
          $property = $prop;
          break;
      }
  }
  
  if (!$property) {
      echo "<h1>Property not found!</h1>";
      exit;
  }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AssetEdge</title>

  <!-- Global CSS -->
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="fonts/flaticon.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet" />
  <link rel="icon" type="image/png" sizes="16x16" href="public/faviconAE-img.jpg">
  <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css">


</head>

<body>

 <header class="main-header ">
    <div class="main-header-container">
      <div class="logo">
        <img src="public/logo-img.jpg" alt="Asset Edge Logo">
      </div>

      <nav class="navbar">
        <ul>
          <li><a href="index.php" >Home</a></li>
          <li><a href="about.php" class="active">About Us</a></li>
          <li><a href="inventory.php">Inventory</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </nav>
    </div>
  </header>

 <section class="interoy-detail-hero">
  <div class="interoy-detail-slider">
    <?php foreach ($property['images-hero'] as $index => $image): ?>
      <img 
        src="<?php echo htmlspecialchars($image); ?>" 
        class="interoy-detail-slide <?php echo $index === 0 ? 'active first-child' : ''; ?>" 
        alt="Property Image <?php echo $index + 1; ?>"
      />
    <?php endforeach; ?>
  </div>
</section>


  <!-- HERO OVERLAY BOX (between sections) -->
  <div class="interoy-detail-hero-box">
    <div class="left-container">
      <!-- <span class="interoy-detail-tag"></span> -->
      <h1 class="interoy-detail-title"><?php echo htmlspecialchars($property['title']); ?></h1>
      <p class="interoy-detail-address"><?php echo htmlspecialchars($property['address']); ?></p>
         <p class="interoy-detail-area area-container">
    Total Area: <?php echo htmlspecialchars($property['availableArea']); ?> <span class="sq-ft">Sq.Ft.</span>
                </span>
  </p>
    </div>
    <div class="right-container">
      <div class="space-property">
      </div>
      <button class="inquiry-button" id="openPropertyDetailPopup">Make an inquiry for property</button>
      <img src="public/inventory/property/bg-box.png" alt="Background graphic" />
    </div>
  </div>

  <!-- CONTENT -->
  <section class="interoy-detail-content">


    <!-- SIDEBAR -->
    <aside class="interoy-detail-sidebar">
      <ul>
        <li><a href="#description">Description</a></li>
        <li><a href="#space-details">Space details</a></li>
        <li><a href="#highlights">Highlights</a></li>
        <li><a href="#amenities">Amenities</a></li>
        <li><a href="#location">Location</a></li>
        <li><a href="#floor-plan">Floor plan</a></li>
        <!-- <li><a href="#brochures">Brochures</a></li>
      <li><a href="#brokers">Brokers</a></li>
      <li><a href="#inquiry">Make an inquiry</a></li> -->
      </ul>
    </aside>


    <!-- DETAILS -->
    <div class="interoy-detail-sections">
      <div id="description">
        <h2>About Property</h2>
        <p class="js-description"><?php echo htmlspecialchars($property['description']); ?></p>
      </div>
      <br>
      <div id="space-details">
        <h2>Space details</h2>
        <table class="interoy-detail-table">
          <thead>
            <tr>
              <th>Area</th>
              <th>Floor</th>
              <th>Availability</th>
              <th>Rent/ Sq.Ft</th>
            </tr>
          </thead>
          <tbody class="js-space-rows">
            <?php foreach ($property['space-rows'] as $space): ?>
                <tr>
                  <td><?php echo htmlspecialchars($space['area']); ?></td>
                   <td class="link-cell">
                    <a href="contact.php?floor=<?php echo urlencode($space['floor']); ?>">
                      <?php echo htmlspecialchars($space['floor']); ?>
                    </a>
                  </td>
                  <td><?php echo htmlspecialchars($space['availability']); ?></td>
                  <td class="link-cell">
                  <a href="contact.php?rent=<?php echo urlencode($space['rent-sq-ft']); ?>">
                    <?php echo htmlspecialchars($space['rent-sq-ft']); ?>
                  </a>
                </td>
                </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <br>
      <div class="high-amentity">
        <div id="highlights">
          <h2>Highlights</h2>
          <ul class="js-highlights">
            <?php foreach ($property['highlights'] as $highlight): ?>
                <li><?php echo htmlspecialchars($highlight); ?></li>
            <?php endforeach; ?>
          </ul>
        </div>

        <div class="amenities-style" id="amenities">
          <h2>Amenities</h2>
          <ul class="js-amenities">
            <?php foreach ($property['amenities'] as $amenity): ?>
                <li><?php echo htmlspecialchars($amenity); ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
      <br>

        <!-- Location -->
   
    <div id="location">
      <h2>Location</h2>
      <div class="map-container">
         <iframe 
            src="<?php echo htmlspecialchars($property['location-URL'][0]); ?>&output=embed" 
            loading="lazy">
        </iframe>
      </div>
    </div>
    <br>
   

    <!-- Floor Plan -->
   
    <!-- <div id="floor-plan">
        <h2>Floor Plan</h2>
        <div class="floor-image">
            <img 
                src="<?php echo htmlspecialchars($property['floorplan-image'][0]); ?>" 
                alt="Floor Plan Preview"
            >
        </div>
    </div> -->
   

    </div>
  </section>

  <!-- PROPERTY POPUP -->
  <div class="propertypopup-overlay" id="propertyPopupOverlay">
    <div class="propertypopup">
      <button class="propertypopup-close" id="closePropertyPopup" type="button">
        &times;
      </button>

      <h2>Property Inquiry</h2>
      <form>
        <input type="text" placeholder="Name" required />
         <input type="text" placeholder=" Company Name" required />
        <input type="email" placeholder="Email" required />
        <input type="tel" placeholder="Phone Number" />
        <textarea placeholder="Message"></textarea>
        <button type="submit">Submit Inquiry</button>
      </form>
    </div>
  </div>



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
    const interoyHeroSlider = {
  slides: document.querySelectorAll(".interoy-detail-slide"),
  index: 0,

  init() {
    if (this.slides.length === 0) return;

    setInterval(() => this.next(), 4000);
  },

  next() {
    this.slides[this.index].classList.remove("active");
    this.index = (this.index + 1) % this.slides.length;
    this.slides[this.index].classList.add("active");
  }
};

interoyHeroSlider.init();


    (function () {
      document.addEventListener('DOMContentLoaded', function () {
        const openBtn = document.getElementById('openPropertyDetailPopup');
        const popupOverlay = document.getElementById('propertyPopupOverlay');
        const closeBtn = document.getElementById('closePropertyPopup');

        if (!openBtn || !popupOverlay || !closeBtn) return;


        openBtn.addEventListener('click', function (e) {
          e.preventDefault();
          popupOverlay.style.display = 'flex';

          setTimeout(() => popupOverlay.classList.add('show'), 10);
        });


        closeBtn.addEventListener('click', function (e) {
          e.stopPropagation();
          popupOverlay.classList.remove('show');
          setTimeout(() => popupOverlay.style.display = 'none', 250);
        });


        popupOverlay.addEventListener('click', function (e) {
          if (e.target === popupOverlay) {
            popupOverlay.classList.remove('show');
            setTimeout(() => popupOverlay.style.display = 'none', 250);
          }
        });
      });
    })();

    
  </script>

  <script src="script.js"></script>

  <!-- <script>
    // detail Inventory Page

    /* =========================
        PROPERTY DATA 
      ========================= */

    (function () {
      document.addEventListener('DOMContentLoaded', function () {
        const openBtn = document.getElementById('openPropertyDetailPopup');
        const popupOverlay = document.getElementById('propertyPopupOverlay');
        const closeBtn = document.getElementById('closePropertyPopup');

        if (!openBtn || !popupOverlay || !closeBtn) return;


        openBtn.addEventListener('click', function (e) {
          e.preventDefault();
          popupOverlay.style.display = 'flex';

          setTimeout(() => popupOverlay.classList.add('show'), 10);
        });


        closeBtn.addEventListener('click', function (e) {
          e.stopPropagation();
          popupOverlay.classList.remove('show');
          setTimeout(() => popupOverlay.style.display = 'none', 250);
        });


        popupOverlay.addEventListener('click', function (e) {
          if (e.target === popupOverlay) {
            popupOverlay.classList.remove('show');
            setTimeout(() => popupOverlay.style.display = 'none', 250);
          }
        });
      });
    })();

    
     
    /* =========================
      HERO CONTENT
    ========================= */

    // document.querySelector(".interoy-detail-tag").innerText = propertyData.tag;
    document.querySelector(".interoy-detail-title").innerText = propertyData.title;
    document.querySelector(".interoy-detail-address").innerHTML = propertyData.address;


    /* =========================
        HERO SLIDER
      ========================= */

    const interoyHeroSlider = {
      slides: document.querySelectorAll(".interoy-detail-slide"),
      index: 0,

      init(images) {
        this.slides.forEach((slide, i) => {
          slide.src = images[i];
        });

        setInterval(() => this.next(), 4000);
      },

      next() {
        this.slides[this.index].classList.remove("active");
        this.index = (this.index + 1) % this.slides.length;
        this.slides[this.index].classList.add("active");
      }
    };

    interoyHeroSlider.init(propertyData.images);

    /* =========================
      DESCRIPTION
    ========================= */

    document.querySelector(".js-description").innerText =
      propertyData.description;

    /* =========================
      SPACE DETAILS
    ========================= */

    const spaceTable = document.querySelector(".js-space-rows");

    propertyData.spaces.forEach(space => {
      spaceTable.innerHTML += `
        <tr>
          <td>${space.floor}</td>
          <td>${space.size}</td>
          <td>${space.type}</td>
          <td>${space.availability}</td>
        </tr>
      `;
    });

    /* =========================
       HIGHLIGHTS
    ========================= */

    const highlightsList = document.querySelector(".js-highlights");
    propertyData.highlights.forEach(item => {
      highlightsList.innerHTML += `<li>${item}</li>`;
    });

    /* =========================
       AMENITIES
    ========================= */

    const amenitiesList = document.querySelector(".js-amenities");
    propertyData.amenities.forEach(item => {
      amenitiesList.innerHTML += `<li>${item}</li>`;
    });


    /* =========================
         LOCATION
       ========================= */

    const locationInfo = document.querySelector(".js-location");
    locationInfo.innerHTML = propertyData.location;  // You can replace this with dynamic data if available

    /* =========================
         MAP 
       ========================= */

    const map = document.querySelector(".js-map");
    map.src = propertyData.mapUrl;  // Set the dynamic map URL (Google Maps or custom)

    /* =========================
       TRANSPORTATION OPTIONS
    ========================= */

    const transportList = document.querySelector(".js-transport");
    propertyData.transportOptions.forEach(item => {
      transportList.innerHTML += `<li>${item}</li>`;
    });

    /* =========================
        FLOOR PLAN
       ========================= */

    const floorPlanImage = document.querySelector(".js-floor-plan");
    floorPlanImage.src = propertyData.floorPlanUrl;


  </script> -->


</body>

</html>