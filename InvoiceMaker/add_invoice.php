<?php require 'login-checker.php'; ?>

<!doctype html>
<html lang="en">

<!-- Header -->
<?php include 'head.php'; ?>
<?php include 'settings.php'; ?>
<?php include 'db-connect.php'; ?>

<body>
    <div class="container">
        <h2 class="mt-5">Add New Invoice</h2>
        <form action="add_invoice.php" method="post" class="mt-4">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="mb-3">
                        <label for="InvoiceDate" class="form-label">Invoice Date</label>
                        <input type="date" class="form-control" id="InvoiceDate" name="InvoiceDate" required>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="mb-3">
                        <label for="ClientID" class="form-label">Client ID</label>
                        <!-- <input type="text" class="form-control" id="ClientID" name="ClientID" required> -->
                        <select class="form-control" id="ClientID" name="ClientID" required>
                            <?php
                            $sql = "SELECT * FROM clients";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value='" . $row['ClientID'] . "'><b>" . $row['ClientID'] . "</b> - " . $row['Name'] . "</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="mb-3">
                        <label for="PaymentDueDate" class="form-label">Payment Due Date</label>
                        <input type="date" class="form-control" id="PaymentDueDate" name="PaymentDueDate" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="mb-3">
                        <label for="PaymentStatus" class="form-label">Payment Status</label>
                        <select class="form-control" id="PaymentStatus" name="PaymentStatus" required>
                            <option value="Pending">Pending</option>
                            <option value="Paid">Paid</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="mb-3">
                        <label for="PaymentInformation" class="form-label">Payment Information</label>
                        <select class="form-control" id="PaymentInformation" name="PaymentInformation" required>
                            <option value="Harshit Raheja">Harshit Raheja</option>
                            <option value="Ishwar Chawla">Ishwar Chawla</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="mb-3">
                        <label for="InvoiceAuthor" class="form-label">Invoice Author</label>
                        <select class="form-control" id="InvoiceAuthor" name="InvoiceAuthor" required>
                            <option value="Harshit Raheja">Harshit Raheja</option>
                            <option value="Ishwar Chawla">Ishwar Chawla</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="bg-secondary rounded text-white p-5">
                <!-- Product 1 -->
                <div class="row">
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="Product1_Description" class="form-label">Product 1 Description</label>
                            <input class="form-control" id="Product1_Description" name="Product1_Description" rows="2">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="mb-3">
                            <label for="Product1_Quantity" class="form-label">Product 1 Quantity</label>
                            <input type="number" class="form-control" id="Product1_Quantity" name="Product1_Quantity"
                                step="1" min="0">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="mb-3">
                            <label for="Product1_Rate" class="form-label">Product 1 Rate</label>
                            <input type="number" class="form-control" id="Product1_Rate" name="Product1_Rate"
                                step="0.01" min="0">
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="row">
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="Product2_Description" class="form-label">Product 2 Description</label>
                            <input class="form-control" id="Product2_Description" name="Product2_Description" rows="2">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="mb-3">
                            <label for="Product2_Quantity" class="form-label">Product 2 Quantity</label>
                            <input type="number" class="form-control" id="Product2_Quantity" name="Product2_Quantity"
                                step="1" min="0">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="mb-3">
                            <label for="Product2_Rate" class="form-label">Product 2 Rate</label>
                            <input type="number" class="form-control" id="Product2_Rate" name="Product2_Rate"
                                step="0.01" min="0">
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="row">
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="Product3_Description" class="form-label">Product 3 Description</label>
                            <input class="form-control" id="Product3_Description" name="Product3_Description" rows="2">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="mb-3">
                            <label for="Product3_Quantity" class="form-label">Product 3 Quantity</label>
                            <input type="number" class="form-control" id="Product3_Quantity" name="Product3_Quantity"
                                step="1" min="0">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="mb-3">
                            <label for="Product3_Rate" class="form-label
                            ">Product 3 Rate</label>
                            <input type="number" class="form-control" id="Product3_Rate" name="Product3_Rate"
                                step="0.01" min="0">
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="row">
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="Product4_Description" class="form-label">Product 4 Description</label>
                            <input class="form-control" id="Product4_Description" name="Product4_Description" rows="2">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="mb-3">
                            <label for="Product4_Quantity" class="form-label">Product 4 Quantity</label>
                            <input type="number" class="form-control" id="Product4_Quantity" name="Product4_Quantity"
                                step="1" min="0">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="mb-3">
                            <label for="Product4_Rate" class="form-label">Product 4 Rate</label>
                            <input type="number" class="form-control" id="Product4_Rate" name="Product4_Rate"
                                step="0.01" min="0">
                        </div>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="row">
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="Product5_Description" class="form-label">Product 5 Description</label>
                            <input class="form-control" id="Product5_Description" name="Product5_Description" rows="2">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="mb-3">
                            <label for="Product5_Quantity" class="form-label">Product 5 Quantity</label>
                            <input type="number" class="form-control" id="Product5_Quantity" name="Product5_Quantity"
                                step="1" min="0">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="mb-3">
                            <label for="Product5_Rate" class="form-label">Product 5 Rate</label>
                            <input type="number" class="form-control" id="Product5_Rate" name="Product5_Rate"
                                step="0.01" min="0">
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="row">
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="Product6_Description" class="form-label">Product 6 Description</label>
                            <input class="form-control" id="Product6_Description" name="Product6_Description" rows="2">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="mb-3">
                            <label for="Product6_Quantity" class="form-label">Product 6 Quantity</label>
                            <input type="number" class="form-control" id="Product6_Quantity" name="Product6_Quantity"
                                step="1" min="0">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="mb-3">
                            <label for="Product6_Rate" class="form-label">Product 6 Rate</label>
                            <input type="number" class="form-control" id="Product6_Rate" name="Product6_Rate"
                                step="0.01" min="0">
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Add Invoice</button>
        </form>
        <br>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $invoiceDate = htmlspecialchars($_POST['InvoiceDate']);
        $clientID = htmlspecialchars($_POST['ClientID']);
        $paymentDueDate = htmlspecialchars($_POST['PaymentDueDate']);
        $paymentStatus = htmlspecialchars($_POST['PaymentStatus']);
        $paymentInformation = htmlspecialchars($_POST['PaymentInformation']);
        $invoiceAuthor = htmlspecialchars($_POST['InvoiceAuthor']);

        // Product details
        $product1_description = htmlspecialchars($_POST['Product1_Description']) ?? '';
        $product1_quantity = htmlspecialchars($_POST['Product1_Quantity']) ?? '';
        $product1_rate = htmlspecialchars($_POST['Product1_Rate']) ?? '';
        $product1_total = intval($product1_quantity) * intval($product1_rate) ?? '';

        $product2_description = htmlspecialchars($_POST['Product2_Description']) ?? '';
        $product2_quantity = htmlspecialchars($_POST['Product2_Quantity']) ?? '';
        $product2_rate = htmlspecialchars($_POST['Product2_Rate']) ?? '';
        $product2_total = intval($product2_quantity) * intval($product2_rate) ?? '';

        $product3_description = htmlspecialchars($_POST['Product3_Description']) ?? '';
        $product3_quantity = htmlspecialchars($_POST['Product3_Quantity']) ?? '';
        $product3_rate = htmlspecialchars($_POST['Product3_Rate']) ?? '';
        $product3_total = intval($product3_quantity) * intval($product3_rate) ?? '';

        $product4_description = htmlspecialchars($_POST['Product4_Description']) ?? '';
        $product4_quantity = htmlspecialchars($_POST['Product4_Quantity']) ?? '';
        $product4_rate = htmlspecialchars($_POST['Product4_Rate']) ?? '';
        $product4_total = intval($product4_quantity) * intval($product4_rate) ?? '';

        $product5_description = htmlspecialchars($_POST['Product5_Description']) ?? '';
        $product5_quantity = htmlspecialchars($_POST['Product5_Quantity']) ?? '';
        $product5_rate = htmlspecialchars($_POST['Product5_Rate']) ?? '';
        $product5_total = intval($product5_quantity) * intval($product5_rate) ?? '';

        $product6_description = htmlspecialchars($_POST['Product6_Description']) ?? '';
        $product6_quantity = htmlspecialchars($_POST['Product6_Quantity']) ?? '';
        $product6_rate = htmlspecialchars($_POST['Product6_Rate']) ?? '';
        $product6_total = intval($product6_quantity) * intval($product6_rate) ?? '';


        // Insert data into the database
        $sql = "INSERT INTO invoices (InvoiceDate, ClientID, Product1_Description, Product1_Quantity, Product1_Rate, Product1_Total,
            Product2_Description, Product2_Quantity, Product2_Rate, Product2_Total,
            Product3_Description, Product3_Quantity, Product3_Rate, Product3_Total,
            Product4_Description, Product4_Quantity, Product4_Rate, Product4_Total,
            Product5_Description, Product5_Quantity, Product5_Rate, Product5_Total,
            Product6_Description, Product6_Quantity, Product6_Rate, Product6_Total, PaymentDueDate, PaymentStatus, PaymentInformation, InvoiceAuthor) VALUES ('$invoiceDate', '$clientID', '$product1_description', '$product1_quantity', '$product1_rate', '$product1_total',
            '$product2_description', '$product2_quantity', '$product2_rate', '$product2_total',
            '$product3_description', '$product3_quantity', '$product3_rate', '$product3_total',
            '$product4_description', '$product4_quantity', '$product4_rate', '$product4_total',
            '$product5_description', '$product5_quantity', '$product5_rate', '$product5_total',
            '$product6_description', '$product6_quantity', '$product6_rate', '$product6_total', '$paymentDueDate', '$paymentStatus', '$paymentInformation', '$invoiceAuthor')";

        if ($conn->query($sql) === TRUE) {
            echo "
            <script>
                alert('Invoice added successfully');
                window.location.href = 'index.php';
            </script>";
            // header('Location: index.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>

</body>

</html>