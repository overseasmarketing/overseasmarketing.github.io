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

    // Build the SET part of the SQL query dynamically
    $setClause = "";
    foreach ($_POST as $fieldName => $fieldValue) {
        // Assuming columns in the database match the form field names
        $setClause .= "{$fieldName} = '" . $conn->real_escape_string($fieldValue) . "', ";
    }
    $setClause = rtrim($setClause, ", ");

    // Construct the full SQL query
    $sql = "UPDATE {$selectedTable} SET {$setClause} WHERE id = {$recordId}";

    // Execute the update
    if ($conn->query($sql)) {
        echo "<script>notification('Record updated successfully.')</script>";
        header("Location: index?table={$selectedTable}");
    } else {
        echo "<script>
notification('Error updating record: " . $conn->error . "')
</script>";
    }
} else {
    echo "<p>Invalid URL parameters.</p>";
}

// Close the connection
$conn->close();

?>