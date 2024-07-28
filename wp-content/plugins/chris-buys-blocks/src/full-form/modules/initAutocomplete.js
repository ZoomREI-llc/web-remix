import { handleFormSubmit } from "./formHandlers";
import { formatToPhone, enforceFormat } from "./phoneFormat";

function loadGoogleFonts() {
	const link = document.createElement("link");
	link.href =
		"https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap";
	link.rel = "stylesheet";
	document.head.appendChild(link);
}

// Ensure initAutocomplete is globally accessible
export function initAutocomplete() {
	const form = document.getElementById("cb-lead-form");

	if (!form) {
		console.error("Custom form not found.");
		return;
	}

	const autocompleteField = form.querySelector(
		'input[name="property_address"]',
	);
	const fullNameField = form.querySelector('input[name="full_name"]');
	const emailField = form.querySelector('input[name="email"]');
	const phoneField = form.querySelector('input[name="phone"]');
	const formSubmitBtn = form.querySelector('button[type="submit"]');

	if (
		!autocompleteField ||
		!fullNameField ||
		!emailField ||
		!phoneField ||
		!formSubmitBtn
	) {
		console.error("Required fields not found, skipping form.");
		return;
	}

	// Add phone number format handlers
	phoneField.addEventListener("keydown", enforceFormat);
	phoneField.addEventListener("keyup", formatToPhone);

	let isAddressValid = false;

	// Reset address validity on key strokes
	autocompleteField.addEventListener("input", function () {
		isAddressValid = false;
		autocompleteField.setCustomValidity(""); // Reset custom validity message
	});

	// Prevent form submission on "Enter" keypress until validation passes
	form.addEventListener("keypress", function (event) {
		if (event.key === "Enter" && !autocompleteField.value) {
			event.preventDefault();
		}
	});

	const autocomplete = new google.maps.places.Autocomplete(autocompleteField, {
		types: ["address"],
		componentRestrictions: { country: "us" },
	});

	autocomplete.addListener("place_changed", function () {
		const place = autocomplete.getPlace();

		if (!place.geometry) {
			console.error("No geometry found for the place");
			autocompleteField.classList.add("invalid");
			isAddressValid = false;
			return;
		}

		let streetAddress = "",
			city = "",
			stateShort = "",
			stateLong = "",
			zipcode = "",
			country = "";

		let hasStreetNumber = false;

		for (const component of place.address_components) {
			const componentType = component.types[0];

			switch (componentType) {
				case "street_number":
					streetAddress = component.long_name;
					hasStreetNumber = true;
					break;
				case "route":
					streetAddress += " " + component.long_name;
					break;
				case "locality":
					city = component.long_name;
					break;
				case "administrative_area_level_1":
					stateShort = component.short_name;
					stateLong = component.long_name;
					break;
				case "postal_code":
					zipcode = component.long_name;
					break;
				case "country":
					if (component.short_name === "US") {
						country = "USA";
					}
					break;
			}
		}

		if (!hasStreetNumber) {
			console.error("Selected place does not have a street number");
			autocompleteField.classList.add("invalid");
			isAddressValid = false;
			return;
		}

		autocompleteField.value = `${streetAddress}, ${city}, ${stateShort}, ${country}`;
		if (autocompleteField.value) {
			autocompleteField.classList.remove("invalid");
			autocompleteField.placeholder = "Type Your Property Address";
			isAddressValid = true;
			autocompleteField.setCustomValidity(""); // Clear any previous custom validity message
		}
	});

	// Address field loses focus event
	autocompleteField.addEventListener("blur", function () {
		if (!isAddressValid || !autocompleteField.value) {
			autocompleteField.classList.add("invalid");
			autocompleteField.setCustomValidity(
				"Please use autocomplete to enter a complete property address.",
			); // Set custom validity message
			autocompleteField.reportValidity(); // Trigger native validation UI
		} else {
			autocompleteField.classList.remove("invalid");
			autocompleteField.setCustomValidity(""); // Clear any previous custom validity message
		}
	});

	form.addEventListener("submit", function (event) {
		if (!isAddressValid || !autocompleteField.value) {
			event.preventDefault();
			autocompleteField.setCustomValidity(
				"Please use autocomplete to enter a complete property address.",
			); // Set custom validity message
			autocompleteField.reportValidity(); // Trigger native validation UI
			return;
		}

		handleFormSubmit(event);
	});
}

// Ensure initAutocomplete is globally accessible
window.initAutocomplete = initAutocomplete;
