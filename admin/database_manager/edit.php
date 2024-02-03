<?php

include 'head.php';

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<body class='bg-dark text-white'>";
echo "<div class='container-fluid p-5'>";
// Check if both table and id are provided in the URL
if (isset($_GET['table']) && isset($_GET['id'])) {
    $selectedTable = $_GET['table'];
    $recordId = $_GET['id'];

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM {$selectedTable} WHERE id = ?");
    if (!$stmt) {
        die("Error: " . $conn->error);
    }

    $stmt->bind_param("i", $recordId); // Assuming 'id' is an integer, adjust if needed
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the record exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Display a form for editing the data
        echo "<h2>Edit Data - {$selectedTable}</h2>";
        echo "<form method='post' action='update.php?table={$selectedTable}&id={$recordId}'>";

        foreach ($row as $fieldName => $fieldValue) {
            // Display form fields for each column
            echo "<label for='{$fieldName}'>{$fieldName}:</label>";
            echo "<input class='form-control' type='text' name='{$fieldName}' value='{$fieldValue}'><br>";
        }

        echo "<button class='btn btn-secondary' type='submit'>Update</button>";
        echo "</form>";
    } else {
        echo "<p>Record not found.</p>";
    }

    $stmt->close();
} else {
    echo "<p>Invalid URL parameters.</p>";
}
echo "</div>";
echo "</body>";
// Close the connection
$conn->close();

?>