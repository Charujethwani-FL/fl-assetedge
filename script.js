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

function closeForm() {
    const form = document.querySelector('.home-form-container');
    form.classList.add('home-form-hide');

    // Optional: fully remove after animation
    setTimeout(() => {
        form.style.display = 'none';
    }, 600);
}

window.addEventListener("scroll", function () {
  const header = document.querySelector(".main-header");

  if (window.scrollY > 50) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }
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

 // Grab elements
const hamburger = document.getElementById("hamburger");
const menuOverlay = document.getElementById("menuOverlay");
const closeMenu = document.getElementById("closeMenu");
const menuLinks = document.querySelectorAll(".menu-overlay a");

// Function to toggle menu
function toggleMenu() {
  hamburger.classList.toggle("active");     // toggle cross
  menuOverlay.classList.toggle("active");   // toggle overlay
}

// Click hamburger
hamburger.addEventListener("click", toggleMenu);

// Close overlay
closeMenu.addEventListener("click", () => {
  menuOverlay.classList.remove("active");
});

// Close overlay when clicking any menu link
menuLinks.forEach(link => {
  link.addEventListener("click", () => {
    hamburger.classList.remove("active");   // reset cross
    menuOverlay.classList.remove("active"); // hide overlay
  });

  

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

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !started) {
                started = true;
                startCounting();
            }
        });
    }, { threshold: 0.5 }); 

    observer.observe(countElement);
});


/* ===========================
      pop up form 
   =========================== */

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



/* ===========================
      PROPERTY COUNT
   =========================== */

  const totalProperties = document.querySelectorAll(".property-card").length;
  const countEl = document.getElementById("propertyCount");
  if (countEl) {
    countEl.textContent = `${totalProperties} Properties Found`;
  } 

  

    /* ===========================
     Privacy policy
     ===========================      */


  document.addEventListener("DOMContentLoaded", () => {
  console.log("SCRIPT LOADED");

  const tabs = document.querySelectorAll(".tp-tab");
  const contents = document.querySelectorAll(".tp-content");
  const indicator = document.querySelector(".tp-indicator");

  if (!tabs.length || !contents.length || !indicator) {
    console.error("Missing elements", { tabs, contents, indicator });
    return;
  }

  tabs.forEach((tab, index) => {
    tab.addEventListener("click", () => {
      tabs.forEach(t => t.classList.remove("active"));
      contents.forEach(c => c.classList.remove("active"));

      tab.classList.add("active");
      document.getElementById(tab.dataset.tab).classList.add("active");

      indicator.style.transform = `translateX(${index * 180}px)`;

    });

  });

});

