document.addEventListener("click", (event) => {
  // Call Button Click
  if (event.target.matches(".call-btn")) {
    const parentSection = event.target.closest("header, footer, section");
    const location = parentSection
      ? parentSection.id || parentSection.className
      : "unknown";
    dataLayer.push({
      event: "call_click",
      call_click_id: event.target.id,
      call_click_location: location,
    });
  }

  // CTA Button Click
  if (event.target.matches(".cta-btn")) {
    const parentSection = event.target.closest("section");
    const sectionName = parentSection
      ? parentSection.id || parentSection.className
      : "unknown";
    dataLayer.push({
      event: "cta_click",
      cta_name: event.target.innerText,
      cta_section_name: sectionName,
    });
  }

  // FAQ Item Click
  if (event.target.matches(".faq-questions")) {
    dataLayer.push({
      event: "faq_click",
      faq_question: event.target.innerText,
    });
  }
});

// Form Events
document.querySelectorAll(".gform_wrapper input").forEach((input) => {
  //   // Form Start (First Keystroke)
  //   input.addEventListener("input", (event) => {
  //     const form = event.target.closest("form");
  //     dataLayer.push({
  //       event: "form_start",
  //       form_id: form.id,
  //       form_name: form.name,
  //     });
  //   });

  // Form Focus
  input.addEventListener("focus", (event) => {
    const form = event.target.closest("form");
    dataLayer.push({
      event: "form_focus",
      form_id: form.id,
      form_name: form.name,
      form_field_name: event.target.name,
    });
  });

  // Form Blur
  input.addEventListener("blur", (event) => {
    const form = event.target.closest("form");
    dataLayer.push({
      event: "form_blur",
      form_id: form.id,
      form_name: form.name,
      form_field_name: event.target.name,
    });
  });
});

// // Form Submit
// document
//   .querySelectorAll('.gform_wrapper input[type="submit"]')
//   .forEach((button) => {
//     button.addEventListener("click", (event) => {
//       const form = event.target.closest("form");
//       dataLayer.push({
//         event: "form_submit",
//         form_id: form.id,
//         form_name: form.name,
//       });
//     });
//   });
