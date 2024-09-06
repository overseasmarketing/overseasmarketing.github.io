<?php require 'login-checker.php'; ?>

<!doctype html>
<html lang="en">

<!-- Header -->
<?php include 'head.php'; ?>
<?php include 'settings.php'; ?>

<body>
    <div class="container-fluid">
        <h1>Invoice Maker</h1>
        <hr>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <span>Choose action</span>
                <br>
                <button onclick="openLink('add_client')" class="btn btn-primary m-2 text-start">
                    <i class="fa fa-solid fa-user"></i>
                    Add Client
                </button>
                <button onclick="openLink('view_clients')" class="btn btn-warning m-2 text-start">
                    <i class="fa fa-solid fa-users"></i>
                    View Clients
                </button>
                <button onclick="openLink('add_invoice')" class="btn btn-success m-2 text-start">
                    <i class="fa fa-solid fa-book"></i>
                    Add Invoice
                </button>
                <button onclick="openLink('add_quotation')" class="btn btn-secondary m-2 text-start">
                    <i class="fa fa-solid fa-book"></i>
                    Add Quotation
                </button>
                <button onclick="openLink('logout')" class="btn btn-danger m-2 text-start">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    Logout
                </button>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12">
                <?php
                include "db-connect.php";
                $sql = "SELECT * FROM invoices";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<h2>Invoices</h2>";
                    echo "<table class='table table-striped mt-1'>";
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>#</th>";
                    echo "<th>Invoice ID</th>";
                    echo "<th>Client</th>";
                    echo "<th>Issue Date</th>";
                    echo "<th>Due Date</th>";
                    echo "<th>Status</th>";
                    echo "<th>Actions</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    $count = 0;
                    while ($row = $result->fetch_assoc()) {
                        $count++;
                        // Get Client Name
                        $sql_clients = "SELECT * FROM clients WHERE ClientID = " . $row["ClientID"];
                        $result_clients = $conn->query($sql_clients);
                        $row_clients = $result_clients->fetch_assoc();
                        $ClientName = $row_clients["Name"];

                        if ($row["PaymentStatus"] == "Paid") {
                            $paymentStatus = "<span class='badge bg-success'>" . $row["PaymentStatus"] . "</span>";
                        } else {
                            $paymentStatus = "<span class='badge bg-danger'>" . $row["PaymentStatus"] . "</span>";
                        }

                        echo "<tr>";
                        echo "<td>$count</td>";
                        echo "<td>INV-" . $row["InvoiceID"] . "</td>";
                        echo "<td>$ClientName</td>";
                        echo "<td>" . $row["InvoiceDate"] . "</td>";
                        echo "<td>" . $row["PaymentDueDate"] . "</td>";
                        echo "<td>$paymentStatus</td>";
                        echo "<td>";
                        echo "<button onclick='openLink(\"view_invoice?invoiceID=" . $row["InvoiceID"] . "\")' class='btn btn-success btn-sm m-2 text-start'><i class='fa fa-solid fa-eye'></i></button>";
                        echo "<button onclick='openLink(\"edit_invoice?invoiceID=" . $row["InvoiceID"] . "\")' class='btn btn-primary btn-sm m-2 text-start'><i class='fa fa-solid fa-edit'></i></button>";
                        echo "<button onclick='openLink(\"delete_invoice?invoiceID=" . $row["InvoiceID"] . "\")' class='btn btn-danger btn-sm m-2 text-start'><i class='fa fa-solid fa-trash'></i></button>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                } else {
                    echo "<br>0 results";
                }
                ?>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12">
                <?php
                include "db-connect.php";
                $sql = "SELECT * FROM quotations";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<h2>Quotations</h2>";
                    echo "<table class='table table-striped mt-1'>";
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>#</th>";
                    echo "<th>Quotation ID</th>";
                    echo "<th>Client</th>";
                    echo "<th>Issue Date</th>";
                    echo "<th>Status</th>";
                    echo "<th>Actions</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    $count = 0;
                    while ($row = $result->fetch_assoc()) {
                        $count++;
                        // Get Client Name
                        $sql_clients = "SELECT * FROM clients WHERE ClientID = " . $row["ClientID"];
                        $result_clients = $conn->query($sql_clients);
                        $row_clients = $result_clients->fetch_assoc();
                        $ClientName = $row_clients["Name"];

                        if ($row["ApprovalStatus"] == "Approved") {
                            $ApprovalStatus = "<span class='badge bg-success'>" . $row["ApprovalStatus"] . "</span>";
                        } else {
                            $ApprovalStatus = "<span class='badge bg-danger'>" . $row["ApprovalStatus"] . "</span>";
                        }

                        echo "<tr>";
                        echo "<td>$count</td>";
                        echo "<td>QUOTE-" . $row["QuotationID"] . "</td>";
                        echo "<td>$ClientName</td>";
                        echo "<td>" . $row["QuotationDate"] . "</td>";
                        echo "<td>$ApprovalStatus</td>";
                        echo "<td>";
                        echo "<button onclick='openLink(\"view_quotation?QuotationID=" . $row["QuotationID"] . "\")' class='btn btn-success btn-sm m-2 text-start'><i class='fa fa-solid fa-eye'></i></button>";
                        echo "<button onclick='openLink(\"edit_quotation?QuotationID=" . $row["QuotationID"] . "\")' class='btn btn-primary btn-sm m-2 text-start'><i class='fa fa-solid fa-edit'></i></button>";
                        echo "<button onclick='openLink(\"delete_quotation?QuotationID=" . $row["QuotationID"] . "\")' class='btn btn-danger btn-sm m-2 text-start'><i class='fa fa-solid fa-trash'></i></button>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                } else {
                    echo "<br>0 results";
                }
                ?>
            </div>
        </div>
    </div>
</body>

<script>
    function openLink(link) {
        let result = confirm("Are you sure you want perform this action?");
        if (!result) {
            return;
        } else {
            window.location.href = link;
        }
    }
</script>

</html>