//humgurger
const ham = document.querySelector('.p-header__hamburger');
const navs = document.querySelectorAll('.p-nav__wrapper');

ham.addEventListener('click', ()=> {
  ham.classList.toggle('is-open');
  navs.forEach(nav => nav.classList.toggle('is-open'));
})


//intersection observer

// const sticky = document.querySelector('.sticky');
// const target = document.querySelector('.p-about__container');
// const options = {
//   root: null,
//   rootMargin: "0px",
//   threshold: 0
// };
// const callback = function (entries, observer) {
//   entries.forEach(entry => {
//     if (entry.isIntersecting) {
//       sticky.classList.toggle('is-show');
//     }
//   });
// }
// const observer = new IntersectionObserver(callback, options);
// observer.observe(target);




document.addEventListener("DOMContentLoaded", function () {
  const questionArray = [...document.querySelectorAll(".p-page-faq__question")];
  const descriptionArray = [...document.querySelectorAll(".p-page-faq__answer")];
  const toggleArray = [...document.querySelectorAll(".p-page-faq__toggle")];
  descriptionArray.forEach((description, index) => {
    if (!questionArray[index].classList.contains("is-open")) {
      gsap.set(description, {
        autoAlpha: 0,
        height: 0,
        minHeight: 0,
      });
    }
  });

  questionArray.forEach((question, index) => {
    question.addEventListener("click", () => {
      const description = descriptionArray[index];
      const toggle = toggleArray[index];
      if (question.classList.contains("is-open")) {
        question.classList.remove("is-open");
        toggle.classList.remove("is-open");
        gsap.to(description, { autoAlpha: 0, height: 0, duration: 0.5, minHeight: 0 });
      } else {
        question.classList.add("is-open");
        toggle.classList.add("is-open");
        gsap.to(description, { autoAlpha: 1, height: "auto", duration: 0.5, minHeight: "60px" });
      }
    });
  });

});
