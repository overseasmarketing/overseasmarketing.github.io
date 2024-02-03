<?php require 'login-checker.php'; ?>

<!doctype html>
<html lang="en">

<!-- Header -->
<?php include 'head.php'; ?>

<body class="bg-dark text-white">
    <div class="container-fluid p-5">

        <div class="introduction">
            <div class="alert p-0 m-0">
                <h1>
                    Mail Sender
                </h1>
            </div>
            <p>
                You can use this form below to send emails to anyone using your webserver.
            </p>
            <hr>
        </div>

        <!-- Section: Cards -->
        <div class="row">
            <!-- Card Zero -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 my-1">
                <div class="card glass-card h-100">
                    <div class="card-body">
                        <form action="mail-sender.php" method="post">

                            <div class="alert alert-outline">
                                <?php echo "From: noreply@" . $_SESSION['DOMAIN']; ?>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="to">To:</label>
                                <input type="email" id="to" name="mail-to" class="form-control" required />
                            </div>

                            <?php
                            echo "
                            <!-- From input -->
                            <div style='display: none;' class='form-outline mb-4'>
                                <input type='email' id='from' name='mail-from' class='form-control' value='no-reply@" . $_SESSION['DOMAIN'] . "' required />
                                <label class='form-label' for='from'>From:</label>
                            </div>
                            ";
                            ?>

                            <!-- Subject input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="subject">Subject:</label>
                                <input type="text" id="subject" name="mail-subject" class="form-control" required />
                            </div>

                            <!-- Message input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="message">Message:</label>
                                <textarea class="form-control" id="message" name="mail-message" rows="4"
                                    required></textarea>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-light btn-block mb-4">
                                Send Mail
                            </button>
                        </form>
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