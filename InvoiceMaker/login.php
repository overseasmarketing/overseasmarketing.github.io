<!doctype html>
<html lang="en">

<?php
require 'head.php';
require 'settings.php';
require 'db-connect.php';

session_start();

$login = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $USERNAME = $_POST["username"];
    $PASSWORD = $_POST["password"];
    $DATE = date('Y-m-d');  // Use Y-m-d for better compatibility with databases

    // Prepare a secure query to avoid SQL injection
    $stmt = $conn->prepare("SELECT * FROM admin_users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $USERNAME, $PASSWORD);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        // Credentials are correct
        $login = true;

        // Create session variables
        $_SESSION['LOGGED_IN'] = true;
        $_SESSION['name'] = $row['name'];

        // Update last login date
        $stmt = $conn->prepare("UPDATE admin_users SET last_login_date = ? WHERE username = ?");
        $stmt->bind_param("ss", $DATE, $USERNAME);
        $stmt->execute();

        // Redirect to index page
        header("location: index");
        exit();
    } else {
        $showError = "Invalid Credentials";
    }
}

?>

<body>

    <main>
        <div class="container-fluid bg-dark">
            <div style="height: 100vh;" class="d-flex justify-content-center align-items-center">
                <div class="card glass-card p-5">
                    <div class="card-body">
                        <h1 style="font-weight: bold; text-align: center;">INVOICE MAKER</h1>
                        <hr>
                        <form method="POST" action="login.php">
                            <!-- Username input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="username">Username</label>
                                <input type="text" name="username" id="username" class="form-control" autocomplete="off"
                                    required>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control"
                                    autocomplete="off" required>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-dark w-100">Log in</button>

                            <!-- Error display -->
                            <?php if ($showError): ?>
                                <div class="alert alert-danger mt-3">
                                    <?php echo $showError; ?>
                                </div>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

<?php require 'footer.php' ?>

</html>