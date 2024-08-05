import { gsap } from "gsap";

document.addEventListener("DOMContentLoaded", () => {
	const form = document.querySelector("#contact-form");
	const successMessage = document.querySelector(".contact-form__success");
	const messageField = form.querySelector('textarea[name="message"]');

	form.addEventListener("submit", async (e) => {
		// Basic validation
		if (messageField.value.trim() === "") {
			messageField.setCustomValidity("Please fill out this field.");
			messageField.reportValidity();
			return;
		} else {
			messageField.setCustomValidity("");
		}

		e.preventDefault();

		// Gather form data
		const formData = {
			firstName: form.querySelector('input[name="first_name"]').value,
			lastName: form.querySelector('input[name="last_name"]').value,
			email: form.querySelector('input[name="email"]').value,
			phoneNumber: form.querySelector('input[name="phone"]').value,
			heardAboutUs: form.querySelector('input[name="contact"]:checked')
				? form.querySelector('input[name="contact"]:checked').value
				: null,
			message: messageField.value,
		};

		try {
			// Send form data to webhook
			const response = await fetch(
				"https://4b24b890-52bc-43cd-a31a-4917523a9b79.mock.pstmn.io",
				{
					method: "POST",
					headers: {
						"Content-Type": "application/json",
					},
					body: JSON.stringify(formData),
				},
			);

			if (response.ok) {
				// Transition to success message
				gsap.to("#contact-form", {
					duration: 0.5,
					opacity: 0,
					onComplete: () => {
						form.style.display = "none";
						gsap.to(".contact-form__success", {
							duration: 0.5,
							display: "flex",
							opacity: 1,
						});
					},
				});
			} else {
				console.error("Failed to submit form:", response.statusText);
			}
		} catch (error) {
			console.error("Error submitting form:", error);
		}
	});
});
