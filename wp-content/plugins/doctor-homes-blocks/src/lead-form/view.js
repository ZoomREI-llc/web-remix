import { loadScript } from "./modules/utils";
import { initAutocomplete } from "./modules/initAutocomplete";

// Ensure initAutocomplete is globally accessible
window.initAutocomplete = initAutocomplete;

// Use a global flag to prevent multiple loads
window.googleMapsApiLoading = window.googleMapsApiLoading || false;

function pollForGoogleMaps(callback, interval = 50, maxAttempts = 20) {
    let attempts = 0;
    
    const poll = setInterval(() => {
        attempts++;
        console.log(`Polling for window.google: attempt ${attempts}`);
        
        if (window.google && window.google.maps) {
            clearInterval(poll);
            console.log("Google Maps API is available");
            callback();
        } else if (attempts >= maxAttempts) {
            clearInterval(poll);
            console.error("Google Maps API is not available after polling");
        }
    }, interval);
}

function checkGoogleMapsApi() {
    console.log("Checking for window.google:", !!window.google);
    if (window.google && window.google.maps) {
        console.log("Google Maps API already loaded");
        initAutocomplete();
    } else if (!window.googleMapsApiLoading) {
        console.log("Loading Google Maps API");
        window.googleMapsApiLoading = true; // Set the flag to indicate loading in progress
        loadScript(
            `https://maps.googleapis.com/maps/api/js?key=${formConfig.googleMapsApiKey}&libraries=places&callback=initAutocomplete`
        );
        pollForGoogleMaps(initAutocomplete); // Start polling for Google Maps API availability
    }
}

document.addEventListener("DOMContentLoaded", function () {
    console.log("DOM fully loaded and parsed.");
    checkGoogleMapsApi();
});