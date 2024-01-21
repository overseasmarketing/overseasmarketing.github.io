<?php require 'login-checker.php'; ?>

<!doctype html>
<html lang="en">

<!-- Header -->
<?php include 'head.php'; ?>
<?php include 'settings.php'; ?>

<body>
    <main>

        <!-- Button trigger modal -->
        <button style="display: none;" id="modal_trigger_btn" type="button" class="btn btn-light" data-bs-toggle="modal"
            data-bs-target="#staticBackdrop">
            &nbsp;
        </button>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class=" modal-content">
                    <div class="modal-body">
                        <div class="row p-2">
                            <div class="col-12">
                                <p class="text-danger" id="modal_text"></p>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Okay</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-3">
                    <div class="d-flex align-items-center">
                        <a class="text-dark" href="https://quantumbytestudios.in/GetQuadmin/">
                            <h2>
                                <b>
                                    Quadmin
                                </b>
                                <?php
                                // PLAN SUBSCRIPTION TYPE
                                $basic = '<b><span class="alert alert-success p-2 m-2 fs-6">BASIC</span></b>';
                                $premium = '<b><span class="alert alert-primary p-2 m-2 fs-6">PREMIUM</span></b>';
                                if ($plan_subscription_type == 'BASIC') {
                                    echo $basic;
                                } else if ($plan_subscription_type == 'PREMIUM') {
                                    echo $premium;
                                }
                                ?>
                            </h2>
                        </a>
                    </div>
                    <i>
                        v0.1 MDB-Build
                    </i>
                    <hr>
                    <ul class="list-group list-group-light">
                        <center>
                            <li class="list-group-item">
                                <button class="w-90 btn btn-dark text-left" onclick="changeFrameSrc('home.php')">
                                    <i class="fa-solid fa-house"></i>
                                    &nbsp;
                                    Home
                                </button>
                            </li>
                            <li class="list-group-item">
                                <button class="w-90 btn btn-primary text-left"
                                    onclick="changeFrameSrc('database-tables.php')">
                                    <i class="fa fa-table"></i>
                                    &nbsp;
                                    Database Tables
                                </button>
                            </li>
                            <li class="list-group-item">
                                <?php
                                if ($plan_subscription_type == "BASIC") {
                                    echo "
                                    <script>document.write(basic_button_sendmail);</script>
                                    ";
                                } elseif ($plan_subscription_type == "PREMIUM") {
                                    echo "
                                    <script>document.write(premium_button_sendmail);</script>
                                    ";
                                }
                                ?>
                            </li>
                            <li class="list-group-item">
                                <button class="w-90 btn btn-warning text-left" onclick="support()">
                                    <i class="fa-solid fa-headset"></i>
                                    &nbsp;
                                    Contact Support
                                </button>
                            </li>
                            <li class="list-group-item">
                                <button class="w-90 btn btn-danger text-left" onclick="logout()">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                    &nbsp;
                                    Log Out
                                </button>
                            </li>
                        </center>
                    </ul>
                </div>
                <div class="col-8 p-2">
                    <!-- Iframe -->
                    <iframe class="main_frame" id="main_frame" src="home.php" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </main>
</body>

<!-- Footer -->
<?php include 'footer.php'; ?>

</html>