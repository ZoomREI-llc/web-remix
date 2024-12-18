import { fadeIn, fadeOut, slideUp, slideDown, sessionStorageUTM, trigger } from "./modules/helpers.js";
import { populateUtms, getRedirectParams } from "./modules/form_helpers.js";
import { validate } from "./modules/validate.js";
import { telInputMask } from "./modules/telInputMask.js";
import { inputSelect } from "./modules/inputSelect.js";

function formEngineCallback(leadForm) {
  let leadFormConfig = JSON.parse(document.getElementById('form-config-'+leadForm.id).innerHTML)
  let phoneInput = leadForm.querySelector('[data-validation="tel-mask"]')
  let formName = leadForm.closest('[data-form-name]') ? leadForm.closest('[data-form-name]').dataset.formName : leadForm.name
  let isPopup = leadForm.closest('[data-form-popup]')
  let showHideContainer = leadForm.closest('section') || leadForm
  let showOnSuccess = showHideContainer.querySelector('.show-on-success')
  let hideOnSuccess = showHideContainer.querySelector('.hide-on-success')

  leadForm.classList.add('is-initialized')

  // Ensure the phone input has the 'required' attribute
  if (phoneInput) {
    phoneInput.setAttribute('required', 'required');
  }

  telInputMask(phoneInput, {
    mask: '(xxx) xxx - xxxx',
    hiddenInput: true
  });

  // Initialize validation for the form
  validate(leadForm, {
    submitFunction: sendAjax,
    trackErrors: true
  });

  // After validation initialization, the inputs have the `setError` method
  phoneInput = leadForm.querySelector('[name="phone"]');

  function sendAjax() {
    let formBtn = leadForm.querySelector('[type="submit"]');
    if(leadForm.dataset.submitEvent) {
      window.dataLayer = window.dataLayer || [];
      window.dataLayer.push({
        event: leadForm.dataset.submitEvent,
        formName: formName,
        fullName: formData.get('fullName'),
        street: formData.get('street'),
        city: formData.get('city'),
        state: formData.get('state'),
        country: "US",
        zipcode: formData.get('zipcode'),
        email: formData.get('email'),
        phone: formData.get('phone')
      });
    }
    trigger(leadForm, 'form-submit')

    if (formBtn) {
      formBtn.classList.add('is-loading');
      formBtn.setAttribute('disabled', 'disabled');
    }

    // Get the phone number from the hidden input (unmasked phone number)
    // Ensure `phoneInput` has `setError` method
    let phoneNumber = phoneInput ? phoneInput.value : '';

    // Perform Numverify API validation
    fetch(`https://apilayer.net/api/validate?access_key=d1c478a64c53bed8fa503af6541b7c21&number=${encodeURIComponent(phoneNumber)}`)
      .then(response => response.json())
      .then(data => {
        console.log('Numverify API Response:', data); // Log the API response

        if (data.error) {
          console.error('Numverify API Error:', data.error);
          if (formBtn) {
            formBtn.classList.remove('is-loading');
            formBtn.removeAttribute('disabled');
          }
          phoneInput.setError('Unable to validate phone number. Please try again later.');
        } else if (data.valid && isAllowedLineType(data.line_type)) {
          // Phone number is valid and line type is acceptable
          let xhr = new XMLHttpRequest();
          let formData = populateUtms(leadForm, new FormData(leadForm));
          // ...existing code to append form data...
          formData.append('webhooks', JSON.stringify(leadFormConfig.webhooks));
          formData.append('form_name', formName);
          formData.append('popup', isPopup);

          xhr.open('post', leadFormConfig.handler);
          xhr.onload = function() {
            if (xhr.status === 200) {
              if(leadFormConfig.redirect) {
                let redirectParams = getRedirectParams(formData, leadFormConfig.query)

                document.location.href = leadFormConfig.redirect + (redirectParams ? '?'+redirectParams : '')
              }

              if(hideOnSuccess){
                fadeOut(hideOnSuccess, 300, function () {
                  if(showOnSuccess) {
                    fadeIn(showOnSuccess, 300)
                  }
                })
              } else if(showOnSuccess){
                fadeIn(showOnSuccess, 300)
              }

              trigger(leadForm, 'form-submit-success')
            }
          };
          xhr.send(formData);
        } else {
          // Phone number is invalid or line type is not acceptable
          if (formBtn) {
            formBtn.classList.remove('is-loading');
            formBtn.removeAttribute('disabled');
          }
          phoneInput.setError('Invalid phone number. Please enter a valid mobile or landline number.');
        }
      })
      .catch(error => {
        console.error('Error validating phone number:', error);
        if (formBtn) {
          formBtn.classList.remove('is-loading');
          formBtn.removeAttribute('disabled');
        }
        phoneInput.setError('Unable to validate phone number at this time. Please try again later.');
      });
  }

  function isAllowedLineType(lineType) {
    // Accept line types that are valid for communication
    const allowedLineTypes = [
      'mobile',
      'fixed_line',
      'fixed_line_or_mobile',
      'voip'
    ];
    return allowedLineTypes.includes(lineType);
  }

  function isValidPhoneNumberFormat(number) {
    // Reject numbers with repeating digits like 1111111111, 1234567890, etc.
    const invalidPatterns = [
      /^(\d)\1{9}$/,         // Repeating digits
      /^(1234567890)$/,      // Sequential digits
      /^(0987654321)$/,      // Reverse sequential digits
      /^0+$/,                // All zeros
      /^1+$/                 // All ones
    ];
    return !invalidPatterns.some(pattern => pattern.test(number));
  }

  function initAddress() {
    let addressInput = leadForm.querySelector('[data-validation="address-autocomplete"]')
    let addressInputBtn = leadForm.querySelector('[type="submit"]')
    let autocomplete = new google.maps.places.Autocomplete(addressInput, {
      types: ["address"],
      componentRestrictions: { country: "us" },
    });
    let inputStreet = leadForm.querySelector('[name="street"]')
    let inputCity = leadForm.querySelector('[name="city"]')
    let inputState = leadForm.querySelector('[name="state"]')
    let inputZipcode = leadForm.querySelector('[name="zipcode"]')

    addressInput.autocompleteInstance = autocomplete
    autocomplete.addListener("place_changed", function () {
      if(addressInput.isValid()){
        inputStreet.value = addressInput.dataset.street
        inputCity.value = addressInput.dataset.city
        inputState.value = addressInput.dataset.state
        inputZipcode.value = addressInput.dataset.zipcode
      }
      trigger(leadForm, 'form-interaction')
    });
    if(addressInputBtn) {
      addressInputBtn.addEventListener('click', function (e) {
        addressInput.closest('.input').classList.remove('is-error')
      })
    }
  }

  function getValuesFromQueue() {
    let getParams = new URLSearchParams(window.location.search)
    let glossary = {
      'full-name': 'fullName',
      'phone': 'phone_masked',
      'propaddress': 'propertyAddress',
      'propstreet': 'street',
      'propcity': 'city',
      'propstate': 'state',
      'propzip': 'zipcode',
    }

    getParams.forEach((value, key) => {
      let input = leadForm.querySelector(`[name="${key}"]`)
      let glossaryInput = leadForm.querySelector(`[name="${glossary[key] ? glossary[key] : ''}"]`)

      if(input){
        input.value = value
        if(input.dataset.validation === "tel-mask"){
          trigger(input, 'input')
        }
      }
      if(glossaryInput){
        glossaryInput.value = value
        if(glossaryInput.dataset.validation === "tel-mask"){
          trigger(glossaryInput, 'input')
        }
      }
    })
  }

  initAddress()
  inputSelect()
  getValuesFromQueue()
}

function initFormEngine(form){
  loadScript(`https://maps.googleapis.com/maps/api/js?key=${formConfig.googleMapsApiKey}&libraries=places`, function () {
    formEngineCallback(form)
  });
}

window.initFormEngine = initFormEngine

document.addEventListener("DOMContentLoaded", function () {
  sessionStorageUTM()
});