<?php require 'login-checker.php'; ?>

<!doctype html>
<html lang="en">

<!-- Header -->
<?php include 'head.php'; ?>

<body>
    <div class="container">
        <!-- CONTAINER START -->
        <!-- Section: Intro -->
        <div class="alert alert-primary">
            Database Tables
        </div>
        <div class="alert p-0 m-0">
            <h1>Welcome,
                <?php echo $_SESSION['name']; ?>
            </h1>
        </div>
        <p>
            You can see the list of all tables present in your database.
        </p>
        <hr>
        <!-- Section: Cards -->
        <div class="row">
            <!-- Card Zero -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 my-1">
                <div class="card h-100">
                    <div class="card-body">
                        <?php

                        include 'db-connect.php';

                        $conn = new mysqli($SERVER_NAME, $USERNAME, $PASSWORD, $DATABASE);

                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $query = "SHOW TABLES";
                        $result = $conn->query($query);

                        if ($result) {
                            echo "<div class='alert-info p-2 m-1'>List of tables in database</div>";
                            while ($row = $result->fetch_assoc()) {
                                $tableName = $row["Tables_in_" . $DATABASE];
                                echo "<div class='alert alert-light p-2 m-2 table-name'> Table: " . $tableName . "</div>";
                                showTableData($tableName);
                            }
                            $result->free();
                        } else {
                            echo "Error: " . $conn->error;
                        }

                        $conn->close();

                        ?>

                        <?php

                        function showTableData($tableName)
                        {
                            include 'db-connect.php';
                            $conn = new mysqli($SERVER_NAME, $USERNAME, $PASSWORD, $DATABASE);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $query = "SELECT * FROM " . $tableName;
                            $result = $conn->query($query);

                            if ($result) {
                                // echo "Table: " . $tableName;
                                echo "<table border='1'>";
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    foreach ($row as $key => $value) {
                                        echo "<th>" . $key . "</th>";
                                    }
                                    echo "</tr>";
                                    echo "<tr>";
                                    foreach ($row as $value) {
                                        echo "<td>" . $value . "</td>";
                                    }
                                    echo "</tr>";
                                }
                                echo "</table>";
                                $result->free();
                            } else {
                                echo "Error: " . $conn->error;
                            }

                            $conn->close();

                        }


                        ?>

                    </div>
                </div>
            </div>
        </div>
        <!-- CONTAINER END -->
    </div>
</body>

<!-- Footer -->
<?php include 'footer.php'; ?>

</html>