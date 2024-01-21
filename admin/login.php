<!doctype html>
<html lang="en">

<?php require 'head.php' ?>
<?php require 'settings.php' ?>

<?php

$login = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include 'db-connect.php';

    $USERNAME = $_POST["username"];
    $PASSWORD = $_POST["password"];
    $LAST_LOGIN = $_POST["last_login"];

    // Fetch USERNAME & PASSWORDS from a 'admin_users'
    $sql = "SELECT * FROM admin_users WHERE username ='$USERNAME' AND password ='$PASSWORD'";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result);
    // $fullname = $row['fullname'];

    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $login = true;
        session_start();
        // CREATE SESSION VARIABLES
        $_SESSION['LOGGED_IN'] = true;
        // SESSION VARIABLE : Name of user form database
        $_SESSION['name'] = $row['name'];
        // SESSION VARIABLE : URL
        $_SESSION['URL'] = $settings_url;
        // SESSION VARIABLE : DOMAIN
        $_SESSION['DOMAIN'] = $settings_domain;

        // UPDATE LAST LOGIN
        $sql = "UPDATE admin_users SET last_login_date='$LAST_LOGIN' WHERE username='$USERNAME'";
        $result = mysqli_query($conn, $sql);

        // Redirect
        header("location: index.php");
    } else {
        $showError = "<script>alert('Invalid Credentials');</script>";
    }
}

if ($login) {
    echo 'Logged In'; // DEBUG : Works when not redirected to index.php
}
if ($showError) {
    echo '<script>alert("Incorrect Username or Password!");</script>';
}

?>

<body>

    <main>


        <div style="width: 100vw; height: 100vh;" class="container d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-12">
                    <div class="card p-3 m-3">
                        <div class="card-body">
                            <h1 style="font-weight: bold; text-align: center;">QUADMIN</h1>
                            <p style="font-size: small; text-align: center; font-style: italic;">
                                Login to your Quadmin Account
                            </p>
                            <hr>
                            <form method="POST" action="login.php">
                                <!-- Username input -->
                                <div class="form-outline mb-4">
                                    <input type="username" name="username" id="username" class="form-control"
                                        autocomplete="off" />
                                    <label class="form-label" for="username">Username</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" name="password" id="password" class="form-control"
                                        autocomplete="off" />
                                    <label class="form-label" for="password">Password</label>
                                </div>

                                <!-- Current Date input (hidden) -->
                                <div class="form-outline mb-4">
                                    <input type="text" name="last_login" id="last_login" class="form-control"
                                        value="<?php echo date("d-m-Y"); ?>" hidden>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-dark btn-block">Log in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

<?php require 'footer.php' ?>

</html>