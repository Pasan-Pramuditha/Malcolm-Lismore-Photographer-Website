<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
date_default_timezone_set('Asia/Colombo');
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photography_db";

// Connect to Database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Fetch logged in user's details for auto-filling the form
$user_name = "";
$user_email = "";
if (isset($_SESSION['user_id'])) {
    $uid = $_SESSION['user_id'];
    $stmt = $conn->prepare("SELECT name, email FROM users WHERE id = ?");
    $stmt->bind_param("i", $uid);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($row = $result->fetch_assoc()) {
        $user_name = $row['name'];
        $user_email = $row['email'];
    }
    $stmt->close();
}

// Handle Form Submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? $conn->real_escape_string($_POST['name']) : '';
    $email = isset($_POST['email']) ? $conn->real_escape_string($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? $conn->real_escape_string($_POST['phone']) : '';
    $enquiryType = isset($_POST['enquiryType']) ? $conn->real_escape_string($_POST['enquiryType']) : '';
    $eventDateInput = isset($_POST['eventDate']) ? $_POST['eventDate'] : '';
    $eventDate = !empty($eventDateInput) ? "'" . $conn->real_escape_string($eventDateInput) . "'" : "NULL";
    $location = isset($_POST['location']) ? $conn->real_escape_string($_POST['location']) : '';
    $message = isset($_POST['message']) ? $conn->real_escape_string($_POST['message']) : '';

    // Insert Query
    $sql = "INSERT INTO messages (name, email, phone, enquiry_type, event_date, location, message) 
            VALUES ('$name', '$email', '$phone', '$enquiryType', $eventDate, '$location', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Success!',
                    text: 'Message sent successfully! We will contact you soon.',
                    icon: 'success',
                    confirmButtonColor: '#fab700',
                    customClass: { popup: 'glass-popup' },
                    backdrop: 'rgba(0,0,0,0.6)'
                });
            });
        </script>";
    } else {
        $error_msg = addslashes($conn->error);
        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Error!',
                    text: 'Error sending message: $error_msg',
                    icon: 'error',
                    confirmButtonColor: '#fab700',
                    customClass: { popup: 'glass-popup' },
                    backdrop: 'rgba(0,0,0,0.6)'
                });
            });
        </script>";
    }
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
            <button id="loginBtn" class="btn-login">
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

  <section class="banner-area relative" id="Contact Us">
    <div class="overlay overlay-bg"></div>
    <div class="container">
      <div class="row d-flex align-items-center justify-content-center">
        <div class="about-content col-lg-12" data-aos="fade-down">
          <h1 class="text-white">Contact Us</h1>
          <p class="text-white link-nav">
            <a href="index.php">Home </a>
            <span class="lnr lnr-arrow-right"></span>
            <a href="Contact.php">Contact Us</a>
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="premium-contact-section">
    <div class="premium-contact-container">
      <!-- Contact Info (Left) -->
      <div class="premium-contact-info" data-aos="fade-right">
        <h2>Get in Touch</h2>
        <p>We'd love to hear from you. Please fill out the form or reach out using the details below.</p>

        <div class="premium-info-item">
          <i class="fas fa-map-marker-alt"></i>
          <div class="premium-info-text">
            <h4>Office Address</h4>
            <span>123 Highland Avenue Glencoe,<br />North West Scotland</span>
          </div>
        </div>

        <div class="premium-info-item">
          <i class="fas fa-phone"></i>
          <div class="premium-info-text">
            <h4>Call Us</h4>
            <span>011 25 48 932<br />Mon - Fri, 9am - 6pm</span>
          </div>
        </div>

        <div class="premium-info-item">
          <i class="fas fa-envelope"></i>
          <div class="premium-info-text">
            <h4>Email Us</h4>
            <span>malcomfoto@gmail.com</span>
          </div>
        </div>
      </div>

      <!-- Contact Form (Right) -->
      <div class="premium-contact-form" data-aos="fade-left">
        <h3>Send a Message</h3>
        <p>Let us know about your upcoming event or photography needs.</p>
        <form id="contactForm" action="Contact.php" method="POST">
          <div class="form-group-row">
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Your Name" id="name" value="<?php echo htmlspecialchars($user_name); ?>" required />
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Your Email" id="email" value="<?php echo htmlspecialchars($user_email); ?>" required />
            </div>
          </div>

          <div class="form-group-row">
            <div class="form-group">
              <input type="tel" name="phone" class="form-control" placeholder="Phone Number" id="phone" required />
            </div>
            <div class="form-group">
              <select name="enquiryType" class="form-control" id="enquiryType" required>
                <option value="" disabled selected>Type of Enquiry</option>
                <option value="wedding">Wedding Packages</option>
                <option value="portrait">Portrait Sessions</option>
                <option value="prints">Prints & Canvases</option>
                <option value="landscape">Landscape Packages</option>
                <option value="wildlife">Wildlife Packages</option>
                <option value="event">Event Packages</option>
                <option value="other">Other</option>
              </select>
            </div>
          </div>

          <div class="form-group-row">
            <div class="form-group">
              <input type="date" name="eventDate" class="form-control" id="eventDate" title="Date of Event" min="<?php echo date('Y-m-d'); ?>" />
            </div>
            <div class="form-group">
              <input type="text" name="location" class="form-control" placeholder="Event Location (Optional)" id="location" />
            </div>
          </div>

          <div class="form-group mb-20">
            <textarea name="message" class="form-control" placeholder="Message / Additional Details" id="message" required></textarea>
          </div>

          <button type="submit" class="premium-submit-btn" id="submitContactBtn">
            Send Message <i class="fas fa-paper-plane ml-2"></i>
          </button>
        </form>
      </div>
    </div>
  </section>

  <div class="container mb-50" class="mb-50">
    <div class="row">
      <div class="col-12" data-aos="zoom-in">
        <iframe src="https://maps.google.com/maps?q=The+Highland+Haven,+Scotland&t=&z=15&ie=UTF8&iwloc=&output=embed"
          width="100%" height="450" class="map-frame"
          allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </div>

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
