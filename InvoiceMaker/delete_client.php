<?php require 'login-checker.php'; ?>

<?php
// Check if ClientID is provided
if (isset($_GET['ClientID'])) {
    $clientID = htmlspecialchars($_GET['ClientID']);

    // Database connection
    include 'db-connect.php';

    // Prepare and execute the delete statement
    $sql = "DELETE FROM Clients WHERE ClientID = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $clientID);

        if ($stmt->execute()) {
            // Success: Redirect to view_clients.php with a success message
            header("Location: view_clients.php?message=Client deleted successfully");
        } else {
            // Error: Redirect to view_clients.php with an error message
            header("Location: view_clients.php?message=Error deleting client");
        }

        $stmt->close();
    } else {
        // Error: Redirect to view_clients.php with an error message
        header("Location: view_clients.php?message=Error preparing statement");
    }

    $conn->close();
} else {
    // Redirect to view_clients.php if ClientID is not provided
    header("Location: view_clients.php?message=Invalid request");
}
?>