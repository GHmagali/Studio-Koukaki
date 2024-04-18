// Effet de fade-in sur les sections au scroll avec l'API Intersection Observer
const fadeIn = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("transition");
      return;
    }
  });
});

fadeIn.observe(document.querySelector(".banner"));
fadeIn.observe(document.querySelector(".story"));
fadeIn.observe(document.querySelector(".studio"));
fadeIn.observe(document.querySelector(".oscar"));

// Animation des fleurs au scroll
const root = document.querySelector(":root");
window.addEventListener("scroll", () => {
  root.style.setProperty("--rotate-duration", "1s");
});

window.addEventListener("scrollend", () => {
  root.style.setProperty("--rotate-duration", "12s");
});

// Animation des titres au scroll avec l'API Intersection Observer
const title1 = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("titleAnim1");
      return;
    }
  });
});
const animtext1 = document.querySelectorAll(".animtext1");
animtext1.forEach((element) => title1.observe(element));

const title2 = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("titleAnim2");
      return;
    }
  });
});
const animtext2 = document.querySelectorAll(".animtext2");
animtext2.forEach((element) => title2.observe(element));

// Effet de parallax entre le titre et la vidéo/bannière
const parallax = document.querySelector(".parallax");
window.addEventListener("scroll", function () {
  let offset = window.scrollY;
  let distance = offset * 0.5;
  if (offset < parallax.offsetParent.offsetTop + parallax.offsetTop) {
    parallax.style.transform = "translate3d(0px, " + distance + "px, 0px)";
  }
});

// Effet de parallax sur les nuages de la section lieu
const place = document.querySelector("#place");
const bigCloud = document.querySelector(".big-cloud");
const littleCloud = document.querySelector(".little-cloud");
const positionPlace = place.offsetTop;

window.addEventListener("scroll", function () {
  const distance = window.scrollY;

  if (distance >= positionPlace + 300) {
    let parallax = distance - (positionPlace + 300);
    parallax = Math.min(parallax, 420);

    bigCloud.style.transform = "translateX(" + parallax + "px)";
    littleCloud.style.transform = "translateX(" + parallax + "px)";
  }
});
