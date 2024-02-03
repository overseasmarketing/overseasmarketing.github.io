<?php

include 'head.php';

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if both table and id are provided in the URL
if (isset($_GET['table']) && isset($_GET['id'])) {
    $selectedTable = $_GET['table'];
    $recordId = $_GET['id'];

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM {$selectedTable} WHERE id = ?");
    if (!$stmt) {
        die("Error: " . $conn->error);
    }

    // Bind parameters
    $stmt->bind_param('i', $recordId);  // Assuming 'id' is an integer

    // Execute the delete
    if ($stmt->execute()) {
        echo "<script>notification('Record deleted successfully.')</script>";
        header("Location: index.php?table={$selectedTable}");
    } else {
        echo "<script>notification('Error deleting record: " . $stmt->error . "')</script>";
    }

    $stmt->close();
} else {
    echo "<p>Invalid URL parameters.</p>";
}

// Close the connection
$conn->close();

?>