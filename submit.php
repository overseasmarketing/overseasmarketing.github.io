<?php

include 'admin/db-connect.php';

// Variables to be inserted into the table
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$country_code = htmlspecialchars($_POST['country_code']);
$phone = htmlspecialchars($_POST['phone']);
$message = htmlspecialchars($_POST['message']);
$date = htmlspecialchars($_POST['date']);

$phone = "+" . $country_code . " " . $phone;


// Sql query to be executed
$sql = "INSERT INTO contact_form (name, email, phone, message, date) VALUES ('$name', '$email', '$phone', '$message', '$date')";

// Execute the query
$result_db = mysqli_query($conn, $sql);


// Forwarding the data to the mail

// To
$to = "theoverseasmarketing@gmail.com";

// Subject
$subject = "New Contact Form Submission - Overseas Marketing";

// Message Template
$message = "

<!DOCTYPE html>
<html>

<head>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    .customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    .customers td,
    .customers th {
      border: 1px solid #404040;
      padding: 8px;
    }

    .customers tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .customers tr:hover {
      background-color: #ddd;
    }

    .customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: center;
      background-color: #404040;
      color: white;
    }

    .text-decoration-none{
        text-decoration: none;
    }
  </style>
</head>

<body>
  <h2>New Contact Form Submission</h2>
  <p>Source : Overseas Marketing</p>

  <table class='customers'>
    <th>Field</th>
    <th>Data</th>
    <tr>
      <td>Full Name</td>
      <td>" . $name . "</td>
    </tr>
    <tr>
      <td>Email</td>
      <td><a class='text-decoration-none' href='mailto:" . $email . "'>" . $email . "</a></td>
    </tr>
    <tr>
      <td>Phone Number</td>
      <td><a class='text-decoration-none' href='tel:" . $phone . "'>" . $phone . "</a></td>
    </tr>
    <tr>
      <td>Message</td>
      <td>" . $message . "</td>
    </tr>
    <tr>
      <td>Date</td>
      <td>" . $date . "</td>
    </tr>
  </table>
</body>

</html>

";

$header = "From:no-reply@overseasmarketing.co.in \r\n";

$header .= "MIME-Version: 1.0 \r\n";

$header .= "Content-type: text/html;charset=UTF-8 \r\n";

$result_mail = mail($to, $subject, $message, $header);

//echo $message; // Debugging

// if ($result_mail == true) {
//   echo "Message sent successfully!";
// } else {
//   echo "Sorry, unable to send mail!";
// }

// Ending Redirect
if ($result_db == true && $result_mail == true) {
  header("Location: https://overseasmarketing.co.in/contact-success");
} else {
  echo "<br>An Error Occurred<br>" . mysqli_error($conn);
}