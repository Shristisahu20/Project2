const signupLink = document.querySelector('a[href="#Signup"]');
const registerLink = document.querySelector('a[href="#Register"]');
const bannerContainer = document.querySelector(".banner");
const banners = document.querySelectorAll(".banner .banner-item");
const dropdowns = document.querySelectorAll(
  ".language-dropdown, .laws-dropdown, .rights-dropdown, .login-dropdown"
);
let currentBanner = 0;


function showNextBanner() {
    banners[currentBanner].classList.remove('visible');
    currentBanner = (currentBanner + 1) % banners.length;
    banners[currentBanner].classList.add('visible');
}

// Initially, show the first banner
banners[currentBanner].classList.add('visible');

// Add a click event listener to the banners container
document.querySelector('.banner').addEventListener('click', showNextBanner);

feedbackForm.addEventListener("submit", function (e) {
  e.preventDefault(); // Prevent the form from submitting (for demonstration purposes)
  alert("Feedback submitted! Thank you for your input.");
  feedbackForm.reset(); // Clear the form
});

// JavaScript for chatbot icon
const chatbotIcon = document.querySelector(".chatbot-icon-section");

chatbotIcon.addEventListener("click", function () {
  // Replace this with your chatbot functionality (e.g., opening a chat window)
  alert("Chatbot functionality goes here.");
});


signupLink.addEventListener("click", function (event) {
  event.preventDefault();
  window.location.href = "login/index.html";
});

registerLink.addEventListener("click", function (event) {
  event.preventDefault();
  window.location.href = "register/index.html";
});
function showOptions(select) {
    var selectedOption = select.value;
    var englishOptions = document.getElementById("english-options");

    if (selectedOption === "english") {
        englishOptions.style.display = "block";
    } else {
        englishOptions.style.display = "none";
    }
}window.onload = function() {
  var banner = document.getElementById('fixed-banner');
  setTimeout(function() {
      banner.style.transform = 'translateY(0)'; // Slide banner into view
  }, 1000); // Adjust delay as needed
};


