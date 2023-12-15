//humgurger
const ham = document.querySelector('.p-header__hamburger');
const nav = document.querySelector('.p-nav__wrapper');

ham.addEventListener('click', ()=> {
  ham.classList.toggle('is-open');
  nav.classList.toggle('is-open');
})


//intersection observer

const sticky = document.querySelector('.sticky');
const target = document.querySelector('.p-about__container');
const options = {
  root: null,
  rootMargin: "0px",
  threshold: 0
};
const callback = function (entries, observer) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      sticky.classList.toggle('is-show');
    }

  });
}
const observer = new IntersectionObserver(callback, options);
observer.observe(target);
