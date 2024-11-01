// import { gsap } from "gsap";
import { enforceFormat, formatToPhone } from "./modules/phoneFormat";

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
    autocompleteField.setCustomValidity(
      "Please use autocomplete to enter a complete address.",
    ); // Set custom validity message
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
    heard_about_us: form.querySelector('input[name="contact"]:checked')
      ? form.querySelector('input[name="contact"]:checked').value
      : null,
  };

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

      gsap.to(".faq-form-wrap", {
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
    })
    .catch((error) => {
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

window.addEventListener("load", (event) => {
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

  if (
    !autocompleteField ||
    !fullNameField ||
    !emailField ||
    !phoneField ||
    !messageField
  ) {
    console.error("Required fields not found, skipping form.");
    return;
  }

  console.log("All required fields found");

  // Add phone number format handlers
  phoneField.addEventListener("keydown", enforceFormat);
  phoneField.addEventListener("keyup", formatToPhone);

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
    componentRestrictions: { country: "us" },
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
