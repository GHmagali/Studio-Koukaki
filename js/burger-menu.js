const burgerBtn = document.querySelector(".burger__btn");

burgerBtn.addEventListener("click", (e) => {
  e.target.classList.toggle("active");
});

const burgerMenu = document.getElementById("burger-menu");
const icon = document.getElementById("icon");

icon.addEventListener("click", () => {
  burgerMenu.classList.toggle("active");
});

const burgernav = document.getElementById("burger-menu");

document.querySelectorAll(".burger__link").forEach((e) =>
  e.addEventListener("click", () => {
    burgernav.classList.remove("active");
  })
);
