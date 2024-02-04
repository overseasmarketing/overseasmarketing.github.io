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
    $DATE = $_POST["date"];

    // Fetch USERNAME & PASSWORDS from a 'admin_users'
    $sql = "SELECT * FROM `admin_users` WHERE `username` = '$USERNAME';";

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


        // Update Date
        $sql = "UPDATE `admin_users` SET `date` = '$DATE' WHERE `username` = '$USERNAME';";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        } else {
            // Redirect
            header("location: index");
        }

    } else {
        $showError = "<script>alert('Invalid Credentials');</script>";
    }
}

if ($login) {
    echo '
    <script>
        console.log("Logged In!");
    </script>
    ';
}
if ($showError) {
    echo '
    <script>
        alert("Incorrect Username or Password!");
    </script>
    ';
}

?>

<body>

    <main>
        <div class="container-fluid bg-dark">
            <div style="height: 100vh;" class="d-flex justify-content-center align-items-center">
                <div class="card glass-card p-5">
                    <div class="card-body">
                        <h1 style="font-weight: bold; text-align: center;">QUADMIN</h1>
                        <p style="font-size: small; text-align: center; font-style: italic;">
                            Login to your Quadmin Account
                        </p>
                        <hr>
                        <form method="POST" action="login.php">
                            <!-- Username input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="username">Username</label>
                                <input type="username" name="username" id="username" class="form-control"
                                    autocomplete="off">
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control"
                                    autocomplete="off">
                            </div>

                            <!-- Login Date -->
                            <input type="hidden" name="date" value="<?php echo date('d-m-Y'); ?>" id="date"
                                class="form-control" readonly>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-light w-100">Log in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

<?php require 'footer.php' ?>

</html>