<?php

// Get Message Details
$alert = "NEW MESSAGE - Overseas Marketing";
$name =  "Name: " . $_POST['uoxbp'];
$email =  "Email: " . $_POST['xmtmc'];
$message =  "Message: " . $_POST['tthwy'];

// Test Message Details
// $alert = "NEW MESSAGE";
// $name =  "Name: " . "Crytomag";
// $email =  "Email: " . "Test";
// $message =  "Message: " . "Test";

if ($name == "Name: Crytomag" || $name == "Name: mag") {
  echo "Error";
} else {
  // Final Message String
  $final_message = $alert . "\n" . $name . "\n" . $email . "\n" . $message;

  $url = "https://api.telegram.org/bot5574225220:AAEt3GhQlJ0f5HZoQkmLUsRs0JXYA5psQLg/sendMessage?chat_id=-1001555684202&text=" . urlencode($final_message);
  // echo $url;

  // Send Request
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
  curl_setopt($ch, CURLOPT_TIMEOUT, 5);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
  curl_exec($ch);
  curl_close($ch);
}

echo "<script>window.location.href = 'https://overseasmarketing.studio/contact';</script>";
