<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!doctype html>
<html lang="zxx" class="no-js">

<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.png" />
  <!-- Author Meta -->
  <meta name="author" content="codepixer" />
  <!-- Meta Description -->
  <meta name="description" content="" />
  <!-- Meta Keyword -->
  <meta name="keywords" content="" />
  <!-- meta character set -->
  <meta charset="UTF-8" />
  <!-- Site Title -->
  <title>Malcolm Lismore Photography</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- ================================================  CSS  ============================================= -->

  <link rel="stylesheet" href="css/bootstrap.css" />

  <link rel="stylesheet" href="css/main.css" />
  <!-- AOS CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
  <!-- ============================================== Header And Navigation =============================================== -->

  <header id="header" class="home">
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-6 col-4 header-top-left pb-10 pt-10">
            <ul>
              <li class="text-white-15">
                <i class="fas fa-map-marker-alt"> </i> &nbsp; No : 123
                Highland Avenue Glencoe, North West Scotland
              </li>
            </ul>
          </div>
          <div class="col-lg-6 col-sm-6 col-8 header-top-right pb-10 pt-10">
            <a class="header-icon-link" class="pr-30">
              <i class="fas fa-phone"> </i> &nbsp; 011 25 48 932</a>
            <a class="header-icon-link">
              <i class="fas fa-envelope"></i> &nbsp; malcomfoto@gmail.com</a>
            <button onclick="window.location.href = 'login.php'" class="btn-login">
              Login <i class="fas fa-user"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="container main-menu">
      <div class="row align-items-center justify-content-between d-flex">
        <div id="logo">
          <a href="index.php"><img src="./assets/images/index/Logo.png" width="200px; " /></a>
        </div>
        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li class="menu-active">
              <a href="index.php" class="font-15">Home</a>
            </li>
            <li><a href="about.php" class="font-15">About</a></li>
            <li><a href="prices.php" class="font-15">Prices</a></li>
            <li class="menu-has-children">
              <a href="#" class="font-15">Gallery</a>
              <ul>
                <li>
                  <a href="gallery-landscape.php" class="font-15">Landscape</a>
                </li>
                <li>
                  <a href="gallery-wildlife.php" class="font-15">Wildlife</a>
                </li>
                <li>
                  <a href="gallery-events.php" class="font-15">Weddings & Events</a>
                </li>
              </ul>
            </li>

            <li>
              <a href="Contact.php" class="font-15">Contact Us</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <!-- ============================================== About Us Banner Area  =============================================== -->

  <section class="banner-area relative" id="about">
    <div class="overlay overlay-bg"></div>
    <div class="container">
      <div class="row d-flex align-items-center justify-content-center">
        <div class="about-content col-lg-12" data-aos="fade-down">
          <h1 class="text-white">Prices & Packages</h1>
          <p class="text-white link-nav">
            <a href="index.php">Home </a>
            <span class="lnr lnr-arrow-right"></span>
            <a href="prices.php"> Prices</a>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================== Manager's Note  =============================================== -->

  <section class="home-about-area section-gap aboutus-about" id="about">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-8 col-md-12 home-about-left" data-aos="fade-right">
          <h1>Investment & Pricing</h1>

          <p class="pb-20">
            I believe in transparent and fair pricing for all my photography
            services. Whether you are looking to purchase a beautiful
            landscape print for your home, or seeking comprehensive coverage
            for your wedding day, I offer a range of packages designed to meet
            your needs.<br />
            <br />

            For weddings and special events, I focus on capturing the day's
            narrative in a candid and unobtrusive manner, providing you with a
            collection of images that you will cherish for a lifetime. My
            portrait sessions are relaxed and tailored to highlight your
            unique personality.<br />
            <br />

            My fine art prints of Scottish landscapes and wildlife are
            produced using high-quality materials to ensure lasting beauty.
            Each print is carefully inspected and packaged before being
            shipped directly to you.<br />
            <br />

            Below you will find the starting prices for my most popular
            services. If you require a custom package or have any questions,
            please don't hesitate to reach out via the Enquiry form.
          </p>
        </div>
        <div class="col-lg-4 col-md-12 home-about-right relative" class="h-500 mt-neg-70" data-aos="fade-left"></div>
      </div>
    </div>
  </section>

  <!-- ===============================================  Mission Vision Strength =================================================== -->

  <section class="cat-area section-gap bg-abt" id="feature" class="mt-neg-80">
    <div class="container">
      <div class="row">
        <!-- Package 1: Wedding -->
        <div class="col-lg-4 mb-40" data-aos="fade-up">
          <div class="card pricing-card card-basic h-100 shadow-sm text-center py-4">
            <div class="card-body">
              <h5 class="card-title text-uppercase">Wedding Packages</h5>
              <h2 class="price mt-3">From $500</h2>
              <p class="desc mt-3">Comprehensive coverage for your special day, capturing every intimate moment.</p>
              <p class="per-month mt-4 text-uppercase">Per Event</p>
              <hr>
              <ul class="list-unstyled mt-4 mb-5">
                <li><i class="fas fa-check"></i> Half Day (5 hrs): $500</li>
                <li><i class="fas fa-check"></i> Full Day (10 hrs): $1,000</li>
                <li><i class="fas fa-check"></i> Pre-wedding consultation</li>
                <li><i class="fas fa-check"></i> High-resolution digital images</li>
                <li><i class="fas fa-check"></i> Online gallery & photo album</li>
              </ul>
              <a href="Contact.php?enquiry=wedding" class="btn btn-custom w-75">BOOK NOW</a>
            </div>
          </div>
        </div>

        <!-- Package 2: Portrait -->
        <div class="col-lg-4 mb-40" data-aos="fade-up">
          <div class="card pricing-card card-standard h-100 shadow-sm text-center py-4">
            <div class="card-body">
              <h5 class="card-title text-uppercase">Portrait Sessions</h5>
              <h2 class="price mt-3">$150</h2>
              <p class="desc mt-3">Relaxed and tailored portrait sessions highlighting your unique personality.</p>
              <p class="per-month mt-4 text-uppercase">Per Session</p>
              <hr>
              <ul class="list-unstyled mt-4 mb-5">
                <li><i class="fas fa-check"></i> 1-hour session</li>
                <li><i class="fas fa-check"></i> Individual or Family</li>
                <li><i class="fas fa-check"></i> 15 fully retouched images</li>
                <li><i class="fas fa-check"></i> Location of your choice</li>
                <li><i class="fas fa-check"></i> Additional Hours: $75/hr</li>
              </ul>
              <a href="Contact.php?enquiry=portrait" class="btn btn-custom w-75">BOOK NOW</a>
            </div>
          </div>
        </div>

        <!-- Package 3: Prints -->
        <div class="col-lg-4 mb-40" data-aos="fade-up">
          <div class="card pricing-card card-premium h-100 shadow-sm text-center py-4">
            <div class="card-body">
              <h5 class="card-title text-uppercase">Prints & Canvases</h5>
              <h2 class="price mt-3">From $40</h2>
              <p class="desc mt-3">High-quality prints of stunning landscapes and wildlife on premium materials.</p>
              <p class="per-month mt-4 text-uppercase">Per Print</p>
              <hr>
              <ul class="list-unstyled mt-4 mb-5">
                <li><i class="fas fa-check"></i> Standard Print A4: $40</li>
                <li><i class="fas fa-check"></i> Standard Print A3: $65</li>
                <li><i class="fas fa-check"></i> Premium archival paper</li>
                <li><i class="fas fa-check"></i> Large Canvas Prints: From $120</li>
                <li><i class="fas fa-check"></i> Custom framing options available</li>
              </ul>
              <a href="Contact.php?enquiry=prints" class="btn btn-custom w-75">ORDER NOW</a>
            </div>
          </div>
        </div>

        <!-- Package 4: Landscape -->
        <div class="col-lg-4 mb-40" data-aos="fade-up">
          <div class="card pricing-card card-basic h-100 shadow-sm text-center py-4">
            <div class="card-body">
              <h5 class="card-title text-uppercase">Landscape Packages</h5>
              <h2 class="price mt-3">$250</h2>
              <p class="desc mt-3">Experience the raw beauty of Scottish landscapes with our expert guidance.</p>
              <p class="per-month mt-4 text-uppercase">Per Tour</p>
              <hr>
              <ul class="list-unstyled mt-4 mb-5">
                <li><i class="fas fa-check"></i> Half-day guided tour</li>
                <li><i class="fas fa-check"></i> Location: Glencoe</li>
                <li><i class="fas fa-check"></i> Perfect for beginners</li>
                <li><i class="fas fa-check"></i> Commercial Licensing: Custom</li>
                <li><i class="fas fa-check"></i> High-resolution files available</li>
              </ul>
              <a href="Contact.php?enquiry=landscape" class="btn btn-custom w-75">BOOK NOW</a>
            </div>
          </div>
        </div>

        <!-- Package 5: Wildlife -->
        <div class="col-lg-4 mb-40" data-aos="fade-up">
          <div class="card pricing-card card-standard h-100 shadow-sm text-center py-4">
            <div class="card-body">
              <h5 class="card-title text-uppercase">Wildlife Packages</h5>
              <h2 class="price mt-3">$300</h2>
              <p class="desc mt-3">Capture Scotland's unique wildlife in their natural habitats.</p>
              <p class="per-month mt-4 text-uppercase">Per Safari</p>
              <hr>
              <ul class="list-unstyled mt-4 mb-5">
                <li><i class="fas fa-check"></i> Full-day Wildlife Safari: $300</li>
                <li><i class="fas fa-check"></i> Local transport included</li>
                <li><i class="fas fa-check"></i> Private Hide Hire: $100/day</li>
                <li><i class="fas fa-check"></i> Ideal for bird photography</li>
                <li><i class="fas fa-check"></i> Expert local knowledge</li>
              </ul>
              <a href="Contact.php?enquiry=wildlife" class="btn btn-custom w-75">BOOK NOW</a>
            </div>
          </div>
        </div>

        <!-- Package 6: Event -->
        <div class="col-lg-4 mb-40" data-aos="fade-up">
          <div class="card pricing-card card-premium h-100 shadow-sm text-center py-4">
            <div class="card-body">
              <h5 class="card-title text-uppercase">Event Packages</h5>
              <h2 class="price mt-3">$100/hr</h2>
              <p class="desc mt-3">Professional coverage for corporate events, parties, and special occasions.</p>
              <p class="per-month mt-4 text-uppercase">Per Hour</p>
              <hr>
              <ul class="list-unstyled mt-4 mb-5">
                <li><i class="fas fa-check"></i> Corporate & Private Events</li>
                <li><i class="fas fa-check"></i> Minimum 2 hours booking</li>
                <li><i class="fas fa-check"></i> Event Highlights Package: $400</li>
                <li><i class="fas fa-check"></i> Up to 4 hours of coverage</li>
                <li><i class="fas fa-check"></i> Private online gallery</li>
              </ul>
              <a href="Contact.php?enquiry=event" class="btn btn-custom w-75">BOOK NOW</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================== Footer   =============================================== -->

    <!-- Premium Glassmorphism Footer -->
  <footer class="premium-footer">
    <div class="container">
      <div class="row footer-content-wrapper">
        
        <!-- About Us Section -->
        <div class="col-lg-6 col-md-6 col-sm-12 footer-brand">
          <h4 class="footer-title">Malcolm Lismore</h4>
          <p class="footer-desc">
            Capturing the raw beauty of the Scottish landscape and the intimate moments of your special occasions. We turn fleeting moments into timeless memories.
          </p>
          <p class="footer-copyright">
            Copyright &copy; 2024 All rights reserved.
          </p>
        </div>

        <!-- Contact Section -->
        <div class="col-lg-5 offset-lg-1 col-md-6 col-sm-12 footer-contact">
          <h4 class="footer-title">Contact Us</h4>
          <ul class="footer-contact-list">
            <li>
              <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
              <div class="contact-text">123 Highland Avenue, Glencoe<br/>North West Scotland</div>
            </li>
            <li>
              <div class="contact-icon"><i class="fas fa-phone"></i></div>
              <div class="contact-text">011 25 48 932</div>
            </li>
            <li>
              <div class="contact-icon"><i class="fas fa-envelope"></i></div>
              <div class="contact-text">malcomfoto@gmail.com</div>
            </li>
          </ul>
          

        </div>
        
      </div>
    </div>
  </footer>
  <script src="js/vendor/jquery-2.2.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="js/vendor/bootstrap.min.js"></script>
  
  <script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>
  <!-- AOS JS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000,
      once: true
    });
  </script>
</body>

</html>
