/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************!*\
  !*** ./src/contact-us-faqs/view.js ***!
  \*************************************/
// import gsap from "gsap";

function contactUsFaqsCallback() {
  const faqs = document.querySelectorAll(".faq-item");
  faqs.forEach(faq => {
    const question = faq.querySelector(".faq-question");
    const answer = faq.querySelector(".faq-answer");
    const icon = question.querySelector("img");

    // Ensure answers are hidden by default
    gsap.set(answer, {
      height: 0,
      opacity: 0,
      paddingTop: 0,
      paddingBottom: 0,
      overflow: "hidden"
    });
    question.addEventListener("click", () => {
      const isVisible = parseInt(gsap.getProperty(answer, "height")) > 0;

      // Close all other answers
      faqs.forEach(otherFaq => {
        if (otherFaq !== faq) {
          const otherAnswer = otherFaq.querySelector(".faq-answer");
          gsap.set(otherFaq.querySelector(".faq-question"), {
            borderRadius: "10px"
          });
          gsap.to(otherAnswer, {
            height: 0,
            opacity: 0,
            paddingTop: 0,
            paddingBottom: 0,
            duration: 0.5,
            onComplete: () => {
              otherAnswer.style.height = "0";
            }
          });
          gsap.to(otherFaq.querySelector(".faq-question img"), {
            scaleY: 1,
            duration: 0.5
          });
        }
      });
      if (isVisible) {
        gsap.to(answer, {
          height: 0,
          opacity: 0,
          paddingTop: 0,
          paddingBottom: 0,
          duration: 0.5,
          onStart: () => {
            gsap.set(question, {
              borderRadius: "10px"
            });
          },
          onComplete: () => {
            answer.style.height = "0";
          }
        });
        gsap.to(icon, {
          scaleY: 1,
          duration: 0.5
        });
      } else {
        answer.style.height = "auto";
        const fullHeight = answer.scrollHeight + 48; // Add padding top and bottom
        gsap.set(question, {
          borderRadius: "10px 10px 0 0"
        });
        gsap.to(answer, {
          height: fullHeight,
          opacity: 1,
          paddingTop: "1.5rem",
          paddingBottom: "1.5rem",
          duration: 0.5,
          onComplete: () => {
            answer.style.height = "auto";
          }
        });
        gsap.to(icon, {
          scaleY: -1,
          duration: 0.5
        });
      }
    });
  });

  // Open the first FAQ by default
  if (faqs.length > 0) {
    const firstFaq = faqs[0];
    const firstQuestion = firstFaq.querySelector(".faq-question");
    const firstAnswer = firstFaq.querySelector(".faq-answer");
    const firstIcon = firstQuestion.querySelector("img");
    firstAnswer.style.height = "auto";
    const fullHeight = firstAnswer.scrollHeight + 48; // Add padding top and bottom
    gsap.set(firstQuestion, {
      borderRadius: "10px 10px 0 0"
    });
    gsap.to(firstAnswer, {
      height: fullHeight,
      opacity: 1,
      paddingTop: "1.5rem",
      paddingBottom: "1.5rem",
      duration: 0.5,
      onComplete: () => {
        firstAnswer.style.height = "auto";
      }
    });
    gsap.to(firstIcon, {
      scaleY: -1,
      duration: 0.5
    });
  }
}
document.addEventListener("DOMContentLoaded", function () {
  loadScript('https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', contactUsFaqsCallback);
});
/******/ })()
;
//# sourceMappingURL=view.js.map