import gsap from "gsap";

document.addEventListener("DOMContentLoaded", () => {
	const carouselContainer = document.querySelector(".carousel-container");
	const carousel = document.querySelector(".testimonial-carousel");
	const testimonials = carousel.querySelectorAll(".testimonial");
	const prevButton = document.querySelector(".carousel-prev");
	const nextButton = document.querySelector(".carousel-next");
	const dots = document.querySelectorAll(".carousel-dot");

	let currentIndex = 0;

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
		let offset = (carouselWidth - testimonialWidth) / 2;

		if (window.innerWidth >= 1024) {
			offset = (carouselContainer.clientWidth - testimonialWidth) / 4;
		}

		const translateX = -(currentIndex * (testimonialWidth + 30)) + offset;

		gsap.to(carousel, {
			x: translateX,
			duration: 1,
			ease: "power2.inOut",
		});

		// Disable prev/next buttons at boundaries
		prevButton.disabled = currentIndex === 0;
		nextButton.disabled = currentIndex === testimonials.length - 1;
	}

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

	dots.forEach((dot) => {
		dot.addEventListener("click", () => {
			currentIndex = parseInt(dot.dataset.index, 10);
			updateCarousel();
		});
	});

	updateCarousel(); // Initial call to set up the carousel
});
