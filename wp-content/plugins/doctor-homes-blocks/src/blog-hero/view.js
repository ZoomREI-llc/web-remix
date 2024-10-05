import gsap from "gsap";
import { Draggable } from "gsap/Draggable";

gsap.registerPlugin(Draggable);

document.addEventListener("DOMContentLoaded", function () {
  let sections = document.querySelectorAll('.blog-hero')

  function initSlider(carouselWrapper, duration = 0.8, autoplayDuration = 2, autoHeight = false) {
    let dots = carouselWrapper.querySelectorAll(".cw-dot");
    let wrap = true;
    let slides = carouselWrapper.querySelectorAll("._carousel-slide");
    let activeSlideIndex = 0
    let prevButton = carouselWrapper.querySelector(".prevButton");
    let nextButton = carouselWrapper.querySelector(".nextButton");
    let heightArr = [];

    slides.forEach((elem, index) => {
      let heightBlock = elem.offsetHeight;
      heightArr.push(heightBlock);
    });

    function isElementVisibleInContainer(element) {
      const elemRect = element.getBoundingClientRect();
      const containerRect = carouselWrapper.getBoundingClientRect();

      return (
        elemRect.left >= containerRect.left &&
        elemRect.right <= containerRect.right
      );
    }

    if(!autoHeight) {
      carouselWrapper.style.height = `${Math.max.apply(null, heightArr)}px`;
    } else {
      carouselWrapper.style.height = `${heightArr[0]}px`;
      setTimeout(function () {
        carouselWrapper.style.transition = `height ${duration}s ease-in-out`;
      }, 100)
    }

    let progressWrap = gsap.utils.wrap(0, 1);
    let numSlides = slides.length;

    gsap.set(slides, {
      xPercent: (i) => i * 100,
    });

    let wrapX = gsap.utils.wrap(-100, (numSlides - 1) * 100);
    let timer = autoplayDuration ? gsap.delayedCall(autoplayDuration, autoPlay) : false;
    let animation = gsap.to(slides, {
      xPercent: "+=" + numSlides * 100,
      duration: 1,
      ease: "none",
      paused: true,
      repeat: -1,
      modifiers: {
        xPercent: wrapX,
      },
    });
    let proxy = document.createElement("div");
    let slideAnimation = gsap.to({}, {});
    let slideWidth = 0;
    let wrapWidth = 0;
    let maxWidth = wrapWidth;
    let widthOneItem = maxWidth / slides.length;
    let prevMW = 0;
    let draggable = new Draggable(proxy, {
      trigger: "._carousel-container",
      inertia: true,
      onPress: updateDraggable,
      onDrag: updateProgress,
      onThrowUpdate: updateProgress,
      snap: {
        x: snapX,
      },
    });

    resize();

    window.addEventListener("resize", resize);

    prevButton.addEventListener("click", function () {
      animateSlides(1);
    });

    nextButton.addEventListener("click", function () {
      animateSlides(-1);
    });

    function updateDraggable() {
      if(timer) {
        timer.restart(true);
      }
      slideAnimation.kill();
      this.update();
    }

    function animateSlides(direction) {
      if(timer) {
        timer.restart(true);
      }
      slideAnimation.kill();
      let x = snapX(gsap.getProperty(proxy, "x") + direction * slideWidth);
      let slideIndex = (((0 - (x / slideWidth)) % numSlides) + numSlides) % numSlides;

      slideAnimation = gsap.to(proxy, {
        x: x,
        duration: duration,
        onUpdate: updateProgress,
      })

      if(autoHeight){
        carouselWrapper.style.height = slides[slideIndex].offsetHeight+'px'
      }
    }

    function autoPlay() {
      if (draggable.isPressed || draggable.isDragging || draggable.isThrowing) {
        timer.restart(true);
      } else {
        animateSlides(-1);
      }
    }

    function updateProgress() {
      animation.progress(progressWrap(gsap.getProperty(proxy, "x") / wrapWidth));
      let prog = Math.abs(gsap.getProperty(proxy, "x"));
      if (prog > maxWidth) {
        prevMW = maxWidth;
        maxWidth += wrapWidth;
      }
      dots.forEach((dot, index) => {
        dot.classList.remove("active");
        if (index === (prog - prevMW) / widthOneItem - 1) {
          dot.classList.add("active");
        }
      });
    }

    function snapX(value) {
      let snapped = gsap.utils.snap(slideWidth, value);
      return wrap
        ? snapped
        : gsap.utils.clamp(-slideWidth * (numSlides - 1), 0, snapped);
    }

    function resize() {
      let norm = gsap.getProperty(proxy, "x") / wrapWidth || 0;

      slideWidth = slides[0].offsetWidth;
      wrapWidth = slideWidth * numSlides;

      wrap ||
      draggable.applyBounds({ minX: -slideWidth * (numSlides - 1), maxX: 0 });

      gsap.set(proxy, {
        x: norm * wrapWidth,
      });

      animateSlides(0);
      if(slideAnimation.progress) {
        slideAnimation.progress(1);
      }
    }
  }
  function dropdown(options) {
    let opts = {
      globalContainer: '',
      containerClass: 'dropdown',
      btnSelector: '.dropdown__btn',
      closeBtnClass: '',
      dropdownSelector: '.dropdown__list',
      timing: 300,
      effect: 'fade',
      closeOnClick: true,
      closeOnClickOutside: true,
    };
    let timing = 300;
    opts = { ...opts, ...options }

    let openTimeout = false;

    function open(e) {
      e.preventDefault();
      let container = e.target.closest('.' + opts.containerClass);
      let thisDropdown = container.querySelector(opts.dropdownSelector);
      if(openTimeout){
        return;
      }
      setTimeout(function () {
        openTimeout = false
      }, 200)
      openTimeout = true
      if(container.classList.contains('is-open')){
        close()
        return;
      }
      if (e.type === 'focusin') {
        container.classList.add('focusin');
      }
      if (e.type !== 'focusin') {
        container.classList.remove('focusin');
      }
      close(container);

      container.classList.add('is-open')
      container.style.zIndex = '4';

      if (opts.effect === 'fade') {
        fadeIn(thisDropdown, timing)
      } else if(opts.effect === 'slide') {
        slideDown(thisDropdown, timing)
      } else {
        console.error('Dropdown plugin: There is no effect called "' + opts.effect + '". Effects: "slide", "fade".')
      }
    }
    function close(dontClose) {
      let dropdownsToClose = document.querySelectorAll('.' + opts.containerClass);

      if (dontClose) {
        dropdownsToClose = Array.from(dropdownsToClose).filter(item => item !== dontClose);
      }

      if(!dropdownsToClose.length) {
        return;
      }

      dropdownsToClose.forEach(function (dropdownToClose) {
        if(!dropdownToClose.classList.contains('is-open')){
          return;
        }
        dropdownToClose.classList.remove('is-open')
        dropdownToClose.querySelectorAll('li').forEach(item => item.classList.remove('hover'))
        dropdownToClose.style.zIndex = ''
        if (opts.effect === 'fade') {
          fadeOut(dropdownToClose.querySelector(opts.dropdownSelector), timing)
        } else if(opts.effect === 'slide') {
          slideUp(dropdownToClose.querySelector(opts.dropdownSelector), timing)
        } else {
          console.error('Dropdown plugin: There is no effect called "' + opts.effect + '". Effects: "slide", "fade".')
        }
      })
    }


    if(opts.closeOnClickOutside) {
      document.addEventListener('click', function (e) {
        let thisEl = e.target;
        if (opts.closeBtnClass ? thisEl.classList.contains(opts.closeBtnClass) : false) {
          close();
        }
        if (!thisEl.classList.contains(opts.containerClass) && !thisEl.closest('.' + opts.containerClass)) {
          close();
        }
      })
    }
    dynamicListener('click', opts.globalContainer + ' .' + opts.containerClass + ' ' + opts.btnSelector, open)
    dynamicListener('focusin', opts.globalContainer + ' .' + opts.containerClass + ' ' + opts.btnSelector, open);
    dynamicListener('focusout', opts.globalContainer + ' .' + opts.containerClass + ' ' + opts.btnSelector, function (e) {
      e.target.closest('.' + opts.containerClass).classList.remove('focusin');
      close(e.target.closest('.' + opts.containerClass));
    });

    if (opts.timing !== false) {
      timing = opts.timing;
    }
    if (opts.containerClass === 'select') {
      timing = 0;
    }
    if (opts.closeOnClick) {
      dynamicListener('click', opts.globalContainer + ' .' + opts.containerClass + ' ' + opts.dropdownSelector, function (e) {
        if (!e.target.closest('.' + opts.containerClass).classList.contains('checkbox')) {
          close();
        }
      });
    }
  }

  sections.forEach(function (section) {
    let slider = section.querySelector('._carousel-wrapper')

    initSlider(slider, 0.8, false, true)
  })
});
