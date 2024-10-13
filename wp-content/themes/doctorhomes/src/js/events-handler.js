document.addEventListener("DOMContentLoaded", () => {
  console.log("DOM fully loaded and parsed");

  document.addEventListener("click", (event) => {
    const callButton = event.target.closest("a.call-btn");
    if (callButton) {
      console.log("Call button clicked");

      const parentSection = callButton.closest("header, footer, section");
      const location = parentSection
        ? parentSection.id || parentSection.className
        : "unknown";

      console.log("call_click event", {
        call_click_id: callButton.id,
        call_click_location: location,
        href: callButton.href, // Log the href to ensure it's the right element
      });

      dataLayer.push({
        event: "call_click",
        call_click_id: callButton.id,
        call_click_location: location,
        href: callButton.href,
      });
    }

    // CTA Button Click
    if (event.target.matches(".cta-btn")) {
      console.log("CTA button clicked");

      const parentSection = event.target.closest("section");
      const sectionName = parentSection
        ? parentSection.id || parentSection.className
        : "unknown";

      console.log("cta_click event", {
        cta_name: event.target.innerText,
        cta_section_name: sectionName,
      });

      dataLayer.push({
        event: "cta_click",
        cta_name: event.target.innerText,
        cta_section_name: sectionName,
      });
    }

    // FAQ Item Click
    if (event.target.matches(".faq-question")) {
      console.log("FAQ question clicked", {
        faq_question: event.target.innerText,
      });

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
        console.log("Form field focused");

        const form = event.target.closest("form");
        const label = findLabel(event.target);
        const labelText = label ? label.innerText.trim() : "unknown";

        console.log("form_focus event", {
          form_id: form.id,
          form_name: form.name,
          field_label: labelText,
        });

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
        console.log("Form field blurred");

        const form = event.target.closest("form");
        const label = findLabel(event.target);
        const labelText = label ? label.innerText.trim() : "unknown";
        const fieldValue = event.target.value || "";

        console.log("form_blur event", {
          form_id: form.id,
          form_name: form.name,
          field_label: labelText,
          field_value: fieldValue,
        });

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
