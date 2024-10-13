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

    // Secure and sanitize invoiceID
    $invoiceID = filter_input(INPUT_GET, "invoiceID", FILTER_SANITIZE_NUMBER_INT);

    // Check for missing or invalid invoiceID
    if (!$invoiceID) {
        header("Location: index.php");
        exit();
    }

    // Prepare and execute query to fetch invoice data
    $stmt = $conn->prepare("SELECT * FROM invoices WHERE InvoiceID = ?");
    $stmt->bind_param("i", $invoiceID);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the invoice exists
    if ($result->num_rows === 0) {
        header("Location: index.php");
        exit();
    }

    $row = $result->fetch_assoc();

    // Extract and format invoice information
    $invoiceNumber = $row["InvoiceID"];
    $clientID = $row["ClientID"];
    $invoiceIssueDate = date("d-m-Y", strtotime($row["InvoiceDate"]));
    $invoiceDueDate = date("d-m-Y", strtotime($row["PaymentDueDate"]));

    // Product details
    $products = [];
    for ($i = 1; $i <= 6; $i++) {
        if (!empty($row["Product{$i}_Description"])) {
            $products[] = [
                "Description" => $row["Product{$i}_Description"],
                "Quantity" => $row["Product{$i}_Quantity"],
                "Rate" => $row["Product{$i}_Rate"],
                "Total" => $row["Product{$i}_Total"]
            ];
        }
    }

    // Calculate total amount
    $Total = array_reduce($products, function ($carry, $item) {
        return $carry + $item['Total'];
    }, 0);

    // Convert total to words
    include "utils.php";
    $TotalInWords = convertNumberToWords($Total);

    // Author and Payment Information
    $InvoiceAuthor = $row["InvoiceAuthor"];
    $paymentInformation = $row["PaymentInformation"];

    // Set banking details
    $bankDetails = [
        "Harshit Raheja" => [
            "Name" => "Harshit Raheja",
            "Account" => "3358000101153756",
            "IFSC" => "PUNB0335800",
            "UPI" => "harshitrahejapersonal@okhdfcbank",
        ],
        "Ishwar Chawla" => [
            "Name" => "Ishwar Chawla",
            "Account" => "018310110005066",
            "IFSC" => "BKID0000183",
            "UPI" => "ishwarchawla2004@okaxis",
        ]
    ];

    $BankingName = $bankDetails[$paymentInformation]['Name'];
    $BankingAccount = $bankDetails[$paymentInformation]['Account'];
    $BankingIFSC = $bankDetails[$paymentInformation]['IFSC'];
    $BankingUPI = $bankDetails[$paymentInformation]['UPI'];

    // Set authorized signature
    $authorizedSignatureImage = ($InvoiceAuthor == "Harshit Raheja") ? "signature_harshit.png" : "signature_ishwar.png";
    $authorizedSignature = $InvoiceAuthor;

    // Fetch client details
    $stmt_clients = $conn->prepare("SELECT * FROM clients WHERE ClientID = ?");
    $stmt_clients->bind_param("i", $clientID);
    $stmt_clients->execute();
    $result_clients = $stmt_clients->get_result();
    $row_clients = $result_clients->fetch_assoc();

    $clientName = $row_clients["Name"];
    $address = $row_clients["Address"];
    $phone = $row_clients["Phone"];

    // Format total with comma separation
    $TotalFormatted = number_format($Total, 2, ".", ",");

    // Output invoice content
    echo "
    <div class='row m-0 p-0'>
        <div class='col-6 text-start'>
            <h1>To</h1>
            <h2>$clientName</h2>
            <p>
                <strong>Address:</strong> $address
                <br>
                <strong>Phone:</strong> $phone
            </p>
        </div>
        <div class='col-6 text-end'>
            <img class='img-fluid' width='100px' src='logo.png' alt='Overseas Marketing'>
            <p>Overseas Marketing</p>
            <h1>Invoice</h1>
            <strong>Invoice Number #</strong>$invoiceNumber
            <br>
            <strong>Invoice Date:</strong> $invoiceIssueDate
            <br>
            <strong>Due Date:</strong> $invoiceDueDate
        </div>
    </div>
    
    <table class='table mt-5'>
        <thead>
            <tr>
                <th>#</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Rate</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>";

    // Render products table
    foreach ($products as $index => $product) {
        $count = $index + 1;
        echo "
        <tr>
            <td>$count</td>
            <td>{$product['Description']}</td>
            <td>{$product['Quantity']}</td>
            <td>₹ {$product['Rate']}</td>
            <td>₹ {$product['Total']}</td>
        </tr>";
    }

    echo "
        </tbody>
    </table>

    <div class='text-end'>
        <h2>Total Amount: ₹$TotalFormatted</h2>
        <p class='mb-0'>$TotalInWords Only</p>
    </div>

    <div class='row m-0 p-0 pt-2'>
        <div class='col-12 text-start'>
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

    <div class='row m-0 p-0 pt-2'>
        <div class='col-12 text-start opacity-75'>
            <strong>Authorized Signature</strong>
            <div class='col-12'>
                <img class='img-fluid' width='100px' src='$authorizedSignatureImage' alt='$authorizedSignature'>
                <p>$authorizedSignature</p>
            </div>
            <center>Terms & Conditions Applied*</center>
        </div>
    </div>";
    ?>

</body>

</html>