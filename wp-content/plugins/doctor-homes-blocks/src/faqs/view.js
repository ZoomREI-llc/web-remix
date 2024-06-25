import gsap from "gsap";

document.addEventListener("DOMContentLoaded", () => {
	const faqs = document.querySelectorAll(".faq-item");

	faqs.forEach((faq) => {
		const question = faq.querySelector(".faq-question");
		const answer = faq.querySelector(".faq-answer");
		const icon = question.querySelector("img");

		// Ensure answers are hidden by default
		gsap.set(answer, {
			height: 0,
			opacity: 0,
			paddingTop: 0,
			paddingBottom: 0,
			overflow: "hidden",
		});

		question.addEventListener("click", () => {
			const isVisible = parseInt(gsap.getProperty(answer, "height")) > 0;

			if (isVisible) {
				gsap.to(answer, {
					height: 0,
					opacity: 0,
					paddingTop: 0,
					paddingBottom: 0,
					duration: 0.5,
					onComplete: () => {
						answer.style.height = "0";
					},
				});
				gsap.to(icon, {
					scaleY: 1,
					duration: 0.5,
				});
			} else {
				answer.style.height = "auto";
				const fullHeight = answer.scrollHeight + 48; // Add padding top and bottom
				gsap.set(answer, {
					height: 0,
					opacity: 0,
					paddingTop: 0,
					paddingBottom: 0,
				});
				gsap.to(answer, {
					height: fullHeight,
					opacity: 1,
					paddingTop: "1.5rem",
					paddingBottom: "1.5rem",
					duration: 0.5,
					onComplete: () => {
						answer.style.height = "auto";
					},
				});
				gsap.to(icon, {
					scaleY: -1,
					duration: 0.5,
				});
			}
		});
	});
});
