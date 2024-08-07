window.addEventListener("load", (event) => {
	const form = document.querySelector("#dh-lead-form");
	if (form) {
		form.style.opacity = "1";
		form.addEventListener("submit", handleFormSubmit);
	}
});

export function handleFormSubmit(event) {
	event.preventDefault();

	const form = event.target;
	const autocompleteField = form.querySelector(
		'input[name="property_address"]',
	);
	const fullNameField = form.querySelector('input[name="full_name"]');
	const emailField = form.querySelector('input[name="email"]');
	const phoneField = form.querySelector('input[name="phone"]');

	const formData = {
		property_address: autocompleteField.value,
		name: fullNameField.value,
		email: emailField.value,
		phone: phoneField.value,
	};

	const utmFields = [
		"utm_source",
		"utm_campaign",
		"utm_medium",
		"utm_term",
		"utm_content",
	];
	utmFields.forEach((field) => {
		const value = form.querySelector(`input[name="${field}"]`).value;
		if (value) {
			formData[field] = value;
		}
	});

	window.dataLayer.push({ event: "dh-lead", form_data: formData });

	console.log("Submitting to WordPress endpoint");
	console.log("Form data:", formData);

	fetch("/wp-json/custom/v1/submit-form", {
		method: "POST",
		headers: {
			"Content-Type": "application/x-www-form-urlencoded",
		},
		body: new URLSearchParams(formData).toString(),
	})
		.then((response) => {
			if (!response.ok) {
				throw new Error("Network response was not ok " + response.statusText);
			}
			return response.json();
		})
		.then((data) => {
			console.log("Response from WordPress endpoint:", data);
			const city = ""; // Extract this from the form or another source
			const stateLong = ""; // Extract this from the form or another source
			const zipcode = ""; // Extract this from the form or another source
			window.location.href = `/step-2?phone=${phoneField.value}&email=${emailField.value}&propaddress=${autocompleteField.value}&propcity=${city}&propstate=${stateLong}&propzip=${zipcode}&propcountry=USA`;
		})
		.catch((error) => {
			console.error("Error sending data to webhook:", error);
		});
}
