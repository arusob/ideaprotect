let cookieContainer = document.querySelector(".cookie-container");
let acceptcookieButton = document.querySelector(".accept-btn");
let cancelcookieButton = document.querySelector(".cancel-btn");

setTimeout(function () {
  let cookieAccepted = localStorage.getItem("cookieAccepted");
  if (cookieAccepted != "yes") {
    cookieContainer.classList.add("active");
  }
}, 500);

cancelcookieButton.addEventListener("click", function () {
  cookieContainer.classList.remove("active");
});

acceptcookieButton.addEventListener("click", function () {
  cookieContainer.classList.remove("active");
  localStorage.setItem("cookieAccepted", "yes");
});
