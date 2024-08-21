<?php require 'login-checker.php'; ?>

<!doctype html>
<html lang="en">

<!-- Header -->
<?php include 'head.php'; ?>
<?php include 'settings.php'; ?>

<body>
    <div class="container">
        <h2 class="mt-5">Add New Client</h2>
        <form action="add_client.php" method="post" class="mt-4">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" pattern="^[a-zA-Z\s]+$"
                    title="Name should contain only letters and spaces." required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" pattern="^\d{10,15}$"
                    title="Phone number should contain 10 to 15 digits." required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email"
                    pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"
                    title="Please enter a valid email address." required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" id="address" name="address" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Client</button>
        </form>

    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Input validation using regex
        $name = htmlspecialchars($_POST['name']);
        $phone = htmlspecialchars($_POST['phone']);
        $email = htmlspecialchars($_POST['email']);
        $address = htmlspecialchars($_POST['address']);

        // Database connection
        include 'db-connect.php';

        // Check if client already exists
        $sql = "SELECT * FROM Clients WHERE Name='$name' AND Phone='$phone' AND Email='$email';";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<div class='alert alert-warning mt-4'>Client already exists.</div>";
            exit();
        }

        $sql = "INSERT INTO Clients (Name, Phone, Email, Address) VALUES ('$name', '$phone', '$email', '$address')";

        if ($conn->query($sql) === TRUE) {
            header("Location: index.php");
        } else {
            echo "<div class='alert alert-danger mt-4'>Error: " . $sql . "<br>" . $conn->error . "</div>";
        }

    }
    ?>

</body>

</html>