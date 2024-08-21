<?php
include 'head.php';
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
session_destroy();
?>

<body>
    <div class="container p-5">
        <span id="redirect-text"></span>
    </div>
</body>


<script>
let redirectTextBox = document.getElementById("redirect-text")
let i = 4;
setInterval(() => {
    text = "<h1>You've been logged out</h1><span>You will be redirected back to login page in (" + i +
        ") Second(s)</span>"
    redirectTextBox.innerHTML = text
    i--;
    if (i == 0) {
        window.location = "login";
    }
}, 1000);
</script>