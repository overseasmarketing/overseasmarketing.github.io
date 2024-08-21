<?php require 'login-checker.php'; ?>

<!doctype html>
<html lang="en">

<!-- Header -->
<?php include 'head.php'; ?>
<?php include 'settings.php'; ?>
<?php include 'db-connect.php'; ?>

<body>
    <div class="container">
        <?php
        // Handle deletion
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $invoiceID = intval($_GET['invoiceID']);

            // Delete invoice from the database
            $sql = "DELETE FROM Invoices WHERE InvoiceID = $invoiceID";
            $conn->query($sql);
            $result = $conn->query($sql);

            if ($result) {
                echo "<div class='alert alert-success' role='alert'>Invoice deleted successfully!</div>";
                header("Location: index.php");
            } else {
                echo "<div class='alert alert-danger' role='alert'>Error deleting invoice!</div>";
            }
        }
        ?>
        <br>
    </div>

</body>

</html>