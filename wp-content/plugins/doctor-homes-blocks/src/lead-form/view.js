import { fadeIn, fadeOut, slideUp, slideDown } from "./modules/helpers";
import { validate } from "./modules/validate";
import { telInputMask } from "./modules/telInputMask";
import { inputSelect } from "./modules/inputSelect";

function leadFormCallback() {
    let leadForm = document.getElementById('dh-lead-form')
    if(!leadForm){
        return;
    }
    let phoneInput = leadForm.querySelector('[data-validation="tel-mask"]')

    function populateUtms(formData) {
        let utms = {
            'utm_source': 'get',
            'utm_keyword': 'get',
            'utm_term': 'get',
            'utm_device': 'get',
            'utm_gclid': 'get',
            'utm_campaign': 'get',
            'utm_medium': 'get',
            'utm_content': 'get',
            'fbclid': 'get',
            'gclid': 'get',
            'page_url': ()=>{
                return document.location.href
            },
            'lead_source': ()=>{
                return '??'
            },
            'timestamp': ()=>{
                return (new Date()).getTime()
            },
            'client_id': ()=>{
                return '??'
            },
            'session_id': ()=>{
                return '??'
            },
            'form_name': leadForm.name,
        }
        let getParams = new URLSearchParams(window.location.search)

        Object.keys(utms).forEach(function (utmName) {
            if(utms[utmName] === 'get'){
                if(getParams.get(utmName)) {
                    formData.set(utmName, getParams.get(utmName))
                }
            } else if(typeof utms[utmName] === 'function'){
                formData.set(utmName, utms[utmName]())
            } else {
                formData.set(utmName, utms[utmName])
            }
        })

        return formData;
    }
    function getRedirectParams(formData) {
        let params = {
            'fullName': 'full-name',
            'phone': 'phone',
            'email': 'email',
            'propertyAddress': 'propaddress',
            'street': 'propstreet',
            'city': 'propcity',
            'state': 'propstate',
            'zipcode': 'propzip',
            'country': 'propcountry',
        }
        let query = {}

        Object.keys(params).forEach(function (inputName) {
            let propName = params[inputName]

            if(inputName === 'country'){
                query[propName] = 'United States'
            } else if(formData.get(inputName)) {
                query[propName] = formData.get(inputName)
            }
        })

        return new URLSearchParams(query).toString()
    }
    function sendAjax() {
        let formData = populateUtms(new FormData(leadForm));
        let formBtn = leadForm.querySelector('[type="submit"]');
        let xhr = new XMLHttpRequest();

        if (formBtn) {
            formBtn.setAttribute('disabled', 'disabled');
        }

        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            event: "lead_step_1",
            formName: leadForm.name,
            fullName: formData.get('fullName'),
            street: formData.get('street'),
            city: formData.get('city'),
            state: formData.get('state'),
            country: "US",
            zipcode: formData.get('zipcode'),
            email: formData.get('email'),
            phone: formData.get('phone')
        });

        xhr.open(leadForm.method, leadForm.action);
        xhr.send(formData);
        xhr.onload = function() {
            if (xhr.status === 200) {
                document.location.href = leadForm.dataset.redirect + '?' + getRedirectParams(formData)
            }
        };
    }
    function initAddress() {
        let addressInput = leadForm.querySelector('[data-validation="address-autocomplete"]')
        let addressInputBtn = leadForm.querySelector('[type="submit"]')
        let nextStep = leadForm.querySelector('.lead-form__fields')
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
        });
        if(addressInputBtn) {
            addressInputBtn.addEventListener('click', function (e) {
                addressInput.closest('.input').classList.remove('is-error')
            })
        }
    }

    telInputMask(phoneInput, {
        mask: '(xxx) xxx - xxxx',
        hiddenInput: true
    })
    validate(leadForm, {
        submitFunction: sendAjax,
        trackErrors: true
    })
    initAddress()
    inputSelect()
}

window.leadFormCallback = leadFormCallback
document.addEventListener("DOMContentLoaded", function () {
    loadScript(`https://maps.googleapis.com/maps/api/js?key=${formConfig.googleMapsApiKey}&libraries=places`, leadFormCallback);
});