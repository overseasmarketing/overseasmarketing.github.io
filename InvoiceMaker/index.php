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
                    <i class="fa fa-solid fa-user"></i> Add Client
                </button>
                <button onclick="openLink('view_clients')" class="btn btn-warning m-2 text-start">
                    <i class="fa fa-solid fa-users"></i> View Clients
                </button>
                <button onclick="openLink('add_invoice')" class="btn btn-success m-2 text-start">
                    <i class="fa fa-solid fa-book"></i> Add Invoice
                </button>
                <button onclick="openLink('add_quotation')" class="btn btn-secondary m-2 text-start">
                    <i class="fa fa-solid fa-book"></i> Add Quotation
                </button>
                <button onclick="openLink('logout')" class="btn btn-danger m-2 text-start">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout
                </button>
            </div>
        </div>

        <!-- Display Invoices -->
        <div class="col-sm-12 col-md-12 col-lg-12">
            <h2>Invoices</h2>
            <?php
            include "db-connect.php";

            // Improved Query with JOIN to avoid multiple client queries
            $sql = "SELECT invoices.*, clients.Name AS ClientName 
                    FROM invoices 
                    JOIN clients ON invoices.ClientID = clients.ClientID";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table class='table table-striped mt-1' id='invoiceTable'>";
                echo "<thead><tr>";
                echo "<th class='bg-black text-white' onclick='sortTable(0, \"invoiceTable\")'>#</th>";
                echo "<th class='bg-black text-white' onclick='sortTable(1, \"invoiceTable\")'>Invoice ID <i class='fa fa-sort'></i></th>";
                echo "<th class='bg-black text-white' onclick='sortTable(2, \"invoiceTable\")'>Client <i class='fa fa-sort'></i></th>";
                echo "<th class='bg-black text-white' onclick='sortTable(3, \"invoiceTable\")'>Issue Date <i class='fa fa-sort'></i></th>";
                echo "<th class='bg-black text-white' onclick='sortTable(4, \"invoiceTable\")'>Due Date <i class='fa fa-sort'></i></th>";
                echo "<th class='bg-black text-white' onclick='sortTable(5, \"invoiceTable\")'>Status <i class='fa fa-sort'></i></th>";
                echo "<th class='bg-black text-white'>Actions</th></tr></thead>";
                echo "<tbody>";
                $count = 0;
                while ($row = $result->fetch_assoc()) {
                    $count++;

                    $paymentStatus = $row["PaymentStatus"] == "Paid"
                        ? "<span class='badge bg-success'>Paid</span>"
                        : "<span class='badge bg-danger'>Pending</span>";

                    echo "<tr>";
                    echo "<td>$count</td>";
                    echo "<td>INV-" . $row["InvoiceID"] . "</td>";
                    echo "<td>" . $row["ClientName"] . "</td>";
                    echo "<td>" . $row["InvoiceDate"] . "</td>";
                    echo "<td>" . $row["PaymentDueDate"] . "</td>";
                    echo "<td>$paymentStatus</td>";
                    echo "<td>
                            <button onclick='openLink(\"view_invoice.php?invoiceID=" . $row["InvoiceID"] . "\")' class='btn btn-success btn-sm m-2 text-start'><i class='fa fa-solid fa-eye'></i></button>
                            <button onclick='openLink(\"edit_invoice.php?invoiceID=" . $row["InvoiceID"] . "\")' class='btn btn-primary btn-sm m-2 text-start'><i class='fa fa-solid fa-pen'></i></button>
                            <button onclick='openLink(\"delete_invoice.php?invoiceID=" . $row["InvoiceID"] . "\")' class='btn btn-danger btn-sm m-2 text-start'><i class='fa fa-solid fa-trash'></i></button>
                          </td>";
                    echo "</tr>";
                }
                echo "</tbody></table>";
            } else {
                echo "<br>No invoices found.";
            }
            ?>
        </div>

        <!-- Display Quotations -->
        <div class="col-sm-12 col-md-12 col-lg-12">
            <h2>Quotations</h2>
            <?php
            // Improved Query with JOIN to avoid multiple client queries
            $sql = "SELECT quotations.*, clients.Name AS ClientName 
                    FROM quotations 
                    JOIN clients ON quotations.ClientID = clients.ClientID";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table class='table table-striped mt-1' id='quotationTable'>";
                echo "<thead><tr>";
                echo "<th class='bg-black text-white' onclick='sortTable(0, \"quotationTable\")'>#</th>";
                echo "<th class='bg-black text-white' onclick='sortTable(1, \"quotationTable\")'>Quotation ID <i class='fa fa-sort'></i></th>";
                echo "<th class='bg-black text-white' onclick='sortTable(2, \"quotationTable\")'>Client <i class='fa fa-sort'></i></th>";
                echo "<th class='bg-black text-white' onclick='sortTable(3, \"quotationTable\")'>Issue Date <i class='fa fa-sort'></i></th>";
                echo "<th class='bg-black text-white' onclick='sortTable(4, \"quotationTable\")'>Status <i class='fa fa-sort'></i></th>";
                echo "<th class='bg-black text-white'>Actions</th></tr></thead>";
                echo "<tbody>";
                $count = 0;
                while ($row = $result->fetch_assoc()) {
                    $count++;

                    $ApprovalStatus = $row["ApprovalStatus"] == "Approved"
                        ? "<span class='badge bg-success'>Approved</span>"
                        : "<span class='badge bg-danger'>Pending</span>";

                    echo "<tr>";
                    echo "<td>$count</td>";
                    echo "<td>QUOTE-" . $row["QuotationID"] . "</td>";
                    echo "<td>" . $row["ClientName"] . "</td>";
                    echo "<td>" . $row["QuotationDate"] . "</td>";
                    echo "<td>$ApprovalStatus</td>";
                    echo "<td>
                            <button onclick='openLink(\"view_quotation.php?QuotationID=" . $row["QuotationID"] . "\")' class='btn btn-success btn-sm m-2 text-start'><i class='fa fa-solid fa-eye'></i></button>
                            <button onclick='openLink(\"edit_quotation.php?QuotationID=" . $row["QuotationID"] . "\")' class='btn btn-primary btn-sm m-2 text-start'><i class='fa fa-solid fa-pen'></i></button>
                            <button onclick='openLink(\"delete_quotation.php?QuotationID=" . $row["QuotationID"] . "\")' class='btn btn-danger btn-sm m-2 text-start'><i class='fa fa-solid fa-trash'></i></button>
                          </td>";
                    echo "</tr>";
                }
                echo "</tbody></table>";
            } else {
                echo "<br>No quotations found.";
            }
            ?>
        </div>
    </div>
</body>

<script>
function openLink(link) {
    let result = confirm("Are you sure you want to perform this action?");
    if (result) {
        window.location.href = link;
    }
}

function sortTable(columnIndex, tableId) {
    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
    table = document.getElementById(tableId);
    switching = true;
    // Set the sorting direction to ascending initially
    dir = "asc";

    // Make a loop that will continue until no switching has been done
    while (switching) {
        switching = false;
        rows = table.rows;

        // Loop through all table rows (except the first, which contains table headers)
        for (i = 1; i < (rows.length - 1); i++) {
            shouldSwitch = false;

            // Compare the two elements in the current column
            x = rows[i].getElementsByTagName("TD")[columnIndex];
            y = rows[i + 1].getElementsByTagName("TD")[columnIndex];

            // Check if the two rows should switch place based on ascending or descending order
            if (dir === "asc") {
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    shouldSwitch = true;
                    break;
                }
            } else if (dir === "desc") {
                if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                    shouldSwitch = true;
                    break;
                }
            }
        }

        if (shouldSwitch) {
            // If a switch has been marked, make the switch and mark that a switch has been done
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
            // Each time a switch is done, increase this count by 1
            switchcount++;
        } else {
            // If no switching has been done AND the direction is "asc", set the direction to "desc" and run the loop again
            if (switchcount === 0 && dir === "asc") {
                dir = "desc";
                switching = true;
            }
        }
    }
}
</script>

</html>