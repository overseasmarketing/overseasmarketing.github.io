<?php
require 'login-checker.php';  // Ensure user is logged in

include 'settings.php';
include 'db-connect.php';

// Check database connection
if ($conn->connect_error) {
    die('<div class="alert alert-danger mt-4">Database connection failed: ' . $conn->connect_error . '</div>');
}
?>

<!doctype html>
<html lang="en">

<!-- Header -->
<?php include 'head.php'; ?>

<body>
    <div class="container-fluid">
        <h2 class="mt-5">Client List</h2>

        <?php
        // Fetch all clients from the database
        $sql = "SELECT * FROM clients";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result && $result->num_rows > 0) {
                echo '<table class="table table-striped mt-4">';
                echo '<thead><tr>';
                echo '<th>ID</th>';
                echo '<th>Name</th>';
                echo '<th>Phone</th>';
                echo '<th>Email</th>';
                echo '<th>Address</th>';
                echo '<th>Actions</th>';
                echo '</tr></thead>';
                echo '<tbody>';

                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($row['ClientID']) . '</td>';
                    echo '<td>' . htmlspecialchars($row['Name']) . '</td>';
                    echo '<td><a class="text-decoration-none" href="tel:' . htmlspecialchars($row['Phone']) . '">' . htmlspecialchars($row['Phone']) . '</a></td>';
                    echo '<td><a class="text-decoration-none" href="mailto:' . htmlspecialchars($row['Email']) . '">' . htmlspecialchars($row['Email']) . '</a></td>';
                    echo '<td>' . htmlspecialchars($row['Address']) . '</td>';
                    echo '<td>
                            <a href="edit_client.php?ClientID=' . urlencode($row['ClientID']) . '" class="btn btn-warning btn-sm"><i class="fa fa-solid fa-pen"></i></a>
                            <a href="delete_client.php?ClientID=' . urlencode($row['ClientID']) . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure you want to delete this client?\');"><i class="fa fa-solid fa-trash"></i></a>
                          </td>';
                    echo '</tr>';
                }

                echo '</tbody>';
                echo '</table>';
            } else {
                echo '<div class="alert alert-info mt-4">No clients found.</div>';
            }

            $stmt->close();
        } else {
            echo '<div class="alert alert-danger mt-4">Failed to retrieve clients: ' . $conn->error . '</div>';
        }

        $conn->close();
        ?>
    </div>

</body>

</html>