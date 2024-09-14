<?php require 'login-checker.php'; ?>

<!doctype html>
<html lang="en">

<!-- Header -->
<?php include 'head.php'; ?>
<?php include 'settings.php'; ?>
<?php include 'db-connect.php'; ?>

<body>
    <div class="container">
        <h2 class="mt-5">Edit Quotation</h2>
        <?php
        // Fetch Quotation details if id is provided
        $QuotationID = isset($_GET['QuotationID']) ? intval($_GET['QuotationID']) : 0;
        $Quotation = null;

        if ($QuotationID > 0) {
            $sql = "SELECT * FROM quotations WHERE QuotationID = $QuotationID";
            $result = $conn->query($sql);
            if ($result->num_rows == 1) {
                $Quotation = $result->fetch_assoc();
            } else {
                echo "<div class='alert alert-danger'>Quotation not found.</div>";
                exit;
            }
        }
        ?>

        <form action="edit_quotation.php" method="post" class="mt-4">
            <input type="hidden" name="QuotationID" value="<?php echo $QuotationID; ?>">

            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-6">
                    <div class="mb-3">
                        <label for="QuotationDate" class="form-label">Quotation Date</label>
                        <input type="date" class="form-control" id="QuotationDate" name="QuotationDate"
                            value="<?php echo htmlspecialchars($Quotation['QuotationDate']); ?>" required>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-6">
                    <div class="mb-3">
                        <label for="ClientID" class="form-label">Client ID</label>
                        <select class="form-control" id="ClientID" name="ClientID" required>
                            <?php
                            $sql = "SELECT * FROM clients";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $selected = ($row['ClientID'] == $Quotation['ClientID']) ? 'selected' : '';
                                    echo "<option value='" . $row['ClientID'] . "' $selected><b>" . $row['ClientID'] . "</b> - " . $row['Name'] . "</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-6">
                    <div class="mb-3">
                        <label for="ApprovalStatus" class="form-label">Approval Status</label>
                        <select class="form-control" id="ApprovalStatus" name="ApprovalStatus" required>
                            <option value="Pending"
                                <?php echo ($Quotation['ApprovalStatus'] == 'Pending') ? 'selected' : ''; ?>>
                                Pending
                            </option>
                            <option value="Approved"
                                <?php echo ($Quotation['ApprovalStatus'] == 'Approved') ? 'selected' : ''; ?>>
                                Approved
                            </option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-6">
                    <div class="mb-3">
                        <label for="QuotationAuthor" class="form-label">Quotation Author</label>
                        <select class="form-control" id="QuotationAuthor" name="QuotationAuthor" required>
                            <option value="Harshit Raheja"
                                <?php echo ($Quotation['QuotationAuthor'] == 'Harshit Raheja') ? 'selected' : ''; ?>>
                                Harshit
                                Raheja</option>
                            <option value="Ishwar Chawla"
                                <?php echo ($Quotation['QuotationAuthor'] == 'Ishwar Chawla') ? 'selected' : ''; ?>>
                                Ishwar
                                Chawla</option>
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
                            <input class="form-control" id="Product1_Description" name="Product1_Description"
                                value="<?php echo htmlspecialchars($Quotation['Product1_Description']); ?>" rows="2">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="mb-3">
                            <label for="Product1_Quantity" class="form-label">Product 1 Quantity</label>
                            <input type="number" class="form-control" id="Product1_Quantity" name="Product1_Quantity"
                                step="1" min="0"
                                value="<?php echo htmlspecialchars($Quotation['Product1_Quantity']); ?>">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="mb-3">
                            <label for="Product1_Rate" class="form-label">Product 1 Rate</label>
                            <input type="number" class="form-control" id="Product1_Rate" name="Product1_Rate"
                                step="0.01" min="0"
                                value="<?php echo htmlspecialchars($Quotation['Product1_Rate']); ?>">
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="row">
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="Product2_Description" class="form-label">Product 2 Description</label>
                            <input class="form-control" id="Product2_Description" name="Product2_Description"
                                value="<?php echo htmlspecialchars($Quotation['Product2_Description']); ?>" rows="2">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="mb-3">
                            <label for="Product2_Quantity" class="form-label">Product 2 Quantity</label>
                            <input type="number" class="form-control" id="Product2_Quantity" name="Product2_Quantity"
                                step="1" min="0"
                                value="<?php echo htmlspecialchars($Quotation['Product2_Quantity']); ?>">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="mb-3">
                            <label for="Product2_Rate" class="form-label">Product 2 Rate</label>
                            <input type="number" class="form-control" id="Product2_Rate" name="Product2_Rate"
                                step="0.01" min="0"
                                value="<?php echo htmlspecialchars($Quotation['Product2_Rate']); ?>">
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="row">
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="Product3_Description" class="form-label">Product 3 Description</label>
                            <input class="form-control" id="Product3_Description" name="Product3_Description"
                                value="<?php echo htmlspecialchars($Quotation['Product3_Description']); ?>" rows="2">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="mb-3">
                            <label for="Product3_Quantity" class="form-label">Product 3 Quantity</label>
                            <input type="number" class="form-control" id="Product3_Quantity" name="Product3_Quantity"
                                step="1" min="0"
                                value="<?php echo htmlspecialchars($Quotation['Product3_Quantity']); ?>">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="mb-3">
                            <label for="Product3_Rate" class="form-label">Product 3 Rate</label>
                            <input type="number" class="form-control" id="Product3_Rate" name="Product3_Rate"
                                step="0.01" min="0"
                                value="<?php echo htmlspecialchars($Quotation['Product3_Rate']); ?>">
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="row">
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="Product4_Description" class="form-label">Product 4 Description</label>
                            <input class="form-control" id="Product4_Description" name="Product4_Description"
                                value="<?php echo htmlspecialchars($Quotation['Product4_Description']); ?>" rows="2">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="mb-3">
                            <label for="Product4_Quantity" class="form-label">Product 4 Quantity</label>
                            <input type="number" class="form-control" id="Product4_Quantity" name="Product4_Quantity"
                                step="1" min="0"
                                value="<?php echo htmlspecialchars($Quotation['Product4_Quantity']); ?>">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="mb-3">
                            <label for="Product4_Rate" class="form-label">Product 4 Rate</label>
                            <input type="number" class="form-control" id="Product4_Rate" name="Product4_Rate"
                                step="0.01" min="0"
                                value="<?php echo htmlspecialchars($Quotation['Product4_Rate']); ?>">
                        </div>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="row">
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="Product5_Description" class="form-label">Product 5 Description</label>
                            <input class="form-control" id="Product5_Description" name="Product5_Description"
                                value="<?php echo htmlspecialchars($Quotation['Product5_Description']); ?>" rows="2">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="mb-3">
                            <label for="Product5_Quantity" class="form-label">Product 5 Quantity</label>
                            <input type="number" class="form-control" id="Product5_Quantity" name="Product5_Quantity"
                                step="1" min="0"
                                value="<?php echo htmlspecialchars($Quotation['Product5_Quantity']); ?>">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="mb-3">
                            <label for="Product5_Rate" class="form-label">Product 5 Rate</label>
                            <input type="number" class="form-control" id="Product5_Rate" name="Product5_Rate"
                                step="0.01" min="0"
                                value="<?php echo htmlspecialchars($Quotation['Product5_Rate']); ?>">
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="row">
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="Product6_Description" class="form-label">Product 6 Description</label>
                            <input class="form-control" id="Product6_Description" name="Product6_Description"
                                value="<?php echo htmlspecialchars($Quotation['Product6_Description']); ?>" rows="2">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="mb-3">
                            <label for="Product6_Quantity" class="form-label">Product 6 Quantity</label>
                            <input type="number" class="form-control" id="Product6_Quantity" name="Product6_Quantity"
                                step="1" min="0"
                                value="<?php echo htmlspecialchars($Quotation['Product6_Quantity']); ?>">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="mb-3">
                            <label for="Product6_Rate" class="form-label">Product 6 Rate</label>
                            <input type="number" class="form-control" id="Product6_Rate" name="Product6_Rate"
                                step="0.01" min="0"
                                value="<?php echo htmlspecialchars($Quotation['Product6_Rate']); ?>">
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Update Quotation</button>
        </form>
        <br>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $QuotationID = intval($_POST['QuotationID']);
        $QuotationDate = htmlspecialchars($_POST['QuotationDate']);
        $clientID = htmlspecialchars($_POST['ClientID']);
        $ApprovalStatus = htmlspecialchars($_POST['ApprovalStatus']);
        $QuotationAuthor = htmlspecialchars($_POST['QuotationAuthor']);

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

        // Update data in the database
        $sql = "UPDATE quotations SET QuotationDate='$QuotationDate', ClientID='$clientID', Product1_Description='$product1_description', Product1_Quantity='$product1_quantity', Product1_Rate='$product1_rate', Product1_Total='$product1_total',
            Product2_Description='$product2_description', Product2_Quantity='$product2_quantity', Product2_Rate='$product2_rate', Product2_Total='$product2_total',
            Product3_Description='$product3_description', Product3_Quantity='$product3_quantity', Product3_Rate='$product3_rate', Product3_Total='$product3_total',
            Product4_Description='$product4_description', Product4_Quantity='$product4_quantity', Product4_Rate='$product4_rate', Product4_Total='$product4_total',
            Product5_Description='$product5_description', Product5_Quantity='$product5_quantity', Product5_Rate='$product5_rate', Product5_Total='$product5_total',
            Product6_Description='$product6_description', Product6_Quantity='$product6_quantity', Product6_Rate='$product6_rate', Product6_Total='$product6_total', ApprovalStatus='$ApprovalStatus', QuotationAuthor='$QuotationAuthor' WHERE QuotationID=$QuotationID";

        if ($conn->query($sql) === TRUE) {
            echo "
            <script>
                alert('Quotation updated successfully');
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