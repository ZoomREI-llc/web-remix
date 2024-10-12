function initAutocomplete() {
  const forms = document.querySelectorAll('form[id^="gform_"]');

  forms.forEach((form) => {
    const autocompleteField = form.querySelector(".autocomplete-field input");
    const streetAddressField = form.querySelector(".address_line_1 input");
    const cityField = form.querySelector(".address_city input");
    const stateField = form.querySelector(".address_state :is(select, input)");
    const zipcodeFields = form.querySelectorAll(".address_zip input");
    const nameField = form.querySelector(".dl-full-name input");
    const phoneField = form.querySelector(".dl-phone input");
    const submitButton = form.querySelector('input[type="submit"]');

    let zipcodeField = null;
    let isAddressValid = false;
    let isNameValid = false;
    let isPhoneValid = false;
    let errorMessageContainers = {};
    let lastAddressError = null;

    zipcodeFields.forEach((field) => {
      if (field) {
        zipcodeField = field;
      }
    });

    // Error Tracking Function
    function trackError(field, message) {
      const label = findLabel(field);
      const labelText = label ? label.innerText.trim() : "unknown";
      dataLayer.push({
        event: "form_submit_error",
        form_id: form.id,
        error_field_label: labelText,
        error_message: message,
      });
    }

    // Helper function to find the corresponding label for an input
    function findLabel(inputElement) {
      if (inputElement.id) {
        return document.querySelector(`label[for="${inputElement.id}"]`);
      }

      let parent = inputElement.parentElement;
      while (parent) {
        if (parent.tagName.toLowerCase() === "label") {
          return parent;
        }
        parent = parent.parentElement;
      }

      return null;
    }

    function showError(field, message) {
      if (!errorMessageContainers[field.name]) {
        const errorMessageContainer = document.createElement("div");
        errorMessageContainer.classList.add("error-message-container");
        field.parentNode.insertBefore(errorMessageContainer, field.nextSibling);
        errorMessageContainers[field.name] = errorMessageContainer;
      }
      errorMessageContainers[field.name].textContent = message;
      field.classList.add("invalid");

      // Track the error in the dataLayer
      trackError(field, message);
    }

    function clearError(field) {
      if (errorMessageContainers[field.name]) {
        errorMessageContainers[field.name].remove();
        delete errorMessageContainers[field.name];
      }
      field.classList.remove("invalid");
    }

    function validateAddress() {
      const place = autocomplete.getPlace();
      if (!place || !place.geometry) {
        isAddressValid = false;
        lastAddressError =
          "Please re-enter and select your address from the dropdown";
        showError(autocompleteField, lastAddressError);
        return;
      }

      let streetAddress = "";
      let city = "";
      let stateShort = "";
      let stateLong = "";
      let zipcode = "";
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
        }
      }

      if (!hasStreetNumber) {
        isAddressValid = false;
        lastAddressError = "Address must include a street number";
        showError(autocompleteField, lastAddressError);
        return;
      }

      streetAddressField.value = streetAddress;
      cityField.value = city;
      stateField.value = stateLong;
      zipcodeField.value = zipcode;

      autocompleteField.value = `${streetAddress}, ${city}, ${stateShort}, ${zipcode}`;

      isAddressValid = true;
      lastAddressError = null;
      clearError(autocompleteField);
      autocompleteField.classList.remove("invalid");
      checkSubmitButton();
    }

    let autocomplete = new google.maps.places.Autocomplete(autocompleteField, {
      types: ["address"],
      componentRestrictions: { country: "us" },
    });

    autocomplete.addListener("place_changed", validateAddress);

    // Validation for other fields (Name & Phone)
    function validateField(field, message) {
      if (field.value.trim() === "") {
        showError(field, message);
        return false;
      } else {
        clearError(field);
        return true;
      }
    }

    nameField.addEventListener("blur", function () {
      isNameValid = validateField(nameField, "Name cannot be empty");
      checkSubmitButton();
    });

    phoneField.addEventListener("blur", function () {
      isPhoneValid = validateField(phoneField, "Phone cannot be empty");
      checkSubmitButton();
    });

    autocompleteField.addEventListener("blur", function () {
      if (!isAddressValid) {
        showError(
          autocompleteField,
          lastAddressError ||
            "Please use the dropdown to enter a complete property address"
        );
      }
    });

    autocompleteField.addEventListener("input", function () {
      isAddressValid = false;
      lastAddressError = null;
      autocompleteField.classList.add("invalid");
      submitButton.disabled = true;
      clearError(autocompleteField);
    });

    form.addEventListener("submit", function (event) {
      if (!isAddressValid || !isNameValid || !isPhoneValid) {
        event.preventDefault();
        showError(
          autocompleteField,
          lastAddressError ||
            "Please use the dropdown to enter a complete property address"
        );
      }
    });

    function checkSubmitButton() {
      if (isAddressValid && isNameValid && isPhoneValid) {
        submitButton.disabled = false;
      } else {
        submitButton.disabled = true;
      }
    }
  });
}

document.addEventListener("DOMContentLoaded", function () {
  if (
    typeof gform !== "undefined" &&
    typeof gform.initializeOnLoaded !== "undefined"
  ) {
    gform.initializeOnLoaded(function () {
      if (typeof google === "object" && typeof google.maps === "object") {
        initAutocomplete();
      } else {
        loadScript(
          "https://maps.googleapis.com/maps/api/js?key=AIzaSyCwwLF50kEF6wS1rTEqTDPfTXcSlF9REuI&libraries=places&callback=initAutocomplete"
        );
      }
    });
  }
});

function loadScript(src) {
  const script = document.createElement("script");
  script.type = "text/javascript";
  script.src = src;
  script.async = true;
  script.defer = true;
  document.head.appendChild(script);
}
