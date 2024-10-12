<?php

include 'admin/db-connect.php';

// Sanitize input function
function sanitize($data)
{
  return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

// Sanitize and assign form inputs
$name = sanitize($_POST['name']);
$email = sanitize($_POST['email']);
$country_code = sanitize($_POST['country_code']);
$phone = sanitize($_POST['phone']);
$fullPhone = "+" . $country_code . " " . $phone;
$meetingMode = sanitize($_POST['meeting_mode']);
$meetingDate = sanitize($_POST['meeting_date']);
$messageContent = sanitize($_POST['message']);
$formDate = sanitize($_POST['date']);

// SQL query for insertion
$sql = "INSERT INTO contact_form (name, email, phone, meeting_mode, meeting_date, message, date) VALUES ('$name', '$email', '$fullPhone', '$meetingMode', '$meetingDate', '$messageContent', '$formDate')";

// Execute the database query and check for success
$result_db = mysqli_query($conn, $sql);

// Email setup
$to = "theoverseasmarketing@gmail.com";
$subject = "New Contact Form Submission - Overseas Marketing - $name";

// Construct the HTML email message
$emailMessage = "
<!DOCTYPE html>
<html>
<head>
  <style>
    body { font-family: Arial, sans-serif; }
    .customers { font-family: Arial, sans-serif; border-collapse: collapse; width: 100%; }
    .customers td, .customers th { border: 1px solid #404040; padding: 8px; }
    .customers tr:nth-child(even) { background-color: #f2f2f2; }
    .customers th { padding: 12px; text-align: center; background-color: #404040; color: white; }
  </style>
</head>
<body>
  <h2>New Contact Form Submission</h2>
  <p>Source: Overseas Marketing</p>
  <table class='customers'>
    <tr><th>Field</th><th>Data</th></tr>
    <tr><td>Name</td><td>$name</td></tr>
    <tr><td>Email</td><td><a href='mailto:$email'>$email</a></td></tr>
    <tr><td>Phone</td><td><a href='tel:$fullPhone'>$fullPhone</a></td></tr>
    <tr><td>Meeting Mode</td><td>$meetingMode</td></tr>
    <tr><td>Meeting Date</td><td>$meetingDate</td></tr>
    <tr><td>Message</td><td>$messageContent</td></tr>
    <tr><td>Date</td><td>$formDate</td></tr>
  </table>
</body>
</html>";

// Set headers for HTML email
$headers = "From: Overseas Marketing <no-reply@overseasmarketing.co.in>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Send the email and check for success
$result_mail = mail($to, $subject, $emailMessage, $headers);

// Redirect based on result
if ($result_db && $result_mail) {
  header("Location: https://overseasmarketing.co.in/contact-success");
  exit();
} else {
  echo "<br>An error occurred.<br>";
  if (!$result_db) {
    echo "Database Error: " . mysqli_error($conn);
  }
  if (!$result_mail) {
    echo "Email Error: Unable to send email.";
  }
}

// Close the database connection
mysqli_close($conn);

?>