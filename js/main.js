$(document).ready(function () {
  "use strict";

  var window_width = $(window).width(),
    window_height = window.innerHeight,
    header_height = $(".default-header").height(),
    header_height_static = $(".site-header.static").outerHeight(),
    fitscreen = window_height - header_height;

  $(".fullscreen").css("height", window_height);
  $(".fitscreen").css("height", fitscreen);


  // Mobile Navigation
  if ($("#nav-menu-container").length) {
    var $mobile_nav = $("#nav-menu-container").clone().prop({
      id: "mobile-nav",
    });
    $mobile_nav.find("> ul").attr({
      class: "",
      id: "",
    });
    $("body").append($mobile_nav);
    $("body").prepend(
      '<button type="button" id="mobile-nav-toggle"><i class="lnr lnr-menu"></i></button>',
    );
    $("body").append('<div id="mobile-body-overly"></div>');
    $("#mobile-nav")
      .find(".menu-has-children")
      .prepend('<i class="lnr lnr-chevron-down"></i>');

    $(document).on("click", ".menu-has-children i", function (e) {
      $(this).next().toggleClass("menu-item-active");
      $(this).nextAll("ul").eq(0).slideToggle();
      $(this).toggleClass("lnr-chevron-up lnr-chevron-down");
    });

    $(document).on("click", "#mobile-nav-toggle", function (e) {
      $("body").toggleClass("mobile-nav-active");
      $("#mobile-nav-toggle i").toggleClass("lnr-cross lnr-menu");
      $("#mobile-body-overly").toggle();
    });

    $(document).click(function (e) {
      var container = $("#mobile-nav, #mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($("body").hasClass("mobile-nav-active")) {
          $("body").removeClass("mobile-nav-active");
          $("#mobile-nav-toggle i").toggleClass("lnr-cross lnr-menu");
          $("#mobile-body-overly").fadeOut();
        }
      }
    });
  } else if ($("#mobile-nav, #mobile-nav-toggle").length) {
    $("#mobile-nav, #mobile-nav-toggle").hide();
  }

  // Smooth scroll for the menu and links with .scrollto classes
  $(".nav-menu a, #mobile-nav a, .scrollto").on("click", function () {
    if (
      location.pathname.replace(/^\//, "") ==
      this.pathname.replace(/^\//, "") &&
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      if (target.length) {
        var top_space = 0;

        if ($("#header").length) {
          top_space = $("#header").outerHeight();

          if (!$("#header").hasClass("header-fixed")) {
            top_space = top_space;
          }
        }

        $("html, body").animate(
          {
            scrollTop: target.offset().top - top_space,
          },
          1500,
          "swing",
        );

        if ($(this).parents(".nav-menu").length) {
          $(".nav-menu .menu-active").removeClass("menu-active");
          $(this).closest("li").addClass("menu-active");
        }

        if ($("body").hasClass("mobile-nav-active")) {
          $("body").removeClass("mobile-nav-active");
          $("#mobile-nav-toggle i").toggleClass("lnr-times lnr-bars");
          $("#mobile-body-overly").fadeOut();
        }
        return false;
      }
    }
  });

  $(document).ready(function () {
    $("html, body").hide();

    if (window.location.hash) {
      setTimeout(function () {
        $("html, body").scrollTop(0).show();

        $("html, body").animate(
          {
            scrollTop: $(window.location.hash).offset().top - 108,
          },
          1000,
        );
      }, 0);
    } else {
      $("html, body").show();
    }
  });

  // Header scroll class
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $("#header").addClass("header-scrolled");
    } else {
      $("#header").removeClass("header-scrolled");
    }
  });



  const instagram = document.querySelector(".instagram__flex");

  if (instagram) {
    Array.from(instagram.children).forEach((item) => {
      const duplicateNode = item.cloneNode(true);
      duplicateNode.setAttribute("aria-hidden", true);
      instagram.appendChild(duplicateNode);
    });
  }

  // Contact Us Scripts 

  if (window.location.pathname.toLowerCase().includes("contact.php")) {

    const urlParams = new URLSearchParams(window.location.search);
    const enquiryParam = urlParams.get('enquiry');
    if (enquiryParam) {
      const enquirySelect = document.getElementById("enquiryType");
      if (enquirySelect) {
        enquirySelect.value = enquiryParam;
      }
    }
  }

  const loginBtns = document.querySelectorAll(".btn-login");
  if (loginBtns.length > 0) {
    if (localStorage.getItem("isLoggedIn") === "true") {
      loginBtns.forEach(btn => {
        btn.innerHTML = 'Logout <i class="fas fa-sign-out-alt"></i>';
        btn.removeAttribute("onclick"); // Remove default onclick if present in HTML
        btn.addEventListener("click", function (e) {
          e.preventDefault(); // Prevent default link behavior if any
          if (typeof Swal !== 'undefined') {
            Swal.fire({
              title: 'Are you sure?',
              text: "You will be logged out of your account.",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#d33',
              cancelButtonColor: '#fab700',
              confirmButtonText: 'Yes, log out!',
              customClass: { popup: 'glass-popup' },
              backdrop: 'rgba(0,0,0,0.6)'
            }).then((result) => {
              if (result.isConfirmed) {
                Swal.fire({
                  title: 'Logged Out!',
                  text: 'You have been successfully logged out.',
                  icon: 'success',
                  confirmButtonColor: '#fab700',
                  customClass: { popup: 'glass-popup' },
                  backdrop: 'rgba(0,0,0,0.6)'
                }).then(() => {
                  localStorage.removeItem("isLoggedIn");
                  window.location.href = "logout.php";
                });
              }
            });
          } else {
            if (confirm("Are you sure you want to log out?")) {
              localStorage.removeItem("isLoggedIn");
              window.location.href = "logout.php";
            }
          }
        });
      });
    } else {
      loginBtns.forEach(btn => {
        if (!btn.hasAttribute("onclick")) {
          btn.addEventListener("click", function (e) {
            e.preventDefault();
            window.location.href = "login.php";
          });
        }
      });
    }
  }

  const submitBtn = document.getElementById("submitContactBtn");
  if (submitBtn) {
    // PHP will handle the success alert upon successful form submission
  }

  // Vanilla JS Number Counter Animation
  const counters = document.querySelectorAll(".counter");
  if (counters.length > 0) {
    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const counter = entry.target;
          const target = +counter.innerText;
          counter.innerText = '1';

          const speed = 100;
          const increment = target / speed;

          const updateCount = () => {
            const current = +counter.innerText;
            if (current < target) {
              counter.innerText = Math.ceil(current + increment);
              setTimeout(updateCount, 20);
            } else {
              counter.innerText = target;
            }
          };

          updateCount();
          observer.unobserve(counter);
        }
      });
    }, { threshold: 0.5 });

    counters.forEach(counter => {
      observer.observe(counter);
    });
  }
});
