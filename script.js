const wrapper = document.querySelector(".wrapper");
const presentation = document.querySelector(".presentation");
const mensuration = document.querySelector(".mensuration");
const contactLink = document.querySelector(".contact-link");
const socialmediaLink = document.querySelector(".socialmedia-link");
const btnPopup = document.querySelector(".btnContact-popup");
const iconClose = document.querySelector(".icon-close");
const submitButton = document.querySelector(".btn");
const home = document.querySelector(".home");
const measurement = document.querySelector(".measurement");
const galerie = document.querySelector(".galerie");
const gallery = document.querySelector(".gallery");
const header = document.querySelector(".header");
const body = document.querySelector(".body");
const mobileHeader = document.querySelector(".mobile__header");
const mobileNavigation = document.querySelector(".mobile__navigation");
const toggleBtn = document.querySelector(".mobile__hamburger__container img");
let isBlurred = false;

toggleBtn.addEventListener("click", () => {
  isBlurred = !isBlurred;

  mobileNavigation.style.display = isBlurred ? "flex" : "none";
  mobileHeader.style.backdropFilter = isBlurred ? "blur(10px)" : "blur(0px)";
});

socialmediaLink.addEventListener("click", () => {
  wrapper.classList.add("active");
  console.log("Show Social Media");
});

contactLink.addEventListener("click", () => {
  wrapper.classList.remove("active");
  console.log("Show Contact");
});

btnPopup.addEventListener("click", () => {
  wrapper.classList.add("active-popup");
  presentation.classList.add("mask");
  mensuration.classList.remove("show");
  galerie.classList.remove("show");
  body.classList.remove("gallery");
  console.log("Show Contact");
});

iconClose.addEventListener("click", () => {
  wrapper.classList.remove("active-popup");
  presentation.classList.remove("mask");
  console.log("Close Contact");
});

submitButton.addEventListener("click", () => {
  console.log("Submit");
});

home.addEventListener("click", () => {
  console.log("Show Home");
  wrapper.classList.remove("active-popup");
  presentation.classList.remove("mask");
  mensuration.classList.remove("show");
  galerie.classList.remove("show");
  body.classList.remove("gallery");
});

measurement.addEventListener("click", () => {
  console.log("Show Measurement");
  wrapper.classList.remove("active-popup");
  presentation.classList.add("mask");
  mensuration.classList.add("show");
  galerie.classList.remove("show");
  body.classList.remove("gallery");
});

gallery.addEventListener("click", () => {
  console.log("Show Gallery");
  wrapper.classList.remove("active-popup");
  presentation.classList.add("mask");
  mensuration.classList.remove("show");
  galerie.classList.add("show");
  // header.classList.add("mask");
  body.classList.add("gallery");
});

// CONTACT

const inputBox = document.querySelector(".input-box");
const label = document.querySelector(".label");

$(document).ready(function () {
  Fancybox.bind('[data-fancybox="gallery"]');

  $("#contactForm").validate({
    rules: {
      fullname: "required",
      email: {
        required: true,
        email: true,
      },
      message: "required",
    },
    messages: {
      fullname: "Please enter your full name",
      email: {
        required: "Please enter your email address",
        email: "Please enter a valid email address",
      },
      message: "Please enter your message",
    },
    submitHandler: function (form) {
      // Form is valid, submit it using AJAX
      $.ajax({
        type: "POST",
        url: form.action,
        data: $(form).serialize(),
        success: function (response) {
          if (response.status == true) {
            alert(response.message)
            form.reset();
          }else{
            alert(response.message)
          }
        },
        error: function (error) {
          // Handle error (e.g., display an error message)
          console.error(error);
        },
      });
      return false; // Prevent the form from submitting normally
    },
  });
});
