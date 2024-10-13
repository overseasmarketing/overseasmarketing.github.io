<?php

include("settings.php");

// Get the current client environment (localhost or server)
$getClient = $_SERVER['SERVER_NAME'];

// Define database credentials based on the environment
if ($getClient == "localhost") {
  // Developer environment (Localhost)
  $SERVER_NAME = "localhost";
  $USERNAME = "root";
  $PASSWORD = "";
  $DATABASE = $DB_DATABASE_LOCAL;
} else {
  // Production environment (Actual server)
  $SERVER_NAME = "localhost"; // Assuming DB server is localhost; adjust if different
  $USERNAME = $DB_USERNAME; // These should come from settings.php or environment variables
  $PASSWORD = $DB_PASSWORD;
  $DATABASE = $DB_DATABASE;
}

// Establish database connection using mysqli
$conn = mysqli_connect($SERVER_NAME, $USERNAME, $PASSWORD, $DATABASE);

// Check connection and handle errors
if (!$conn) {
  // Log the error to a file (better for production environments)
  error_log("DB-CONNECT CONNECTION ERROR: " . mysqli_connect_error());

  // Optionally display a user-friendly message in production
  if ($getClient != "localhost") {
    die("Database connection error. Please try again later.");
  } else {
    die("DB-CONNECT CONNECTION ERROR: " . mysqli_connect_error()); // For development environment
  }
}

?>