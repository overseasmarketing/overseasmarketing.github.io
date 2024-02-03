<?php
// CHECK'S IF LOGIN SESSION ALREADY EXISTS? IF NOT GO BACK TO LOGIN PAGE
session_start();
if (!isset($_SESSION['LOGGED_IN']) || $_SESSION['LOGGED_IN'] != true) {
    header("location: login");
    exit;
}
?>