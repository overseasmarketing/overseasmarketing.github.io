<?php
include 'head.php';
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
// header("Location:login.php");
session_destroy();
?>

<div class="container p-5">
    <span id="redirect-text"></span>
</div>


<script>
let redirectTextBox = document.getElementById("redirect-text")
let i = 4;
setInterval(() => {
    text = "You've been logged out.<br>You will be redirected back to login page in (" + i + ") Second(s)."
    redirectTextBox.innerHTML = text
    i--;
    if (i == 0) {
        window.location = "login";
    }
}, 1000);
</script>