import { initAutocomplete } from "./modules/initAutocomplete";

window.initAutocomplete = initAutocomplete;

document.addEventListener("DOMContentLoaded", function () {
    console.log('lead loaded')
    loadScript(`https://maps.googleapis.com/maps/api/js?key=${formConfig.googleMapsApiKey}&libraries=places&callback=initAutocomplete`, initAutocomplete);
});