<?php

$user = $_POST['user'];
$to = $_POST['email'];
$email_type = $_POST['email_type'];

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

// Approach Mail GEN-Z
if ($email_type == "approach-mail-gen-z") {
    // Subject
    $subject = "Unleash Your Business Potential Globally - Customized Solutions for Unprecedented Growth!";
    // Message Content
    $message = "
    <html>
        <head>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet'>
        </head>
        <body>
            <div class='container'>
                Hey, " . $user . "! Are you ready to step up your brand game?
                <br><br>
                Imagine working with a team that understands your company's culture in addition to design and web development. We're not your typical techies; we're here to be your digital partners, transforming your vision into a cutting-edge online masterpiece.
                <br><br>
                Let's get into the details: think sleek designs, websites that feel like they were coded with a touch of Gen Z magic, and ads that speak to the cool kids. We're not just accomplishing goals; we're leaving a digital legacy.
                <br>
                So let's collaborate and make your brand the talk of the virtual town. Ready to slay?
                <br><br>
                <a href='https://overseasmarketing.co.in' style='text-decoration:none;'>overseasmarketing.co.in</a>
                <br><br>
                <center>
                    <img src='https://overseasmarketing.co.in/mail/mail-banner.png' alt='Overseas Marketing'>
                </center>
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