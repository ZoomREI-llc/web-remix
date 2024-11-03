/******/ (() => { // webpackBootstrap
/*!*******************************!*\
  !*** ./src/hero-form/view.js ***!
  \*******************************/
document.addEventListener("DOMContentLoaded", function () {
  const wrapperToMoveElement = document.querySelector(".dh-hero-form__titles > p");
  const wrapperStartPosElement = document.querySelector(".dh-hero-form");
  const moveElement = document.querySelector(".dh-hero-form__form");
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
/******/ })()
;
//# sourceMappingURL=view.js.map