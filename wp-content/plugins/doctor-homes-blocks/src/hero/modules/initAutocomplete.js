import { handleFormSubmit } from "./formHandlers";
import { formatToPhone, enforceFormat } from "./phoneFormat";
import {
	hideInitialFields,
	showAdditionalFields,
	handleInvalidAddress,
	resetBorderColor,
} from "./gsapAnimations";

// Ensure initAutocomplete is globally accessible
export function initAutocomplete() {
	const form = document.getElementById("lead-form");

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
	const formBtnNext = form.querySelector("#form-btn-next");
	const formSubmitBtn = form.querySelector('button[type="submit"]');

	if (
		!autocompleteField ||
		!fullNameField ||
		!emailField ||
		!phoneField ||
		!formBtnNext ||
		!formSubmitBtn
	) {
		console.error("Required fields not found, skipping form.");
		return;
	}

	// Add phone number format handlers
	phoneField.addEventListener("keydown", enforceFormat);
	phoneField.addEventListener("keyup", formatToPhone);

	// Hide additional fields initially
	hideInitialFields([fullNameField, emailField, phoneField, formSubmitBtn]);

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
			handleInvalidAddress(autocompleteField);
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
			handleInvalidAddress(autocompleteField);
			isAddressValid = false;
			return;
		}

		autocompleteField.value = `${streetAddress}, ${city}, ${stateShort}, ${country}`;
		if (autocompleteField.value) {
			autocompleteField.classList.remove("invalid");
			autocompleteField.placeholder = "Type Your Property Address";
			resetBorderColor(autocompleteField);
			isAddressValid = true;
			autocompleteField.setCustomValidity(""); // Clear any previous custom validity message
		}
	});

	formBtnNext.addEventListener("click", function (event) {
		event.preventDefault();
		if (!isAddressValid || !autocompleteField.value) {
			handleInvalidAddress(autocompleteField);
			autocompleteField.setCustomValidity(
				"Please use the autocomplete to enter a complete property address.",
			); // Set custom validity message
			autocompleteField.reportValidity(); // Trigger native validation UI
			return;
		}

		autocompleteField.classList.remove("invalid");
		autocompleteField.placeholder = "Type Your Property Address";
		resetBorderColor(autocompleteField);

		showAdditionalFields(
			form,
			[fullNameField, emailField, phoneField, formSubmitBtn],
			formBtnNext,
		);

		window.dataLayer = window.dataLayer || [];
		window.dataLayer.push({ event: "form_first_click", form_id: form.id });
	});

	form.addEventListener("submit", handleFormSubmit);
}

// Ensure initAutocomplete is globally accessible
window.initAutocomplete = initAutocomplete;
