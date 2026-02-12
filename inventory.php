<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventory - AssetEdge</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="icon" type="image/png" sizes="16x16" href="public/faviconAE-img.jpg">
  
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=location_on" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css" />
  <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css">


</head>

<body>

  <?php
    include('include/header.php');
  ?>

  <section class="breadcrumbs-section">
    <div class="breadcrumb">
      <h1 class="breadcrumb-heading">Properties</h1>
      <a href="index.php">Home</a>
      <span>/</span>
      <span class="current">Inventory </span>
    </div>
  </section>

  <section class="properties-container">

    <aside class="properties-form">
      <h2 class="properties-form__title">Get in Touch</h2>

      <form class="properties-form__box">
        <input type="text" placeholder="Name" required />
        <input type="email" placeholder="Email" required />

        <div class="input-group">

          <input type="tel" id="phone" placeholder="Enter phone number" required>
        </div>

        <textarea placeholder="Message"></textarea>
        <button type="submit">Submit</button>
      </form>
    </aside>

    <!-- RIGHT SIDE : PROPERTIES -->
    <div class="properties-content">

      <!-- TOP BAR -->
      <div class="properties-topbar">

        <!-- LEFT : COUNT -->
        <div class="properties-count">
          <span id="propertyCount">0</span> Properties Found
        </div>

        <!-- RIGHT : VIEW TOGGLE -->
        <div class="properties-view-toggle">
          <button id="gridView" class="active" title="Grid View">
            <svg viewBox="0 0 24 24">
              <rect x="3" y="3" width="7" height="7"></rect>
              <rect x="14" y="3" width="7" height="7"></rect>
              <rect x="3" y="14" width="7" height="7"></rect>
              <rect x="14" y="14" width="7" height="7"></rect>
            </svg>
          </button>

          <button id="listView" title="List View">
            <svg viewBox="0 0 24 24">
              <rect x="3" y="4" width="18" height="3"></rect>
              <rect x="3" y="10.5" width="18" height="3"></rect>
              <rect x="3" y="17" width="18" height="3"></rect>
            </svg>
          </button>
        </div>

      </div>


      <!-- PROPERTY LIST -->
      <div class="properties-cards grid-view" id="propertiesWrapper">
        <?php
            $jsonData = file_get_contents('properties.json');
            $properties = json_decode($jsonData, true); // decode as associative array

            // Loop through each property
            foreach ($properties as $id => $prop) {
          ?>
        <a href="inventory-detail.php?property=<?php echo $prop['slug']; ?>" class="properties-card-link">
          <div class="properties-card" data-id="<?php echo $id; ?>">
           <img src="<?php echo htmlspecialchars($prop['image'][0]); ?>" 
     alt="<?php echo htmlspecialchars($prop['title']); ?>" />
            <div class="properties-card__info">
              <h3>
                <?php echo htmlspecialchars($prop['title']); ?>
              </h3>
              <p class="propertycard-location">
                <span class="material-symbols-outlined">location_on</span>
                Gurugram
              </p>
              <div class="area-container">
                <h3>Total Area</h3>
                <span>
                  <?php echo htmlspecialchars($prop['availableArea']); ?> <span class="sq-ft">Sq.Ft.</span>
                </span>
              </div>
              <div class="decription-list">
                <p class="property-descrip">
                  <?php echo substr($prop['description'], 0, 120) . '...'; ?>
                </p>
                <button class="detail-btn view-details">View more</button>
              </div>
            </div>
          </div>
        </a>
        <?php
}
?>


        <!-- <a href="inventory-detail.html" class="properties-card-link">
          <div class="properties-card" data-id="prop-002">

            <img src="public/inventory/property/ucp.jpg" />
            <div class="properties-card__info">
              <h3>Unitech Cyber Park</h3>
              <p class="propertycard-location">
                <span class="material-symbols-outlined">
                  location_on
                </span>
                Gurugram
              </p>
              <div class="area-container">
                <h3>Total Area</h3>
                <span>8,200 <span class="sq-ft">Sq.Ft.</span></span>
              </div>
              <div class="decription-list">
                <p class="property-descrip">
                  A spacious and well-designed residential property offering comfort, convenience, and contemporary
                  living in a sought-after neighborhood.</p>
                <button href="inventory-detail.html" class="detail-btn view-details">View more</button>
              </div>
            </div>
          </div>
        </a>-->

        
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

  <!-- ALL HTML ABOVE -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>

  <script>
    const cards = document.querySelectorAll(".properties-card");
    const countEl = document.getElementById("propertyCount");
    const wrapper = document.getElementById("propertiesWrapper");
    const gridBtn = document.getElementById("gridView");
    const listBtn = document.getElementById("listView");

    // Property Count
    if (countEl) {
      countEl.textContent = cards.length;
    }

    // Grid View
    gridBtn.addEventListener("click", () => {
      wrapper.classList.add("grid-view");
      wrapper.classList.remove("list-view");
      gridBtn.classList.add("active");
      listBtn.classList.remove("active");
    });

    // List View
    listBtn.addEventListener("click", () => {
      wrapper.classList.add("list-view");
      wrapper.classList.remove("grid-view");
      listBtn.classList.add("active");
      gridBtn.classList.remove("active");
    });


    const phoneInput = document.querySelector("#phone");

    window.intlTelInput(phoneInput, {
      initialCountry: "in",
      separateDialCode: true,
      utilsScript:
        "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"
    });

  </script>


  <script src="/script.js"></script>
</body>

</html>