<?php
session_start();
session_unset();
session_destroy();
// JavaScript will handle clearing localStorage before redirecting here,
// but just in case, we can also inject JS to clear it if accessed directly.
echo "<script>localStorage.removeItem('isLoggedIn'); window.location.href='index.php';</script>";
exit();
?>
