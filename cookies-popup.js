/*
const cookieContainer = document.querySelector(".cookie-container");
const acceptcookieButton = document.querySelector(".accept-cookie-btn");
const cancelcookieButton = document.querySelector(".cancel-cookie-btn");

cancelcookieButton.addEventListener("click", function(){
    cookieContainer.classList.remove("active")
});

acceptcookieButton.addEventListener("click", function(){
    cookieContainer.classList.remove("active");
    localStorage.setItem("cookieBannerDisplayed", "true")
});

setTimeout(function() { 
    if (!localStorage.getItem("cookieBannerDisplayed")){
    cookieContainer.classList.add("active")
    }
}, 2000);
*/

// -----------------------------------------------------------------------

const cookieContainer = document.querySelector(".cookie-container");
const acceptcookieButton = document.querySelector(".accept-cookie-btn");

acceptcookieButton.addEventListener("click", () => {
    cookieContainer.classList.remove("active");
    localStorage.setItem("cookieBannerDisplayed", "true")
});

/* setTimeout(() => { 
    if (!localStorage.getItem("cookieBannerDisplayed")){
    cookieContainer.classList.add("active");
    }
}, 2000);
*/
