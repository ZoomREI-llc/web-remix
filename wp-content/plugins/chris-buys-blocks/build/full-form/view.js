/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/full-form/modules/formHandlers.js":
/*!***********************************************!*\
  !*** ./src/full-form/modules/formHandlers.js ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   handleFormSubmit: () => (/* binding */ handleFormSubmit)
/* harmony export */ });
function loadGoogleFonts() {
  const link = document.createElement("link");
  link.href = "https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap";
  link.rel = "stylesheet";
  document.head.appendChild(link);
}
window.addEventListener("load", event => {
  const form = document.querySelector("#cb-lead-form");
  if (form) {
    loadGoogleFonts();
    form.style.opacity = "1";
    form.addEventListener("submit", handleFormSubmit);
  }
});
function handleFormSubmit(event) {
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
    phone: phoneField.value
  };
  const utmFields = ["utm_source", "utm_campaign", "utm_medium", "utm_term", "utm_content"];
  utmFields.forEach(field => {
    const value = form.querySelector(`input[name="${field}"]`).value;
    if (value) {
      formData[field] = value;
    }
  });
  window.dataLayer.push({
    event: "dh-lead",
    form_data: formData
  });
  console.log("Submitting to WordPress endpoint");
  console.log("Form data:", formData);
  fetch("/wp-json/custom/v1/submit-form", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded"
    },
    body: new URLSearchParams(formData).toString()
  }).then(response => {
    if (!response.ok) {
      throw new Error("Network response was not ok " + response.statusText);
    }
    return response.json();
  }).then(data => {
    console.log("Response from WordPress endpoint:", data);
    const city = ""; // Extract this from the form or another source
    const stateLong = ""; // Extract this from the form or another source
    const zipcode = ""; // Extract this from the form or another source
    window.location.href = `/step-2?phone=${phoneField.value}&email=${emailField.value}&propaddress=${autocompleteField.value}&propcity=${city}&propstate=${stateLong}&propzip=${zipcode}&propcountry=USA`;
  }).catch(error => {
    console.error("Error sending data to webhook:", error);
  });
}

/***/ }),

/***/ "./src/full-form/modules/initAutocomplete.js":
/*!***************************************************!*\
  !*** ./src/full-form/modules/initAutocomplete.js ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   initAutocomplete: () => (/* binding */ initAutocomplete)
/* harmony export */ });
/* harmony import */ var _formHandlers__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./formHandlers */ "./src/full-form/modules/formHandlers.js");
/* harmony import */ var _phoneFormat__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./phoneFormat */ "./src/full-form/modules/phoneFormat.js");


function loadGoogleFonts() {
  const link = document.createElement("link");
  link.href = "https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap";
  link.rel = "stylesheet";
  document.head.appendChild(link);
}

// Ensure initAutocomplete is globally accessible
function initAutocomplete() {
  const form = document.getElementById("cb-lead-form");
  if (!form) {
    console.error("Custom form not found.");
    return;
  }
  const autocompleteField = form.querySelector('input[name="property_address"]');
  const fullNameField = form.querySelector('input[name="full_name"]');
  const emailField = form.querySelector('input[name="email"]');
  const phoneField = form.querySelector('input[name="phone"]');
  const formSubmitBtn = form.querySelector('button[type="submit"]');
  if (!autocompleteField || !fullNameField || !emailField || !phoneField || !formSubmitBtn) {
    console.error("Required fields not found, skipping form.");
    return;
  }

  // Add phone number format handlers
  phoneField.addEventListener("keydown", _phoneFormat__WEBPACK_IMPORTED_MODULE_1__.enforceFormat);
  phoneField.addEventListener("keyup", _phoneFormat__WEBPACK_IMPORTED_MODULE_1__.formatToPhone);
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
    componentRestrictions: {
      country: "us"
    }
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
      autocompleteField.setCustomValidity("Please use autocomplete to enter a complete property address."); // Set custom validity message
      autocompleteField.reportValidity(); // Trigger native validation UI
    } else {
      autocompleteField.classList.remove("invalid");
      autocompleteField.setCustomValidity(""); // Clear any previous custom validity message
    }
  });
  form.addEventListener("submit", function (event) {
    if (!isAddressValid || !autocompleteField.value) {
      event.preventDefault();
      autocompleteField.setCustomValidity("Please use autocomplete to enter a complete property address."); // Set custom validity message
      autocompleteField.reportValidity(); // Trigger native validation UI
      return;
    }
    (0,_formHandlers__WEBPACK_IMPORTED_MODULE_0__.handleFormSubmit)(event);
  });
}

// Ensure initAutocomplete is globally accessible
window.initAutocomplete = initAutocomplete;

/***/ }),

/***/ "./src/full-form/modules/phoneFormat.js":
/*!**********************************************!*\
  !*** ./src/full-form/modules/phoneFormat.js ***!
  \**********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   enforceFormat: () => (/* binding */ enforceFormat),
/* harmony export */   formatToPhone: () => (/* binding */ formatToPhone),
/* harmony export */   isModifierKey: () => (/* binding */ isModifierKey),
/* harmony export */   isNumericInput: () => (/* binding */ isNumericInput)
/* harmony export */ });
// Phone number formatting and validation handlers
const isNumericInput = event => {
  const key = event.keyCode;
  return key >= 48 && key <= 57 ||
  // Allow number line
  key >= 96 && key <= 105 // Allow number pad
  ;
};
const isModifierKey = event => {
  const key = event.keyCode;
  return event.shiftKey === true || key === 35 || key === 36 ||
  // Allow Shift, Home, End
  key === 8 || key === 9 || key === 13 || key === 46 ||
  // Allow Backspace, Tab, Enter, Delete
  key > 36 && key < 41 ||
  // Allow left, up, right, down
  (event.ctrlKey === true || event.metaKey === true) && (key === 65 || key === 67 || key === 86 || key === 88 || key === 90) // Allow Ctrl/Command + A,C,V,X,Z
  ;
};
const enforceFormat = event => {
  // Input must be of a valid number format or a modifier key, and not longer than ten digits
  if (!isNumericInput(event) && !isModifierKey(event)) {
    event.preventDefault();
  }
};
const formatToPhone = event => {
  if (isModifierKey(event)) {
    return;
  }
  const input = event.target.value.replace(/\D/g, "").substring(0, 10); // First ten digits of input only
  const areaCode = input.substring(0, 3);
  const middle = input.substring(3, 6);
  const last = input.substring(6, 10);
  if (input.length > 6) {
    event.target.value = `(${areaCode}) ${middle} - ${last}`;
  } else if (input.length > 3) {
    event.target.value = `(${areaCode}) ${middle}`;
  } else if (input.length > 0) {
    event.target.value = `(${areaCode}`;
  }
};

/***/ }),

/***/ "./src/full-form/modules/utils.js":
/*!****************************************!*\
  !*** ./src/full-form/modules/utils.js ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   loadScript: () => (/* binding */ loadScript)
/* harmony export */ });
function loadScript(src) {
  const script = document.createElement("script");
  script.type = "text/javascript";
  script.src = src;
  script.async = true;
  script.defer = true;
  document.head.appendChild(script);
}

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./src/full-form/view.js ***!
  \*******************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _modules_utils__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./modules/utils */ "./src/full-form/modules/utils.js");
/* harmony import */ var _modules_initAutocomplete__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/initAutocomplete */ "./src/full-form/modules/initAutocomplete.js");



// Ensure initAutocomplete is globally accessible
window.initAutocomplete = _modules_initAutocomplete__WEBPACK_IMPORTED_MODULE_1__.initAutocomplete;
document.addEventListener("DOMContentLoaded", function () {
  console.log("DOM fully loaded and parsed.");
  // Load Google Maps API only if not already loaded
  if (!window.google || !window.google.maps) {
    (0,_modules_utils__WEBPACK_IMPORTED_MODULE_0__.loadScript)(`https://maps.googleapis.com/maps/api/js?key=${formConfig.googleMapsApiKey}&libraries=places&callback=initAutocomplete`);
  } else {
    window.initAutocomplete();
  }
});
/******/ })()
;
//# sourceMappingURL=view.js.map