import { loadScript } from "./modules/utils";
import { initAutocomplete } from "./modules/initAutocomplete";

// Ensure initAutocomplete is globally accessible
window.initAutocomplete = initAutocomplete;

document.addEventListener("DOMContentLoaded", function () {
	// Load Google Maps API only if not already loaded
	if (!window.google || !window.google.maps) {
		loadScript(
			`https://maps.googleapis.com/maps/api/js?key=${formConfig.googleMapsApiKey}&libraries=places&callback=initAutocomplete`,
		);
	} else {
		window.initAutocomplete();
	}
});
