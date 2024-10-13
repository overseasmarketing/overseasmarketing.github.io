<?php require 'login-checker.php'; ?>

<!doctype html>
<html lang="en">

<!-- Header -->
<?php include 'head.php'; ?>
<?php include 'settings.php'; ?>
<?php include 'db-connect.php'; ?>

<body>
    <div class="container">
        <h2 class="mt-5">Edit Client</h2>

        <?php
        // Handle client update
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_client'])) {
            $clientID = intval($_POST['ClientID']);
            $name = htmlspecialchars($_POST['name']);
            $phone = htmlspecialchars($_POST['phone']);
            $email = htmlspecialchars($_POST['email']);
            $address = htmlspecialchars($_POST['address']);

            // Use a prepared statement to avoid SQL injection
            $stmt = $conn->prepare("UPDATE clients SET Name=?, Phone=?, Email=?, Address=? WHERE ClientID=?");
            $stmt->bind_param("ssssi", $name, $phone, $email, $address, $clientID);

            if ($stmt->execute()) {
                echo "<div class='alert alert-success mt-4'>Client updated successfully.</div>";
                echo "<script>setTimeout(function(){ window.location.href = 'index.php'; }, 2000);</script>";
                exit;
            } else {
                echo "<div class='alert alert-danger mt-4'>Error: " . $stmt->error . "</div>";
            }
            $stmt->close();
        }

        // Fetch client data for editing
        if (isset($_GET['ClientID'])) {
            $clientID = intval($_GET['ClientID']);
            $stmt = $conn->prepare("SELECT * FROM clients WHERE ClientID=?");
            $stmt->bind_param("i", $clientID);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $client = $result->fetch_assoc();
            } else {
                echo "<div class='alert alert-warning mt-4'>Client not found.</div>";
                exit;
            }
            $stmt->close();
        } else {
            echo "<div class='alert alert-warning mt-4'>Client ID is missing.</div>";
            exit;
        }
        ?>

        <form action="edit_client.php" method="post" class="mt-4">
            <input type="hidden" name="ClientID" value="<?php echo htmlspecialchars($client['ClientID']); ?>">

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name"
                    value="<?php echo htmlspecialchars($client['Name']); ?>" pattern="^[a-zA-Z\s]+$"
                    title="Name should contain only letters and spaces." required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone"
                    value="<?php echo htmlspecialchars($client['Phone']); ?>" pattern="^\d{10,15}$"
                    title="Phone number should contain 10 to 15 digits." required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email"
                    value="<?php echo htmlspecialchars($client['Email']); ?>"
                    pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"
                    title="Please enter a valid email address." required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" id="address" name="address"
                    rows="3"><?php echo htmlspecialchars($client['Address']); ?></textarea>
            </div>
            <button type="submit" name="update_client" class="btn btn-primary">Update Client</button>
        </form>

    </div>

    <?php $conn->close(); ?>

</body>

</html>