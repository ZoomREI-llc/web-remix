document.addEventListener("DOMContentLoaded", () => {
  // General Click Events using Event Delegation
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
    if (event.target.matches(".faq-question")) {
      dataLayer.push({
        event: "faq_click",
        faq_question: event.target.innerText,
      });
    }
  });

  // Form Events using Event Delegation
  document.addEventListener(
    "focus",
    (event) => {
      if (event.target.matches("form input")) {
        const form = event.target.closest("form");
        const label = findLabel(event.target);
        const labelText = label ? label.innerText.trim() : "unknown";
        dataLayer.push({
          event: "form_focus",
          form_id: form.id,
          form_name: form.name,
          field_label: labelText,
        });
      }
    },
    true
  ); // Use the capture phase to detect focus events reliably

  document.addEventListener(
    "blur",
    (event) => {
      if (event.target.matches("form input")) {
        const form = event.target.closest("form");
        const label = findLabel(event.target);
        const labelText = label ? label.innerText.trim() : "unknown";
        const fieldValue = event.target.value || ""; // Capture the current value of the field
        dataLayer.push({
          event: "form_blur",
          form_id: form.id,
          form_name: form.name,
          field_label: labelText,
          field_value: fieldValue, // Add the captured value to the data layer push
        });
      }
    },
    true
  ); // Use the capture phase to detect blur events reliably

  // Form Submit
  //   document.addEventListener("submit", (event) => {
  //     if (event.target.matches("form")) {
  //       const form = event.target;
  //       dataLayer.push({
  //         event: "form_submit",
  //         form_id: form.id,
  //         form_name: form.name,
  //       });
  //     }
  //   });
});

// Helper function to find the corresponding label for an input
function findLabel(inputElement) {
  // Check if the input has an ID
  if (inputElement.id) {
    // Find a label with a "for" attribute matching the input's ID
    return document.querySelector(`label[for="${inputElement.id}"]`);
  }

  // Check if the input is wrapped in a label element
  let parent = inputElement.parentElement;
  while (parent) {
    if (parent.tagName.toLowerCase() === "label") {
      return parent;
    }
    parent = parent.parentElement;
  }

  // Return null if no label is found
  return null;
}
