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
            $QuotationID = intval($_GET['QuotationID']);

            // Delete Quotation from the database
            $sql = "DELETE FROM quotations WHERE QuotationID = $QuotationID";
            $conn->query($sql);
            $result = $conn->query($sql);

            if ($result) {
                echo "<div class='alert alert-success' role='alert'>Quotation deleted successfully!</div>";
                header("Location: index.php");
            } else {
                echo "<div class='alert alert-danger' role='alert'>Error deleting Quotation!</div>";
            }
        }
        ?>
        <br>
    </div>

</body>

</html>