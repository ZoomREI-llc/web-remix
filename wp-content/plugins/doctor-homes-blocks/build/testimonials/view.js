/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./src/testimonials/view.js ***!
  \**********************************/
// import gsap from "gsap";
// import { ScrollToPlugin } from "gsap/ScrollToPlugin";
//

function lcVirtueCarouselCallback() {
  gsap.registerPlugin(ScrollToPlugin);

  // Function to handle the carousel logic for smaller screens
  const initializeCarousel = () => {
    const track = document.querySelector(".carousel-container");
    const slides = Array.from(track.children);
    const dotsNavs = document.querySelectorAll(".carousel-dots");
    const prevBtns = document.querySelectorAll(".carousel-prev");
    const nextBtns = document.querySelectorAll(".carousel-next");
    let currentSlideIndex = 0;
    let isScrolling = false; // Flag to prevent double-triggering

    track.scrollTo(0, 0);
    // Function to manually calculate slide positions and handle resize
    const setSlidePositions = () => {
      updateDots(-1, currentSlideIndex); // Initialize dots correctly
    };
    slides[0].classList.add('active');
    const updateDots = (currentIndex, targetIndex) => {
      dotsNavs.forEach(function (dotsNav) {
        let dots = Array.from(dotsNav.children);
        if (dots[targetIndex]) {
          dots[currentIndex]?.classList.remove("active");
          dots[targetIndex].classList.add("active");
        }
      });
    };
    const moveToSlide = targetIndex => {
      const slideWidth = slides[0].getBoundingClientRect().width;
      const targetSlide = slides[targetIndex];
      const targetPosition = targetSlide.offsetLeft - (track.parentElement.getBoundingClientRect().width - slideWidth) / 2;
      isScrolling = true; // Set flag to prevent scroll-triggered updates

      if (targetIndex === 0) {
        prevBtns.forEach(function (prevBtn) {
          prevBtn.disabled = true;
        });
      } else {
        prevBtns.forEach(function (prevBtn) {
          prevBtn.disabled = false;
        });
      }
      if (targetIndex < slides.length - 1) {
        nextBtns.forEach(function (nextBtn) {
          nextBtn.disabled = false;
        });
      } else {
        nextBtns.forEach(function (nextBtn) {
          nextBtn.disabled = true;
        });
      }
      track.style.overflowX = 'hidden';
      gsap.to(track, {
        scrollTo: {
          x: targetPosition
        },
        duration: 0.6,
        ease: "power2.inOut",
        onComplete: () => {
          setTimeout(function () {
            track.style.overflowX = 'auto';
            isScrolling = false; // Reset flag after animation completes
          }, 50);
        }
      });
      updateDots(currentSlideIndex, targetIndex);
      currentSlideIndex = targetIndex;
      slides.forEach(item => item.classList.remove('active'));
      targetSlide.classList.add('active');
    };

    // Event listener for dot navigation

    dotsNavs.forEach(function (dotsNav) {
      dotsNav.addEventListener("click", e => {
        const targetDot = e.target.closest("span");
        if (!targetDot) return;
        let dots = Array.from(dotsNav.children);
        const targetIndex = dots.findIndex(dot => dot === targetDot);
        moveToSlide(targetIndex);
      });
    });
    prevBtns.forEach(function (prevBtn) {
      prevBtn.addEventListener("click", e => {
        if (currentSlideIndex - 1 >= 0) {
          moveToSlide(currentSlideIndex - 1);
        }
      });
    });
    nextBtns.forEach(function (nextBtn) {
      nextBtn.addEventListener("click", e => {
        if (currentSlideIndex + 1 < slides.length) {
          moveToSlide(currentSlideIndex + 1);
        }
      });
    });
    let waitForScrollEnd = 0;
    function onScroll() {
      if (isScrolling) return; // Prevents handling the event during slide transition

      clearTimeout(waitForScrollEnd);
      waitForScrollEnd = setTimeout(function () {
        const slideWidth = slides[0].offsetWidth;
        const scrolledIndex = Math.round(track.scrollLeft / slideWidth);
        if (scrolledIndex < slides.length) {
          updateDots(currentSlideIndex, scrolledIndex);
          currentSlideIndex = scrolledIndex;
          moveToSlide(currentSlideIndex);
        }
      }, 15);
    }

    // Sync dots based on scroll position
    track.addEventListener("touchstart", () => {
      isScrolling = true;
    });
    track.addEventListener("touchend", () => {
      isScrolling = false;
      onScroll();
    });
    track.addEventListener("scroll", () => {
      onScroll();
    });

    // Set the initial active dot
    updateDots(-1, 0);

    // Set up slide positions on load and resize
    setSlidePositions();
    window.addEventListener("resize", setSlidePositions);
  };

  // Initialize the carousel logic on page load
  initializeCarousel();

  // Re-check and reinitialize the carousel logic on window resize
  window.addEventListener("resize", () => {
    // Remove any previously added event listeners to avoid duplication
    const track = document.querySelector(".carousel-track");
    track.removeAttribute("style"); // Reset inline styles added previously

    // Reinitialize if the condition is met
    initializeCarousel();
  });
}
document.addEventListener("DOMContentLoaded", function () {
  loadScript(['https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollToPlugin.min.js'], lcVirtueCarouselCallback);
});
/******/ })()
;
//# sourceMappingURL=view.js.map