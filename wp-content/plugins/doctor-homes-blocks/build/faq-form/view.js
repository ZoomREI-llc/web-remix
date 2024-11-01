/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/faq-form/modules/phoneFormat.js":
/*!*********************************************!*\
  !*** ./src/faq-form/modules/phoneFormat.js ***!
  \*********************************************/
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
/*!******************************!*\
  !*** ./src/faq-form/view.js ***!
  \******************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _modules_phoneFormat__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./modules/phoneFormat */ "./src/faq-form/modules/phoneFormat.js");
// import { gsap } from "gsap";

function handleFormSubmit(event) {
  event.preventDefault();
  const form = event.target;
  const autocompleteField = form.querySelector('input[name="address"]');
  const fullNameField = form.querySelector('input[name="full_name"]');
  const emailField = form.querySelector('input[name="email"]');
  const phoneField = form.querySelector('input[name="phone"]');
  const messageField = form.querySelector('textarea[name="message"]');
  let isValid = true;

  // Basic validation
  if (messageField.value.trim() === "") {
    messageField.setCustomValidity("Please fill out this field.");
    messageField.reportValidity();
    isValid = false;
  } else {
    messageField.setCustomValidity("");
  }
  if (!autocompleteField.value) {
    handleInvalidAddress(autocompleteField);
    autocompleteField.setCustomValidity("Please use autocomplete to enter a complete address."); // Set custom validity message
    autocompleteField.reportValidity(); // Trigger native validation UI
    isValid = false;
  } else {
    autocompleteField.setCustomValidity("");
  }
  if (!isValid) {
    console.log("Form validation failed");
    return;
  }
  const formData = {
    property_address: autocompleteField.value,
    name: fullNameField.value,
    email: emailField.value,
    phone: phoneField.value,
    message: messageField.value,
    heard_about_us: form.querySelector('input[name="contact"]:checked') ? form.querySelector('input[name="contact"]:checked').value : null
  };
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
    gsap.to(".faq-form-wrap", {
      duration: 0.5,
      opacity: 0,
      onComplete: () => {
        form.style.display = "none";
        gsap.to(".contact-form__success", {
          duration: 0.5,
          display: "flex",
          opacity: 1
        });
      }
    });
  }).catch(error => {
    console.error("Error sending data to webhook:", error);
  });
}

// Helper functions
function handleInvalidAddress(field) {
  field.classList.add("invalid");
  field.setCustomValidity("Invalid address");
  field.reportValidity();
}
function resetBorderColor(field) {
  field.style.borderColor = "";
}
window.addEventListener("load", event => {
  const form = document.querySelector("#contact-form");
  if (form) {
    form.style.opacity = "1";
    form.addEventListener("submit", handleFormSubmit);
  }
});
function initAutocomplete() {
  console.log("initAutocomplete called");
  const form = document.getElementById("contact-form");
  if (!form) {
    console.error("Custom form not found.");
    return;
  }
  const autocompleteField = form.querySelector('input[name="address"]');
  const fullNameField = form.querySelector('input[name="full_name"]');
  const emailField = form.querySelector('input[name="email"]');
  const phoneField = form.querySelector('input[name="phone"]');
  const messageField = form.querySelector('textarea[name="message"]');
  if (!autocompleteField || !fullNameField || !emailField || !phoneField || !messageField) {
    console.error("Required fields not found, skipping form.");
    return;
  }
  console.log("All required fields found");

  // Add phone number format handlers
  phoneField.addEventListener("keydown", _modules_phoneFormat__WEBPACK_IMPORTED_MODULE_0__.enforceFormat);
  phoneField.addEventListener("keyup", _modules_phoneFormat__WEBPACK_IMPORTED_MODULE_0__.formatToPhone);
  let isAddressValid = false;

  // Reset address validity on key strokes
  autocompleteField.addEventListener("input", function () {
    console.log("Address input changed");
    isAddressValid = false;
    autocompleteField.setCustomValidity(""); // Reset custom validity message
  });
  messageField.addEventListener("input", function () {
    messageField.setCustomValidity(""); // Reset custom validity message
  });

  // Prevent form submission on "Enter" keypress until validation passes
  form.addEventListener("keypress", function (event) {
    if (event.key === "Enter" && !autocompleteField.value) {
      event.preventDefault();
    }
  });
  console.log("Initializing Google Maps Autocomplete");
  const autocomplete = new google.maps.places.Autocomplete(autocompleteField, {
    types: ["address"],
    componentRestrictions: {
      country: "us"
    }
  });
  autocomplete.addListener("place_changed", function () {
    console.log("Place changed");
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
      zipcode = "";
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
          break;
        case "postal_code":
          zipcode = component.long_name;
          break;
      }
    }
    if (!hasStreetNumber) {
      console.error("Selected place does not have a street number");
      handleInvalidAddress(autocompleteField);
      isAddressValid = false;
      return;
    }
    autocompleteField.value = `${streetAddress}, ${city}, ${stateShort} ${zipcode}`;
    if (autocompleteField.value) {
      autocompleteField.classList.remove("invalid");
      autocompleteField.placeholder = "Your Address";
      resetBorderColor(autocompleteField);
      isAddressValid = true;
      autocompleteField.setCustomValidity(""); // Clear any previous custom validity message
    }
  });
}
// Ensure initAutocomplete is globally accessible
window.initAutocomplete = initAutocomplete;
document.addEventListener("DOMContentLoaded", function () {
  loadScript(`https://maps.googleapis.com/maps/api/js?key=${formConfig.googleMapsApiKey}&libraries=places`, initAutocomplete);
});
/******/ })()
;
//# sourceMappingURL=view.js.map