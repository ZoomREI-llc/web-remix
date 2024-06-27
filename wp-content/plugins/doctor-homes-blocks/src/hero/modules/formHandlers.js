window.addEventListener('load', (event) => {
	const form = document.querySelector('.hero form');
	if (form) {
		// Your form modification code goes here
		
		// Show the form content after modification
		form.style.opacity = '1';
	}
});

export function handleFormSubmit(event) {
	event.preventDefault();

	const form = event.target;
	const autocompleteField = form.querySelector('input[name="property_address"]');
	const fullNameField = form.querySelector('input[name="full_name"]');
	const emailField = form.querySelector('input[name="email"]');
	const phoneField = form.querySelector('input[name="phone"]');

	const formData = {
		property_address: autocompleteField.value,
		full_name: fullNameField.value,
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

	window.dataLayer.push({ event: "lead", form_data: formData });

	fetch(formConfig.crmWebhookUrl, {
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
			window.location.href = `/page-id-127?phone=${phoneField.value}&email=${emailField.value}&propaddress=${autocompleteField.value}&propcity=${city}&propstate=${stateLong}&propzip=${zipcode}&propcountry=USA`;
		})
		.catch((error) => {
			console.error("Error sending data to webhook:", error);
		});
}
