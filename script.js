$(document).ready(function () {
  const wrapper = $(".wrapper");
  const presentation = $(".presentation");
  const mensuration = $(".mensuration");
  const contactLink = $(".contact-link");
  const socialmediaLink = $(".socialmedia-link");
  const btnPopup = $(".btnContact-popup");
  const iconClose = $(".icon-close");
  const submitButton = $(".btn");
  const home = $(".home");
  const measurement = $(".measurement");
  const galerie = $(".galerie");
  const gallery = $(".gallery");
  const header = $(".header");
  const body = $(".body");
  const mobileHeader = $(".mobile__header");
  const mobileNavigation = $(".mobile__navigation");
  const toggleBtn = $(".mobile__hamburger__container img");
  // CONTACT
  const inputBox = document.querySelector(".input-box");
  const label = document.querySelector(".label");
  let isBlurred = false;

  toggleBtn.on("click", function () {
      isBlurred = !isBlurred;
      mobileNavigation.css("display", isBlurred ? "flex" : "none");
      mobileHeader.css("backdropFilter", isBlurred ? "blur(10px)" : "blur(0px)");
  });

  socialmediaLink.on("click", function () {
      wrapper.addClass("active");
      console.log("Show Social Media");
  });

  contactLink.on("click", function () {
      wrapper.removeClass("active");
      console.log("Show Contact");
  });

  btnPopup.on("click", function () {
      wrapper.addClass("active-popup");
      presentation.addClass("mask");
      mensuration.removeClass("show");
      galerie.removeClass("show");
      body.removeClass("gallery");
      console.log("Show Contact");
  });

  iconClose.on("click", function () {
      wrapper.removeClass("active-popup");
      presentation.removeClass("mask");
      console.log("Close Contact");
  });

  submitButton.on("click", function () {
      console.log("Submit");
  });

  home.on("click", function () {
      console.log("Show Home");
      wrapper.removeClass("active-popup");
      presentation.removeClass("mask");
      mensuration.removeClass("show");
      galerie.removeClass("show");
      body.removeClass("gallery");
  });

  measurement.on("click", function () {
      console.log("Show Measurement");
      wrapper.removeClass("active-popup");
      presentation.addClass("mask");
      mensuration.addClass("show");
      galerie.removeClass("show");
      body.removeClass("gallery");
  });

  gallery.on("click", function () {
      console.log("Show Gallery");
      wrapper.removeClass("active-popup");
      presentation.addClass("mask");
      mensuration.removeClass("show");
      galerie.addClass("show");
      // header.addClass("mask");
      body.addClass("gallery");
  });


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

