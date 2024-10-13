<?php
// Start the session
session_start();

// Check if the user is logged in, if not redirect to the login page
if (!isset($_SESSION['LOGGED_IN']) || $_SESSION['LOGGED_IN'] !== true) {
    // Redirect to login page
    header("location: login");
    exit;
}

// Optionally, regenerate session ID to prevent session fixation attacks
session_regenerate_id(true);
?>