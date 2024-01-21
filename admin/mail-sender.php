<?php

// Header
include 'head.php';

// Forwarding the data to the mail
$TO = $_POST['mail-to'];
$SUBJECT = $_POST['mail-subject'];
$FROM = $_POST['mail-from'];
$MESSAGE = $_POST['mail-message'];

// Message
$to = $TO;
$subject = $SUBJECT;
$from = $FROM;
$message = "

<!DOCTYPE html>
<html>

<head>
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>
</head>

<body>
    " . $MESSAGE . "
</body>

</html>

";

$header = "From:" . $FROM . "\r\n";

$header .= "MIME-Version: 1.0 \r\n";

$header .= "Content-type: text/html;charset=UTF-8 \r\n";

$result_mail = mail($to, $subject, $message, $header);

if ($result_mail == true) {
    echo "
        <br>
        <div class='container-fluid'>
            <div class='alert alert-success'>Email sent successfully!</div>
        </div>
    ";
} else {
    echo "
        <br>
        <div class='container-fluid'>
            <div class='alert alert-danger'>Sorry, unable to send an Email!</div>
        </div>
    ";
}

echo "
<div class='p-5'>
    --EMAIL CONTENTS--
    <br>
    <span>
        TO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $to . "<br>
        FROM:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $from . "<br>
        SUBJECT:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $subject . "<br>
        MESSAGE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $message . "<br>
    </span>
</div>
";

// Footer
include 'footer.php';

?>