<?php
session_start();
$is_register = false;

// Database configuration
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "photography_db";

// Connect to Database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if there is a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ---------------- REGISTER LOGIC ----------------
    if (isset($_POST['action']) && $_POST['action'] == 'register') {
        $is_register = true;
        $name = $conn->real_escape_string($_POST['name']);
        $username_input = $conn->real_escape_string($_POST['username']);
        $email = $conn->real_escape_string($_POST['email']);
        $pass = $_POST['password'];
        
        // Hash password
        $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (name, username, email, password) VALUES ('$name', '$username_input', '$email', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        title: 'Success!',
                        text: 'Registration Successful! Please Sign In.',
                        icon: 'success',
                        confirmButtonColor: '#fab700',
                        customClass: { popup: 'glass-popup' },
                        backdrop: 'rgba(0,0,0,0.6)'
                    }).then(() => {
                        document.getElementById('flipInner').classList.remove('flipped');
                    });
                });
            </script>";
        } else {
            $error_msg = addslashes($conn->error);
            echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Registration Failed: $error_msg',
                        icon: 'error',
                        confirmButtonColor: '#fab700',
                        customClass: { popup: 'glass-popup' },
                        backdrop: 'rgba(0,0,0,0.6)'
                    });
                });
            </script>";
        }
    } 
    
    // ---------------- LOGIN LOGIC ----------------
    elseif (isset($_POST['action']) && $_POST['action'] == 'login') {
        $user_input = $conn->real_escape_string($_POST['username']); 
        $pass = $_POST['password'];

        // Allow login strictly with username
        $sql = "SELECT * FROM users WHERE username='$user_input'";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            
            // Verify password
            if (password_verify($pass, $row['password'])) {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['name'];
                
                echo "<script>
                    document.addEventListener('DOMContentLoaded', function() {
                        localStorage.setItem('isLoggedIn', 'true');
                        Swal.fire({
                            title: 'Welcome Back!',
                            text: 'Login Successful.',
                            icon: 'success',
                            confirmButtonColor: '#fab700',
                            customClass: { popup: 'glass-popup' },
                            backdrop: 'rgba(0,0,0,0.6)'
                        }).then(() => {
                            window.location.href = 'index.php';
                        });
                    });
                </script>";
            } else {
                echo "<script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Incorrect Password!',
                            icon: 'error',
                            confirmButtonColor: '#fab700',
                            customClass: { popup: 'glass-popup' },
                            backdrop: 'rgba(0,0,0,0.6)'
                        });
                    });
                </script>";
            }
        } else {
            echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        title: 'Error!',
                        text: 'User not found! Please register first.',
                        icon: 'error',
                        confirmButtonColor: '#fab700',
                        customClass: { popup: 'glass-popup' },
                        backdrop: 'rgba(0,0,0,0.6)'
                    }).then(() => {
                        document.getElementById('flipInner').classList.add('flipped');
                    });
                });
            </script>";
        }
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Malcolm Lismore Photography</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet" />
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- AOS CSS for animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Premium Login CSS -->
    <link rel="stylesheet" href="css/login.css" />
    
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body class="login-page">
    
    <!-- Back to Home Button -->
    <a href="index.php" class="back-home" data-aos="fade-down" data-aos-delay="200">
      <i class="fas fa-arrow-left"></i> Home
    </a>

    <!-- 3D Flip Login/Register Container -->
    <div class="flip-container" data-aos="zoom-in" data-aos-duration="1200">
      <div class="flip-inner <?php echo $is_register ? 'flipped' : ''; ?>" id="flipInner">
        <!-- Front Side: Login -->
        <div class="flip-front">
          <h2>Welcome Back</h2>
          <p class="subtitle">Sign in to manage your bookings and view your gallery</p>
          
          <form id="loginForm" action="login.php" method="POST">
            <input type="hidden" name="action" value="login">
            <!-- Username Field -->
            <div class="form-group-login">
              <input
                type="text"
                id="username"
                name="username"
                required
                placeholder="Username"
              />
              <i class="fas fa-user"></i>
            </div>

            <!-- Password Field -->
            <div class="form-group-login">
              <input
                type="password"
                id="password"
                name="password"
                required
                placeholder="Password"
              />
              <i class="fas fa-lock"></i>
            </div>

            <!-- Options -->
            <div class="login-options">
              <label for="remember">
                <input type="checkbox" id="remember" name="remember" />
                Remember me
              </label>
              <a href="#">Forgot password?</a>
            </div>

            <!-- Submit Button -->
            <div>
              <button type="submit" class="btn-login-submit">Sign In</button>
            </div>

            <!-- Register Link -->
            <div class="login-footer">
              Don't have an account? <a href="javascript:void(0)" onclick="document.getElementById('flipInner').classList.add('flipped')">Register Now</a>
            </div>
          </form>
        </div>

        <!-- Back Side: Registration -->
        <div class="flip-back">
          <h2>Create Account</h2>
          <p class="subtitle">Create an account to book sessions and access your private gallery</p>
          
          <form id="registerForm" action="login.php" method="POST">
            <input type="hidden" name="action" value="register">
            <!-- Full Name Field -->
            <div class="form-group-login">
              <input
                type="text"
                id="reg-name"
                name="name"
                required
                placeholder="Full Name"
              />
              <i class="fas fa-user-circle"></i>
            </div>
            
            <!-- Username Field -->
            <div class="form-group-login">
              <input
                type="text"
                id="reg-username"
                name="username"
                required
                placeholder="Username"
              />
              <i class="fas fa-user"></i>
            </div>
            
            <!-- Email Field -->
            <div class="form-group-login">
              <input
                type="email"
                id="reg-email"
                name="email"
                required
                placeholder="Email Address"
              />
              <i class="fas fa-envelope"></i>
            </div>

            <!-- Password Field -->
            <div class="form-group-login">
              <input
                type="password"
                id="reg-password"
                name="password"
                required
                placeholder="Password"
              />
              <i class="fas fa-lock"></i>
            </div>

            <!-- Options -->
            <div class="login-options">
              <label for="terms">
                <input type="checkbox" id="terms" name="terms" required />
                I agree to the terms
              </label>
            </div>

            <!-- Submit Button -->
            <div>
              <button type="submit" class="btn-login-submit">Sign Up</button>
            </div>

            <!-- Back to Login Link -->
            <div class="login-footer">
              Already have an account? <a href="javascript:void(0)" onclick="document.getElementById('flipInner').classList.remove('flipped')">Sign In</a>
            </div>
          </form>
        </div>

      </div>
    </div>

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
