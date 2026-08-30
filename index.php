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

  <!-- ===================================================== CSS ============================================= -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/main.css?v=2" />
  <!-- AOS CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  
  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

  <!-- ============================================== Image Slide Show =============================================== -->

  <section class="relative section-gap mt-20" id="home">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./assets/images/index/1.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="./assets/images/index/2.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="./assets/images/index/3.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="./assets/images/index/4.jpg" class="d-block w-100" alt="..." />
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <!-- ============================================== Company Background =============================================== -->

  <section class="home-about-area section-gap bg-awd" id="about">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-8 col-md-12 home-about-left" data-aos="fade-right">
          <h6>Capturing the beauty of the natural world</h6>
          <h1>
            Malcolm Lismore <br />
            Freelance Photography
          </h1>
          <p class="sub">
            Based on the rugged North West coast of Scotland, specializing in
            landscape, wildlife, and event photography.
          </p>
          <p class="pb-20">
            My biggest passion in photography is for the natural world. I sell
            many images of the rugged Scottish landscape, its natural
            wildlife, and coastal birds. Beyond the wilderness, I also bring
            my artistic eye to weddings, portraits, and special events.
            Whether it's the sweeping drama of the Scottish Highlands or the
            intimate moments of your special day, my goal is to capture images
            that tell a compelling and beautiful story.
          </p>
          <a class="btn btn-info p-3" href="./about.php">More Details</a>
        </div>
        <div class="col-lg-4 col-md-12 home-about-right relative" class="h-400" data-aos="fade-left"></div>
      </div>
    </div>
  </section>

  <!-- ============================================== Main Services  =============================================== -->

  <section class="service-area section-gap" id="service" class="mt-neg-70">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 pb-30 header-text text-center" data-aos="fade-up">
          <h1 class="mb-10">What I Do</h1>
          <p></p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="single-service">
            <div class="thumb">
              <img src="./assets/images/index/Landscape Photography.png" alt="" height="250px" />
            </div>
            <h4>Landscape Photography</h4>
            <p>
              Experience the rugged beauty of the Scottish landscapes. From
              majestic mountains to serene lochs, my landscape prints bring
              the outdoors inside.
            </p>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="single-service">
            <div class="thumb">
              <img src="./assets/images/index/Wildlife Photography.jpg" alt="" height="250px" />
            </div>
            <h4>Wildlife Photography</h4>
            <p>
              Capturing the fleeting moments of Scotland's magnificent coastal
              birds and wildlife in their natural, untouched habitats.
            </p>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="single-service">
            <div class="thumb">
              <img src="./assets/images/index/Weddings & Events.jpg" alt="" height="250px" />
            </div>
            <h4>Weddings & Events</h4>
            <p>
              Professional photography for your special day. From intimate
              portraits to full wedding coverage, I ensure your memories are
              beautifully preserved.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================== INSTAGRAM =============================================== -->
  <section class="section__container instagram__container" id="portfolio">
    <h2 class="section__header">INSTAGRAM</h2>
    <div class="instagram__flex">
      <img src="assets/images/index/image-1.jpg" alt="instagram" />
      <img src="assets/images/index/image-2.jpg" alt="instagram" />
      <img src="assets/images/index/image-3.jpg" alt="instagram" />
      <img src="assets/images/index/image-4.jpg" alt="instagram" />
      <img src="assets/images/index/image-5.jpg" alt="instagram" />
      <img src="assets/images/index/image-6.jpg" alt="instagram" />
      <img src="assets/images/index/image-7.jpg" alt="instagram" />
      <img src="assets/images/index/image-8.jpg" alt="instagram" />
    </div>
  </section>

  <!-- ============================================== Js Counters =============================================== -->

  <section class="faq-area section-gap relative mb-50" class="mt-neg-70">
    <div class="overlay overlay-bg"></div>
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-3 col-md-6">
          <div class="single-faq">
            <div class="circle">
              <div class="inner"></div>
            </div>
            <h5><span class="counter">5</span>+</h5>
            <p>Years of Experience</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="single-faq">
            <div class="circle">
              <div class="inner"></div>
            </div>
            <h5><span class="counter">400</span>+</h5>
            <p>Photos Taken</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="single-faq">
            <div class="circle">
              <div class="inner"></div>
            </div>
            <h5><span class="counter">500</span>+</h5>
            <p>Happy Clients</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="single-faq">
            <div class="circle">
              <div class="inner"></div>
            </div>
            <h5 class="counter">23</h5>
            <p>Weddings Covered</p>
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
  <script src="js/main.js?v=2"></script>
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
