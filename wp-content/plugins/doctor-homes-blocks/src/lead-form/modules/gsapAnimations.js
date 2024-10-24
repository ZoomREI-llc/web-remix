
// Hide initial fields
export function hideInitialFields(fields) {
	fields.forEach((field) => {
		const fieldContainer = field.closest("div");
		gsap.set(fieldContainer, { display: "none", opacity: 0 });
	});
}

// Show additional fields with animation
export function showAdditionalFields(form, fields, formBtnNext) {
	const initialHeight = form.offsetHeight;

	// Temporarily hide the formBtnNext to calculate the correct new height
	gsap.set(formBtnNext, { display: "none" });

	fields.forEach((field) => {
		const fieldContainer = field.closest("div");
		gsap.set(fieldContainer, { display: "grid", opacity: 0 });
	});

	// Calculate the new height after displaying the additional fields
	const newHeight = form.scrollHeight;

	const tl = gsap.timeline();
	tl.to(form, {
		height: newHeight,
		duration: 0.5,
		ease: "power2.out",
	})
		.to(
			fields.map((field) => field.closest("div")),
			{ opacity: 1, duration: 0.5, stagger: 0.2, ease: "power2.out" },
			"-=0.3",
		)
		.to(form, {
			height: "auto", // Set the height back to auto after the animation
			duration: 0,
		});

	gsap.set(formBtnNext, { display: "none" }); // Ensure the formBtnNext remains hidden
}

// Handle invalid address
export function handleInvalidAddress(autocompleteField) {
	autocompleteField.classList.add("invalid");
	autocompleteField.placeholder = "Invalid Property Address";
	gsap.to(autocompleteField, { borderColor: "red", duration: 0.5 });
}

// Reset border color
export function resetBorderColor(autocompleteField) {
	gsap.to(autocompleteField, { borderColor: "", duration: 0.5 });
}
