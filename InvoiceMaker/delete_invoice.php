<?php
require 'login-checker.php';
require 'db-connect.php';

// Check if invoiceID is provided
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['invoiceID'])) {
    $invoiceID = intval($_GET['invoiceID']);

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM invoices WHERE InvoiceID = ?");
    $stmt->bind_param("i", $invoiceID);

    if ($stmt->execute()) {
        $stmt->close(); // Close the statement after execution
        // Redirect after successful deletion
        header("Location: index.php?status=success");
        exit(); // Always call exit after header to stop script execution
    } else {
        $stmt->close(); // Close the statement after execution
        // Error occurred while deleting the invoice
        header("Location: index.php?status=error");
        exit();
    }
}
?>

<!doctype html>
<html lang="en">

<!-- Header -->
<?php include 'head.php'; ?>
<?php include 'settings.php'; ?>

<body>
    <div class="container">
        <?php
        // Display success or error message based on URL parameter
        if (isset($_GET['status'])) {
            if ($_GET['status'] == 'success') {
                echo "<div class='alert alert-success' role='alert'>Invoice deleted successfully!</div>";
            } elseif ($_GET['status'] == 'error') {
                echo "<div class='alert alert-danger' role='alert'>Error deleting invoice!</div>";
            }
        }
        ?>
        <br>
    </div>
</body>

</html>