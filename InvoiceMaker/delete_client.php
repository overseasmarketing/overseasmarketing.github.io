<?php require 'login-checker.php'; ?>

<?php
// Check if ClientID is provided
if (isset($_GET['ClientID'])) {
    $clientID = intval($_GET['ClientID']); // Ensure ClientID is an integer

    if ($clientID > 0) {
        // Database connection
        include 'db-connect.php';

        // Prepare and execute the delete statement
        $sql = "DELETE FROM clients WHERE ClientID = ?";

        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("i", $clientID);

            if ($stmt->execute()) {
                // Success: Redirect to view_clients.php with a success message
                header("Location: view_clients.php?message=" . urlencode("Client deleted successfully") . "&status=success");
            } else {
                // Error: Redirect to view_clients.php with an error message
                header("Location: view_clients.php?message=" . urlencode("Error deleting client") . "&status=error");
            }

            $stmt->close();
        } else {
            // Error: Redirect to view_clients.php with an error message
            header("Location: view_clients.php?message=" . urlencode("Error preparing statement") . "&status=error");
        }

        $conn->close();
    } else {
        // Redirect to view_clients.php if ClientID is invalid
        header("Location: view_clients.php?message=" . urlencode("Invalid ClientID provided") . "&status=error");
    }
} else {
    // Redirect to view_clients.php if ClientID is not provided
    header("Location: view_clients.php?message=" . urlencode("Invalid request") . "&status=error");
}
?>