<?php require 'login-checker.php'; ?>

<!doctype html>
<html lang="en">

<!-- Header -->
<?php include 'head.php'; ?>
<?php include 'settings.php'; ?>
<?php include 'db-connect.php'; ?>

<body>
    <div class="container">
        <h2 class="mt-5">Client List</h2>

        <?php
        // Fetch all clients from the database
        $sql = "SELECT * FROM clients";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
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
                echo '<td>' . htmlspecialchars($row['Phone']) . '</td>';
                echo '<td>' . htmlspecialchars($row['Email']) . '</td>';
                echo '<td>' . htmlspecialchars($row['Address']) . '</td>';
                echo '<td>
                        <a href="edit_client.php?ClientID=' . htmlspecialchars($row['ClientID']) . '" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete_client.php?ClientID=' . htmlspecialchars($row['ClientID']) . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure you want to delete this client?\');">Delete</a>
                      </td>';
                echo '</tr>';
            }

            echo '</tbody>';
            echo '</table>';
        } else {
            echo '<div class="alert alert-info mt-4">No clients found.</div>';
        }

        $conn->close();
        ?>

    </div>

</body>

</html>