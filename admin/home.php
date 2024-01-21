<?php require 'login-checker.php'; ?>

<!doctype html>
<html lang="en">

<!-- Header -->
<?php include 'head.php'; ?>

<body>
    <div class="container">
        <!-- CONTAINER START -->
        <!-- Section: Intro -->
        <!-- <div class="alert alert-primary">
            This is a demo version of Quadmin.
        </div> -->
        <div class="alert p-0 m-0">
            <h1>Welcome,
                <?php echo $_SESSION['name']; ?>
            </h1>
        </div>
        <p>
            Quadmin is a comprehensive admin panel designed to empower website owners with a robust set of
            tools for efficient and user-friendly website management. Built on the PHP and MDB,
            Quadmin offers a secure, flexible, and scalable solution to ensure that you can deliver the best
            possible experience to your clients.
        </p>
        <hr>
        <!-- Section: Cards -->
        <div class="row">
            <!-- Card Zero -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 my-1">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">
                            Your Domain :
                            <a href="<?php echo $_SESSION['URL']; ?>">
                                <?php echo $_SESSION['DOMAIN']; ?>
                            </a>
                        </h2>
                        <div class="card-text">

                        </div>
                    </div>
                </div>
            </div>
            <!-- Card One -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 my-1">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Website Status</h2>
                        <div class="card-text">
                            <div id="loading" class="animate__animated animate__fadeIn">
                                <center>
                                    <div class="spinner-border " role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div><br>
                                    <span>Checking...</span>
                                </center>
                            </div>
                            <script>
                            setTimeout(() => {
                                document.getElementById("loading").style.display = "none";
                                document.getElementById("result").style.display = "block";
                            }, 2000)
                            </script>
                            <div id="result" style="display: none;">
                                <?php
                                $URL = $_SESSION['URL'];
                                $domain_url = $URL;
                                function get_http_response_code($domain_url)
                                {
                                    $headers = get_headers($domain_url);
                                    return substr($headers[0], 9, 3);
                                }

                                $get_http_response_code = get_http_response_code($domain_url);

                                if ($get_http_response_code == 200) {
                                    echo "
                                <span class='text-success p-2 m-2'>
                                    <i class='fa-regular fa-circle-check'></i>
                                    &nbsp;    
                                    HTTP RESPONSE " . $get_http_response_code . " OK
                                </span>
                            ";
                                } else {
                                    echo "
                                <span class='text-danger p-2 m-2'>
                                    <i class='fa-regular fa-circle-xmark'></i>
                                    &nbsp;
                                    ERROR RESPONSE " . $get_http_response_code . "
                                </span>
                            ";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card Two  -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 my-1">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Notifications</h2>
                        <div class="card-text">
                            <span class="text-secondary p-2 m-2">
                                <i class="fa-solid fa-triangle-exclamation"></i>
                                &nbsp;
                                No notifications from the developer.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CONTAINER END -->
    </div>
</body>

<!-- Footer -->
<?php include 'footer.php'; ?>

</html>