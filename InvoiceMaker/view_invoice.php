<html>

<head>
    <title>Invoice</title>
    <!-- Bootstrap 5 Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <!-- GoogleFonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arial">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
    body {
        font-family: 'Arial', sans-serif;
    }

    .text-start {
        text-align: left;
    }

    .text-end {
        text-align: right;
    }

    .text-center {
        text-align: center;
    }

    .opacity-75 {
        opacity: 0.75;
    }

    .invoice-table th,
    .invoice-table td {
        text-align: center;
    }
    </style>
</head>

<body class="container-fluid p-1">

    <?php
    include "db-connect.php";

    $invoiceID = $_GET["invoiceID"];

    if (empty($invoiceID)) {
        header("Location: index.php");
    }

    if ($invoiceID == NULL) {
        header("Location: index.php");
    }

    $sql = "SELECT * FROM invoices WHERE InvoiceID = $invoiceID";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if ($result->num_rows == 0) {
        header("Location: index.php");
    }

    $invoiceNumber = $row["InvoiceID"];
    $clientID = $row["ClientID"];
    $invoiceIssueDate = $row["InvoiceDate"];
    $invoiceDueDate = $row["PaymentDueDate"];

    // Products information
    $product1_Description = $row["Product1_Description"];
    $product1_Quantity = $row["Product1_Quantity"];
    $product1_Rate = $row["Product1_Rate"];
    $product1_Total = $row["Product1_Total"];

    $product2_Description = $row["Product2_Description"];
    $product2_Quantity = $row["Product2_Quantity"];
    $product2_Rate = $row["Product2_Rate"];
    $product2_Total = $row["Product2_Total"];

    $product3_Description = $row["Product3_Description"];
    $product3_Quantity = $row["Product3_Quantity"];
    $product3_Rate = $row["Product3_Rate"];
    $product3_Total = $row["Product3_Total"];

    $product4_Description = $row["Product4_Description"];
    $product4_Quantity = $row["Product4_Quantity"];
    $product4_Rate = $row["Product4_Rate"];
    $product4_Total = $row["Product4_Total"];

    $product5_Description = $row["Product5_Description"];
    $product5_Quantity = $row["Product5_Quantity"];
    $product5_Rate = $row["Product5_Rate"];
    $product5_Total = $row["Product5_Total"];

    $product6_Description = $row["Product6_Description"];
    $product6_Quantity = $row["Product6_Quantity"];
    $product6_Rate = $row["Product6_Rate"];
    $product6_Total = $row["Product6_Total"];

    $Total = $product1_Total + $product2_Total + $product3_Total + $product4_Total + $product5_Total + $product6_Total;
    include "utils.php";
    $TotalInWords = convertNumberToWords($Total);

    // Author
    $InvoiceAuthor = $row["InvoiceAuthor"];
    $paymentInformation = $row["PaymentInformation"];

    if ($paymentInformation == "Harshit Raheja") {
        $BankingName = "Harshit Raheja";
        $BankingAccount = "3358000101153756";
        $BankingIFSC = "PUNB0335800";
        $BankingUPI = "harshitrahejapersonal@okhdfcbank";
    } else if ($paymentInformation == "Ishwar Chawla") {
        $authorizedSignatureImage = "signature_ishwar.png";
        $BankingName = "Ishwar Chawla";
        $BankingAccount = "018310110005066";
        $BankingIFSC = "BKID0000183";
        $BankingUPI = "ishwarchawla2004@okaxis";
    }

    if ($InvoiceAuthor == "Harshit Raheja") {
        $authorizedSignature = "Harshit Raheja";
        $authorizedSignatureImage = "signature_harshit.png";

    } else if ($InvoiceAuthor == "Ishwar Chawla") {
        $authorizedSignature = "Ishwar Chawla";
        $authorizedSignatureImage = "signature_ishwar.png";
    }

    $sql_clients = "SELECT * FROM clients WHERE ClientID = $clientID";
    $result_clients = $conn->query($sql_clients);
    $row_clients = $result_clients->fetch_assoc();

    $clientName = $row_clients["Name"];
    $address = $row_clients["Address"];
    $phone = $row_clients["Phone"];

    function formatNumber($number)
    {
        return number_format($number, 2, ".", ",");
    }

    $Total = formatNumber($Total);

    echo "
    <div class='row'>
        <div class='col-6 text-start'>
            <h1>To</h1>
            <h2>$clientName</h2>
            <p>
                <strong>Address</strong><br>
                $address
                <br>
                <strong>Phone</strong>
                <br>
                $phone
            </p>
        </div>
        <div class='col-6 text-end'>
            <img class='img-fluid' width='100px' src='logo.png' alt='Overseas Marketing'>
            <p>Overseas Marketing</p>
            <h1>Invoice</h1>
            <strong>Invoice Number #</strong>$invoiceNumber
            <br>
            <strong>Invoice Date </strong>$invoiceIssueDate
        </div>
    </div>
    <table class='table mt-5'>
    <tbody>
        <tr>
            <th>#</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Rate</th>
            <th>Total</th>
        </tr>
    ";

    // Products Table
    $products = [
        ["Description" => $product1_Description, "Quantity" => $product1_Quantity, "Rate" => $product1_Rate, "Total" => $product1_Total],
        ["Description" => $product2_Description, "Quantity" => $product2_Quantity, "Rate" => $product2_Rate, "Total" => $product2_Total],
        ["Description" => $product3_Description, "Quantity" => $product3_Quantity, "Rate" => $product3_Rate, "Total" => $product3_Total],
        ["Description" => $product4_Description, "Quantity" => $product4_Quantity, "Rate" => $product4_Rate, "Total" => $product4_Total],
        ["Description" => $product5_Description, "Quantity" => $product5_Quantity, "Rate" => $product5_Rate, "Total" => $product5_Total],
        ["Description" => $product6_Description, "Quantity" => $product6_Quantity, "Rate" => $product6_Rate, "Total" => $product6_Total],
    ];

    $count = 0;
    foreach ($products as $product) {
        $count++;
        if ($product["Description"] == "") {
            continue;
        }
        echo "
        <tr>
            <td>$count</td>
            <td>$product[Description]</td>
            <td>$product[Quantity]</td>
            <td>$product[Rate]</td>
            <td>$product[Total]</td>
        </tr>
        ";
    }

    echo "
    </tbody>
    </table>

    <div class='text-end'>
        <h2>Total Amount</h2>
        <h2>₹$Total</h2>
        <p class='mb-0'>$TotalInWords Only</p>
    </div>

    <div class='row pt-2'>
        <div class='col-12 text-start'>
            <strong>Payment Due Date</strong><br>
            <span class='text-danger'><strong>$invoiceDueDate</strong></span>
            <br>
            <strong>Payment Information</strong><br>
            <span>
                <strong>Bank Name:</strong> $BankingName
                <br>
                <strong>Account Number:</strong> $BankingAccount
                <br>
                <strong>IFSC Code:</strong> $BankingIFSC
                <br>
                <strong>UPI ID:</strong> $BankingUPI
            </span>
        </div>
    </div>

    <div class='row pt-2'>
        <div class='col-12 text-start opacity-75'>
            Terms & Conditions Applied*
            <br>
            <div class='pt-2'>
                <strong>Authorized Signature</strong>
                <div class='col-12 text-start'>
                    <img class='img-fluid' width='100px' src='${authorizedSignatureImage}' alt='${authorizedSignature}'>
                    <p>${authorizedSignature}</p>
                </div>
            </div>
        </div>
    </div>
    ";


    ?>


</body>

</html>