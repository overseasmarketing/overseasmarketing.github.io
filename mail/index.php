<!DOCTYPE html>
<html>

<?php include '../head.php'; ?>

<style>
    input,
    select {
        box-shadow: none !important;
    }
</style>

<body>
    <div class="container-fluid bg-primary">
        <div class="container">
            <div style="height: 100vh;" class="row d-flex align-items-center  justify-content-center">
                <div class="col-sm-12 col-md-2 col-lg-4"></div>
                <div class="col-sm-12 col-md-8 col-lg-4 bg-white p-5">
                    <h1>Overseas Email Sender</h1>
                    <hr>
                    <form action="send-mail.php" method="POST">
                        <input type="hidden" name="sent_date" value="<?php echo date('d-m-Y'); ?>">
                        <div class="mb-3">
                            <select name="email_type" class="form-control" required>
                                <option value="approach-mail-payment-gateway" selected>Email: Approach Payment Gateway
                                </option>
                                <option value="approach-mail">Email: Approach New Client</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class="fa fa-user"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Username" name="user">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                        </div>
                        <button class="btn btn-primary w-100" type="submit">Send</button>
                    </form>
                </div>
                <div class="col-sm-12 col-md-2 col-lg-4"></div>
            </div>
        </div>
    </div>
</body>

<!-- Bootstrap JS -->
<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js'></script>

</html>