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
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['QuotationID'])) {
            $QuotationID = intval($_GET['QuotationID']);

            // Prepare and execute the delete statement
            $sql = "DELETE FROM quotations WHERE QuotationID = ?";
            if ($stmt = $conn->prepare($sql)) {
                $stmt->bind_param("i", $QuotationID);

                if ($stmt->execute()) {
                    // Redirect to index.php with a success message
                    header("Location: index.php?message=" . urlencode("Quotation deleted successfully") . "&status=success");
                    exit();
                } else {
                    echo "<div class='alert alert-danger' role='alert'>Error deleting Quotation: " . $stmt->error . "</div>";
                }

                $stmt->close();
            } else {
                echo "<div class='alert alert-danger' role='alert'>Error preparing statement: " . $conn->error . "</div>";
            }
        } else {
            echo "<div class='alert alert-danger' role='alert'>Invalid request. Quotation ID is missing.</div>";
        }

        $conn->close();
        ?>
        <br>
    </div>

</body>

</html>