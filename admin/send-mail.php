<?php require 'login-checker.php'; ?>

<!doctype html>
<html lang="en">

<!-- Header -->
<?php include 'head.php'; ?>

<body>
    <div class="container">
        <!-- CONTAINER START -->
        <!-- Section: Intro -->
        <div class="alert alert-primary">
            Send Emails
        </div>
        <div class="alert p-0 m-0">
            <h1>Welcome,
                <?php echo $_SESSION['name']; ?>
            </h1>
        </div>
        <p>
            You can use this form below to send emails to anyone using your webserver.
        </p>
        <hr>
        <!-- Section: Cards -->
        <div class="row">
            <!-- Card Zero -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 my-1">
                <div class="card h-100">
                    <div class="card-body">
                        <form action="mail-sender.php" method="post">

                            <div class="alert alert-light">
                                <?php echo "From: noreply@" . $_SESSION['DOMAIN']; ?>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="to" name="mail-to" class="form-control" required />
                                <label class="form-label" for="to">To:</label>
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
                                <input type="text" id="subject" name="mail-subject" class="form-control" required />
                                <label class="form-label" for="subject">Subject:</label>
                            </div>

                            <!-- Message input -->
                            <div class="form-outline mb-4">
                                <textarea class="form-control" id="message" name="mail-message" rows="4"
                                    required></textarea>
                                <label class="form-label" for="message">Message:</label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">
                                <i class="fa-solid fa-paper-plane"></i>
                                &nbsp;
                                Send EMail
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