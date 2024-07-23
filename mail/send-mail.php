<?php

$user = $_POST['user'] ?? "Unknown";
$to = $_POST['email'] ?? null;

if (empty($to)) {
    echo "<div class='alert alert-danger'>Email: Required</div>";
    exit();
}

$email_type = $_POST['email_type'];
$sent_date = $_POST['sent_date'];

include '../admin/db-connect.php';

$sql = "INSERT INTO mailsender_history (`email_type`, `user`, `email`, `date`) VALUES ('$email_type', '$user', '$to', '$sent_date')";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<div class='alert alert-success'>Record: Inserted</div>";
    exit();
} else {
    echo "<div class='alert alert-danger'>Record: Not Inserted</div>";
    exit();
}

// Approach Mail
if ($email_type == "approach-mail") {
    // Subject
    $subject = "Elevate Your Business with Overseas Marketing - Tailored Solutions for Growth!";
    // Message Content
    $message = "
    <html>
        <head>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet'>
        </head>
        <body>
            <div class='container'>
                <h1>Dear " . $user . ",</h1>
                We hope this message finds you in great spirits. Overseas Marketing, a dynamic and innovative marketing
                firm, is excited to connect with your organization to explore how our tailored solutions can drive the
                growth of your business.
                <br><br>
                At Overseas Marketing, we specialize in a diverse range of services designed to boost your brand's
                visibility and impact:
                <br>
                <div>
                    <ul>
                        <li>
                            <b>Graphic Designing</b>:
                            Captivate your audience with compelling visual communication through our expert graphic design services.
                        </li>
                        <li>
                            <b>Web Development</b>:
                            Elevate your online presence with seamlessly designed websites and web applications that align with your brand identity.
                        </li>
                        <li>
                            <b>SEO (Search Engine Optimization)</b>:
                            Boost your website's visibility on search engines and attract more organic traffic with our proven SEO strategies.
                        </li>
                        <li>
                            <b>Social Media Management</b>:
                            Harness the power of social platforms to engage, grow, and maintain a strong online presence for your brand.
                        </li>
                    </ul>
                </div>
                Here's how Overseas Marketing can make a significant impact on your business:
                <div>
                    <ul>
                        <li>
                            <b>Strategic Planning</b>:
                            Develop customized marketing strategies aligned with your business objectives.
                        </li>
                        <li>
                            <b>Visual Excellence</b>:
                            Elevate your brand with captivating graphic design, video editing, and brand design.
                        </li>
                        <li>
                            <b>Digital Presence</b>:
                            Optimize your online presence through effective SEO, web development, and social media management.
                        </li>
                        <li>
                            <b>Global Expansion</b>:
                            Tap into new markets and audiences with our overseas marketing expertise.
                        </li>
                    </ul>
                </div>
                We would love the opportunity to discuss how these services can be tailored to meet the unique needs of
                your organization. If you're interested, we can schedule a brief call at your convenience to explore
                potential collaboration opportunities.
                <br><br>
                Thank you for considering Overseas Marketing as a potential partner in your business journey. We look
                forward to the possibility of working together to contribute to your continued success.
                <br><br>
                Best Regards,
                <br>
                Overseas Marketing
                <br>
                <a href='https://overseasmarketing.co.in' style='text-decoration:none;'>overseasmarketing.co.in</a>
            </div>
        </body>
    </html>
    ";
    // Display name for the sender
    $fromName = "Overseas Marketing";
    // Sender email address
    $fromEmail = "contact@overseasmarketing.co.in";
    // Headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $fromName <$fromEmail>" . "\r\n";
    // Send the email
    $mailSent = mail($to, $subject, $message, $headers);
    // Check if the email was sent successfully
    if ($mailSent) {
        echo "<div class='alert alert-success'>Email sent successfully!</div>";
        echo $message;
    } else {
        echo "<div class='alert alert-danger'>Email not sent!</div>";
        echo $message;
    }
} else {
    // echo "Invalid Email Type"; // Email Not Sent
}

// Approach Mail approach-mail-payment-gateway
if ($email_type == "approach-mail-payment-gateway") {
    // Subject
    $subject = "Simplify Payments with Our Integrated Gateway Solution";
    // Message Content
    $message = "
    <html>

    <head>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet'>
    </head>

    <body>
        <div class='container'>
            I hope this message finds you well.
            <br><br>
            Over 23% of customers abandon their carts due to complex payment systems. We can help you fix that with our
            seamless integrated payment gateway, ensuring a smooth and secure checkout process directly on your website.
            <br><br>
            Benefits of Our Solution:
            <br><br>
            <li>
                Easy Customization: Tailor the integration to match your business needs.<br>
            </li>
            <li>
                Simplified Checkout: No redirection, providing a smooth user experience.<br>
            </li>
            <li>
                Increased Revenue: Reduce cart abandonment and boost sales.<br>
            </li>
            <li>
                Security and Support: Advanced security measures and dedicated support.<br>
            </li>
            <br><br>
            Let’s get started! Reply to this email or contact us at <a href='tel+919090503838'>+91 90905 03838</a> to
            schedule a consultation.
            <br><br>
            Best regards,<br>
            Overseas Marketing<br>
            <a href='https://overseasmarketing.co.in/'>overseasmarketing.co.in</a><br>
        </div>
    </body>

    </html>
    ";
    // Display name for the sender
    $fromName = "Overseas Marketing";
    // Sender email address
    $fromEmail = "contact@overseasmarketing.co.in";
    // Headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $fromName <$fromEmail>" . "\r\n";
    // Send the email
    $mailSent = mail($to, $subject, $message, $headers);
    // Check if the email was sent successfully
    if ($mailSent) {
        echo "<div class='alert alert-success'>Email sent successfully!</div>";
        echo $message;
    } else {
        echo "<div class='alert alert-danger'>Email not sent!</div>";
        echo $message;
    }
} else {
    // echo "Invalid Email Type"; // Email Not Sent
}