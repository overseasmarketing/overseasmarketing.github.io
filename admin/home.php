<?php require 'login-checker.php'; ?>

<!-- Header -->
<?php include 'head.php'; ?>
<?php include 'settings.php'; ?>

<body class="bg-dark text-white">
    <div class="container-fluid p-5">

        <div class="introduction">
            <div class="alert p-0 m-0">
                <h1>Welcome,
                    <?php echo $_SESSION['name']; ?>
                </h1>
            </div>
            <p>
                Quadmin Home
            </p>
            <hr>
        </div>

        <!-- Section: Cards -->
        <div class="row">
            <!-- Card Zero -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 my-1">
                <div class="card glass-card h-100">
                    <div class="card-body">
                        <h2 class="card-title m-0">
                            Your Domain :
                            <a class="text-decoration-none" href="<?php echo $_SESSION['URL']; ?>">
                                <?php echo $_SESSION['DOMAIN']; ?>
                            </a>
                        </h2>
                    </div>
                </div>
            </div>
            <!-- Card One -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 my-1">
                <div class="card glass-card h-100">
                    <div class="card-body">
                        <h2 class="card-title m-0">Website Status</h2>
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
                            <div class="animate_animated animate_fadeIn" id="result" style="display: none;">
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
                <div class="card glass-card h-100">
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
            <!-- Card three  -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 my-1">
                <div class="card glass-card h-100">
                    <div class="card-body">
                        <h2 class="card-title m-0">Website Health Checkup</h2>
                        <div class="card-text">
                            <div id="loading_health-check" class="animate__animated animate__fadeIn">
                                <center>
                                    <div class="spinner-border " role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div><br>
                                    <span>Checking...</span>
                                </center>
                            </div>
                            <script>
                                setTimeout(() => {
                                    document.getElementById("loading_health-check").style.display = "none";
                                    document.getElementById("result_health-check").style.display = "block";
                                }, 2000)
                            </script>
                            <div class="animate_animated animate_fadeIn" id="result_health-check"
                                style="display: none;">
                                <?php
                                $ch = curl_init($settings_url);

                                // Set cURL options
                                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                curl_setopt($ch, CURLOPT_HEADER, 0);

                                // Measure start time
                                $start_time = microtime(true);

                                // Execute cURL session
                                $response = curl_exec($ch);

                                // Measure end time
                                $end_time = microtime(true);

                                // Calculate load time
                                $load_time = $end_time - $start_time;

                                // Get HTTP status code
                                $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

                                // Close cURL session
                                curl_close($ch);

                                // Check the HTTP status and load time
                                if ($http_status == 200) {
                                    if ($load_time > 3) {
                                        echo "Warning: Website load time is greater than 3 seconds. Load time: " . round($load_time, 2) . " seconds.\n";
                                    } elseif ($load_time > 10) {
                                        echo "Danger: Website load time is dangerously high! Load time: " . round($load_time, 2) . " seconds.\n";
                                    } else {
                                        echo "<span class='text-success p-2 m-2'><i class='fa-regular fa-circle-check'></i>
                                        &nbsp;LOAD TIME: " . round($load_time, 2) . " SECONDS</span>";
                                    }
                                } else {
                                    echo "Website is not healthy. HTTP status code: $http_status\n";
                                }
                                ?>
                            </div>
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