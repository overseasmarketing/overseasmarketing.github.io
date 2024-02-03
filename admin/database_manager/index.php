<?php

include 'head.php';

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all tables in the database
$tables = array();
$result = $conn->query("SHOW TABLES");
if (!$result) {
    die("Error: " . $conn->error);
}

while ($row = $result->fetch_row()) {
    $tables[] = $row[0];
}


echo "<body class='bg-dark text-white'>";
echo "<div class='container-fluid p-5'>";
// Display the list of tables
echo "<h2>Tables in the database <i class='badge bg-secondary m-0 p-2'>{$DB_DATABASE}</i></h2>";
foreach ($tables as $table) {
    echo "<span><a class='btn btn-light m-1' href=\"?table=" . urlencode($table) . "\"><i class='fa fa-solid fa-table m-0 p-0'></i>&nbsp;{$table}</a></span>";
}

// Display table contents if a table is selected
if (isset($_GET['table'])) {
    $selectedTable = $_GET['table'];

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM {$selectedTable}");
    if (!$stmt) {
        die("Error: " . $conn->error);
    }

    $stmt->execute();
    $result = $stmt->get_result();

    // Display table header
    echo "<br><br>";
    echo "<h2>Contents of table <i class='badge bg-secondary m-0 p-2'>{$selectedTable}</i></h2><br>";
    echo "<table class='table table-dark table-striped table-sm'>";
    echo "<tr>";
    while ($fieldinfo = $result->fetch_field()) {
        echo "<th class=''>{$fieldinfo->name}</th>";
    }
    echo "<th>action</th>"; // Add an extra column for actions
    echo "</tr>";

    // Display table rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>{$value}</td>";
        }
        // Add action buttons
        echo "<td>
                <a class='btn btn-secondary btn-sm' href='edit.php?table={$selectedTable}&id={$row['id']}'><i class='fa fa-solid fa-pen'></i></a>
                <a class='btn btn-secondary btn-sm' href='delete.php?table={$selectedTable}&id={$row['id']}'><i class='fa fa-solid fa-trash'></i></a>
              </td>";
        echo "</tr>";
    }

    echo "</table>";

    // Add button for adding new data
    echo "<a class='btn btn-success' href='add.php?table={$selectedTable}'>Add New</a>";

    $stmt->close();
}
echo "</div>";
echo "</body>";

// Close the connection
$conn->close();

?>