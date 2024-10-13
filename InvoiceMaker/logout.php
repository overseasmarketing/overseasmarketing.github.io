<?php
include 'head.php';
session_start();

// Unset all session variables
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

// Destroy the session
session_destroy();
?>

<body>
    <div class="container p-5">
        <span id="redirect-text"></span>
    </div>
</body>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const redirectTextBox = document.getElementById("redirect-text");
        let countdown = 4;

        const intervalId = setInterval(() => {
            redirectTextBox.innerHTML =
                `<h1>You've been logged out</h1><span>You will be redirected back to the login page in (${countdown}) Second(s)</span>`;
            countdown--;

            if (countdown === 0) {
                clearInterval(intervalId); // Stop the interval when the countdown reaches 0
                window.location.href = "login"; // Redirect to login page
            }
        }, 1000);
    });
</script>