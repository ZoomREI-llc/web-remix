document.addEventListener("DOMContentLoaded", function () {
	const wrapperToMoveElement = document.querySelector(".lcp-hero__titles h1");
	const wrapperStartPosElement = document.querySelector(".lcp-hero");
	const moveElement = document.querySelector(".lcp-hero-form__form");

	function moveBlock() {
		if (window.innerWidth < 1024) {
			wrapperToMoveElement.insertAdjacentElement("afterend", moveElement);
		} else {
			wrapperStartPosElement.insertAdjacentElement("beforeend", moveElement);
		}
	}
	// Run on load
	moveBlock();
	// Re-run on window resize
	window.addEventListener("resize", moveBlock);
});
