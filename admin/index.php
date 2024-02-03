<?php require 'login-checker.php'; ?>

<!doctype html>
<html lang="en">

<!-- Header -->
<?php include 'head.php'; ?>
<?php include 'settings.php'; ?>
<?php include 'navbar.php'; ?>

<body class="bg-dark text-white">
    <main>

        <button style="border-bottom-right-radius: 15px !important;" class="btn btn-primary rounded-0" type="button"
            data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas">
            NavMenu
        </button>

        <div class="container-fluid m-0 p-0">
            <iframe class="main_frame" id="main_frame" src="home.php" frameborder="0"></iframe>
        </div>

    </main>
</body>

<!-- Footer -->
<?php include 'footer.php'; ?>

</html>