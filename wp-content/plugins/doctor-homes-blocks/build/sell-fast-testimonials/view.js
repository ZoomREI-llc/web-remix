/******/ (() => { // webpackBootstrap
/*!********************************************!*\
  !*** ./src/sell-fast-testimonials/view.js ***!
  \********************************************/
// import gsap from "gsap";

function sellFastTestimonialsCallback() {
  const carouselContainer = document.querySelector(".carousel-container");
  const carousel = document.querySelector(".testimonial-carousel");
  const testimonials = carousel.querySelectorAll(".testimonial");
  const prevButton = document.querySelector(".carousel-prev");
  const nextButton = document.querySelector(".carousel-next");
  const dots = document.querySelectorAll(".carousel-dot");
  let currentIndex = 0;
  let isDragging = false;
  let startX;
  let currentX;
  function updateCarousel() {
    testimonials.forEach((testimonial, index) => {
      testimonial.classList.remove("active");
      if (index === currentIndex) {
        testimonial.classList.add("active");
      }
    });
    dots.forEach((dot, index) => {
      dot.classList.remove("active");
      if (index === currentIndex) {
        dot.classList.add("active");
      }
    });
    const carouselWidth = carouselContainer.clientWidth;
    const testimonialWidth = testimonials[currentIndex].clientWidth;
    const gap = 48; // Adjust this value based on your desired gap between slides

    let offset = 0;
    if (window.innerWidth >= 1024) {
      // Calculate the offset for desktop
      const containerWidth = carouselContainer.clientWidth;
      const numVisibleItems = Math.floor(containerWidth / (testimonialWidth + gap));
      const visibleItemsWidth = numVisibleItems * testimonialWidth + (numVisibleItems - 1) * gap;
      offset = (containerWidth - visibleItemsWidth) / 2;
    }

    // For mobile, keep offset 0 as we want the first item to start at the very beginning
    if (currentIndex === 0) {
      offset = 0;
    }
    const translateX = -(currentIndex * (testimonialWidth + gap)) + offset;
    gsap.to(carousel, {
      x: translateX,
      duration: 1,
      ease: "easeInOutExpo"
    });

    // Disable prev/next buttons at boundaries
    prevButton.disabled = currentIndex === 0;
    nextButton.disabled = currentIndex === testimonials.length - 1;
  }
  function handleTouchStart(event) {
    isDragging = true;
    startX = event.touches[0].clientX;
    currentX = startX;
  }
  function handleTouchMove(event) {
    if (!isDragging) {
      return;
    }
    event.preventDefault();
    currentX = event.touches[0].clientX;
  }
  function handleTouchEnd(event) {
    if (!isDragging) {
      return;
    }
    isDragging = false;
    const distance = currentX - startX;
    const threshold = 50; // Adjust this value to set the swipe threshold

    if (Math.abs(distance) >= threshold) {
      if (distance > 0) {
        // Swipe right
        if (currentIndex > 0) {
          currentIndex--;
        }
      } else {
        // Swipe left
        if (currentIndex < testimonials.length - 1) {
          currentIndex++;
        }
      }
      updateCarousel();
    }
  }
  carousel.addEventListener("touchstart", handleTouchStart);
  carousel.addEventListener("touchmove", handleTouchMove);
  carousel.addEventListener("touchend", handleTouchEnd);
  prevButton.addEventListener("click", () => {
    if (currentIndex > 0) {
      currentIndex--;
      updateCarousel();
    }
  });
  nextButton.addEventListener("click", () => {
    if (currentIndex < testimonials.length - 1) {
      currentIndex++;
      updateCarousel();
    }
  });
  dots.forEach(dot => {
    dot.addEventListener("click", () => {
      currentIndex = parseInt(dot.dataset.index, 10);
      updateCarousel();
    });
  });
  updateCarousel(); // Initial call to set up the carousel
}
document.addEventListener("DOMContentLoaded", function () {
  loadScript('https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', sellFastTestimonialsCallback);
});
/******/ })()
;
//# sourceMappingURL=view.js.map