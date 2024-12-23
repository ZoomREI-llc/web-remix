// import gsap from "gsap";

function testimonialsCallback() {
	const loadMoreButton = document.querySelector(
		".ao-testimonials__load-more",
	);
	const testimonialsSection = document.querySelector(".ao-testimonials");

	loadMoreButton.addEventListener("click", function () {
		// Use GSAP to animate the expansion
		gsap.to(testimonialsSection, {
			// duration: 0.5, // Duration of the animation in seconds
			// height: "auto", // Change the height to auto for expansion
			// ease: "power2.inOut", // Easing function for smooth animation
			onComplete: () => {
				// Optionally add a class after the animation completes
				testimonialsSection.classList.add("ao-testimonials--expanded");
			},
		});
	});


	const testimoniels = document.querySelectorAll(
		".ao-testimonials__testimonial",
	);
	const btn = document.querySelector(".ao-testimonials__testimonials--btn");

	let flag = 3;
	let amount = 3;

	if (window.innerWidth < 1024) {
		flag = 3;
		amount = 3;
	} else {
		flag = 6;
		amount = 3;
	}

	// default
	testimoniels.forEach((faq, index) => {
		gsap.set(faq, {
			opacity: 0,
			marginBottom: "0%",
			display: "none",
			overflow: "hidden",
			duration: 0.5,
			onComplete: () => {
				faq.style.opacity = 0;
			},
		});

		if (index < flag) {
			gsap.to(faq, {
				opacity: 1,
				marginBottom: "0%",
				display: "flex",
				duration: 0.5,
				onComplete: () => {
					faq.style.opacity = 1;
				},
			});
		} else if (index >= flag && index < flag + amount) {
			gsap.to(faq, {
				// opacity: 0.5,
				opacity: 1,
				// marginBottom: "-20%",
				display: "flex",
				duration: 0.5,
				onComplete: () => {
					faq.style.opacity = 1;
				},
			});
		}
	});

	// click button
	btn.addEventListener("click", () => {
		if (testimoniels.length - flag >= amount) {
			flag += amount;

			if (flag <= testimoniels.length) {
				testimoniels.forEach((faq, index) => {
					if (flag <= amount) {
						gsap.set(faq, {
							opacity: 0,
							marginBottom: "0%",
							display: "none",
							overflow: "hidden",
						});
					}

					if (index < flag) {
						gsap.to(faq, {
							opacity: 1,
							marginBottom: "0%",
							display: "flex",
							duration: 0.5,
							onComplete: () => {
								faq.style.opacity = 1;
							},
						});
					} else if (index >= flag && index < flag + amount) {
						gsap.to(faq, {
							// opacity: 0.5,
							opacity: 1,
							display: "flex",
							// marginBottom: "-20%",
							duration: 0.5,
							onComplete: () => {
								faq.style.opacity = 1;
							},
						});
					}
				});
			} else {
				flag = amount;

				testimoniels.forEach((faq, index) => {
					gsap.set(faq, {
						opacity: 0,
						marginBottom: "0%",
						display: "none",
						overflow: "hidden",
					});
					if (index < flag) {
						gsap.to(faq, {
							opacity: 1,
							marginBottom: "0%",
							display: "flex",
							duration: 0.5,
							onComplete: () => {
								faq.style.opacity = 1;
							},
						});
					} else if (index >= flag && index < flag + amount) {
						gsap.to(faq, {
							// opacity: 0.5,
							opacity: 1,
							// marginBottom: "-20%",
							display: "flex",
							duration: 0.5,
							onComplete: () => {
								faq.style.opacity = 1;
							},
						});
					}
				});
			}
		} else {
			// console.log("flassssg", flag);
			flag += testimoniels.length - flag;

			if (flag <= testimoniels.length) {
				testimoniels.forEach((faq, index) => {
					if (index < flag) {
						gsap.to(faq, {
							opacity: 1,
							marginBottom: "0%",
							display: "flex",
							duration: 0.5,
							onComplete: () => {
								faq.style.opacity = 1;
							},
						});
					} else if (index >= flag && index < flag + amount) {
						gsap.to(faq, {
							// opacity: 0.5,
							opacity: 1,
							display: "flex",
							// marginBottom: "-20%",
							duration: 0.5,
							onComplete: () => {
								faq.style.opacity = 1;
							},
						});
					}
				});
			} else {
				flag = amount;

				testimoniels.forEach((faq, index) => {
					gsap.set(faq, {
						opacity: 0,
						marginBottom: "0%",
						display: "none",
						overflow: "hidden",
					});
					if (index < flag) {
						gsap.to(faq, {
							opacity: 1,
							marginBottom: "0%",
							display: "flex",
							duration: 0.5,
							onComplete: () => {
								faq.style.opacity = 1;
							},
						});
					} else if (index >= flag && index < flag + amount) {
						gsap.to(faq, {
							// opacity: 0.5,
							opacity: 1,
							// marginBottom: "-20%",
							display: "flex",
							duration: 0.5,
							onComplete: () => {
								faq.style.opacity = 1;
							},
						});
					}
				});
			}
			flag = 0;
		}
	});
}

document.addEventListener("DOMContentLoaded", function () {
	loadScript('https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', testimonialsCallback)
});
