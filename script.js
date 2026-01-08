/* ===========================
   clcik functions EFFECT
=========================== */

document.addEventListener('DOMContentLoaded', function () {
  const btn = document.querySelector('.btn-our-story');
  const target = document.getElementById('our-story');

  btn.addEventListener('click', function () {
    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
  });
});

   
// our vision
document.addEventListener("DOMContentLoaded", () => {
  const cards = document.querySelectorAll(".about-company-card");

  cards.forEach((card, index) => {
    card.style.opacity = "0";
    card.style.transform = "translateY(30px)";

    setTimeout(() => {
      card.style.transition = "0.6s ease";
      card.style.opacity = "1";
      card.style.transform = "translateY(0)";
    }, index * 200);
  });
});


    /* ===========================
            INVENTORY CARD
       =========================== */
    



 


/* ===========================
   HERO BACKGROUND SLIDER
=========================== */

   
 
  const slides = document.querySelectorAll('.home-hero');
  const dots = document.querySelectorAll('.home-hero-pagination .dot');
  let currentSlide = 0;

  function showSlide(index) {
    slides.forEach(slide => slide.classList.remove('active'));
    dots.forEach(dot => dot.classList.remove('active'));

    slides[index].classList.add('active');
    dots[index].classList.add('active');

    currentSlide = index;
  }

  // Auto slide every 5 seconds
  setInterval(() => {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
  }, 3000);

  // Click pagination
  dots.forEach(dot => {
    dot.addEventListener('click', () => {
      const slideIndex = Number(dot.getAttribute('data-slide'));
      showSlide(slideIndex);
    });
  });


/* ===========================
   CONTACT FORM
=========================== 
*/

const contactForm = document.getElementById("contactForm");

if (contactForm) {
  contactForm.addEventListener("submit", function (e) {
    e.preventDefault();
    alert("Message sent successfully!");
    this.reset();
  });
}

/* ===========================
  Feature Property 
=========================== */

const sliderContainer = document.querySelector('.feature-prop-slider-container');
const cards = document.querySelectorAll('.feature-prop-card');
const nextBtn = document.getElementById('next');
const prevBtn = document.getElementById('prev');

let activeIndex = 0;
let autoSlideInterval;

function updateSlider() {
    // 1. Clear all special classes
    cards.forEach(card => {
        card.classList.remove('active', 'next', 'next-2', 'hidden');
    });

    // 2. Determine indices (Infinite Loop Logic)
    const count = cards.length;
    const i_active = activeIndex % count;
    const i_next = (activeIndex + 1) % count;
    const i_next2 = (activeIndex + 2) % count;

    // 3. Apply classes
    cards[i_active].classList.add('active');
    cards[i_next].classList.add('next');
    cards[i_next2].classList.add('next-2');

    // Hide others
    cards.forEach((card, index) => {
        if (index !== i_active && index !== i_next && index !== i_next2) {
            card.classList.add('hidden');
        }
    });
}

// Next slide
function nextSlide() {
    activeIndex++;
    updateSlider();
}

// Previous slide
function prevSlide() {
    if (activeIndex === 0) {
        activeIndex = cards.length - 1;
    } else {
        activeIndex--;
    }
    updateSlider();
}

// --- Event Listeners ---
nextBtn.addEventListener('click', () => {
    nextSlide();
    resetTimer();
});

prevBtn.addEventListener('click', () => {
    prevSlide();
    resetTimer();
});

// --- Auto Slider Logic ---
function startAutoSlide() {
    autoSlideInterval = setInterval(nextSlide, 3000);
}

function stopAutoSlide() {
    clearInterval(autoSlideInterval);
}

function resetTimer() {
    stopAutoSlide();
    startAutoSlide();
}

// Pause on hover
sliderContainer.addEventListener('mouseenter', stopAutoSlide);
sliderContainer.addEventListener('mouseleave', startAutoSlide);

// Initialize
updateSlider();
startAutoSlide();


/* ===========================
   hamburger button  
=========================== */

 const hamburger = document.querySelector('.hamburger');
  const navMenu = document.querySelector('.navbar ul');

  hamburger.addEventListener('click', () => {
    navMenu.classList.toggle('active');
  });

 /* ===========================
     DRAG SCROLLING
   =========================== */

const scroller = document.getElementById("cardScroller");

if (scroller) {
  let isDown = false;
  let startX;
  let scrollLeft;

  scroller.addEventListener("mousedown", (e) => {
    isDown = true;
    startX = e.pageX - scroller.offsetLeft;
    scrollLeft = scroller.scrollLeft;
  });

  scroller.addEventListener("mouseleave", () => {
    isDown = false;
  });

  scroller.addEventListener("mouseup", () => {
    isDown = false;
  });

  scroller.addEventListener("mousemove", (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - scroller.offsetLeft;
    const walk = (x - startX) * 1.2;
    scroller.scrollLeft = scrollLeft - walk;
  });
} 

// why choose us count

document.addEventListener("DOMContentLoaded", function () {
    const target = 1000;
    const duration = 2000;
    const countElement = document.getElementById('clientCount');
    let started = false; // Prevent re-running

    function startCounting() {
        let current = 0;
        const stepTime = 10;
        const increment = Math.ceil(target / (duration / stepTime));

        function updateCount() {
            current += increment;
            if (current >= target) {
                current = target;
            }
            countElement.textContent = current + "+";

            if (current < target) {
                setTimeout(updateCount, stepTime);
            }
        }

        updateCount();
    }

    // Intersection Observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !started) {
                started = true;
                startCounting();
            }
        });
    }, { threshold: 0.5 }); // Trigger when half of the section is visible

    observer.observe(countElement);
});




/* ===========================
      PROPERTY COUNT
   =========================== */

  const totalProperties = document.querySelectorAll(".property-card").length;
  const countEl = document.getElementById("propertyCount");
  if (countEl) {
    countEl.textContent = `${totalProperties} Properties Found`;
  } 

  /* ===========================
      DISCOVER PROPERTIES (AUTO LOAD)
      ===========================      */

  document.addEventListener("DOMContentLoaded", () => {
    const categories = [
      { name: "Office", icon: "public/discover-properties/apartment.png" },
      { name: "Preleased", icon: "public/discover-properties/villa.png" },
      { name: "Retail", icon: "public/discover-properties/office.png" },
      { name: "Co-working", icon: "public/discover-properties/shop.png" },
      { name: "Sale", icon: "public/discover-properties/house.png" },
      { name: "Warehouse", icon: "public/discover-properties/warehouse.png" }
    ];

    const wrapper = document.getElementById("discoverCategories");

    if (wrapper) {
      wrapper.innerHTML = categories
        .map((c, i) => `
          <div class="discover-item" data-aos="fade-up" data-aos-delay="${i * 100}">
            <a href="/inventory/" class="discover-link">
              <img src="${c.icon}" alt="${c.name}" class="discover-icon">
              <p class="discover-name">${c.name}</p>
              <p class="discover-count">3 Properties</p>
            </a>
          </div>
        `)
        .join("");
    }
  });

  // detail Inventory Page

  /* =========================
   PROPERTY DATA 
========================= */

const propertyData = {
  tag: "Office • Lease",
  title: "The Palam Plaza",
  address: "405 N Wabash Ave<br>Chicago, IL, 60611",
 
  

  images: [
    "public/inventory-detail/img1.jpg",
    "public/inventory-detail/img2.jpg",
    "public/inventory-detail/img3.jpg"
  ],

  description:
    "Now Available for Lease, The Plaza located at 405 N Wabash Ave. Available square footage 2,000 – 5,301 SF.",

  spaces: [
    {
      floor: "1st Floor, Suite 2",
      size: "2,482 SF",
      type: "Lease",
      availability: "Immediate"
    },

    {
      floor: "1st Floor, Suite 1",
      size: "2,000 – 5,301 SF",
      type: "Lease",
      availability: "Immediate"
    }

  ],

  highlights: [
    "Prime downtown location",
    "Riverfront views",
    "High visibility"
  ],

  amenities: [
    "24/7 Access",
    "Parking",
    "Security"
  ]

  };

/* =========================
   HERO CONTENT
========================= */

// document.querySelector(".interoy-detail-tag").innerText = propertyData.tag;
document.querySelector(".interoy-detail-title").innerText = propertyData.title;
document.querySelector(".interoy-detail-address").innerHTML = propertyData.address;


// Add event listener to the button (for inquiry action)
document.querySelector(".inquiry-button").addEventListener("click", function() {
  alert("Inquiry for property made!");
});

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
