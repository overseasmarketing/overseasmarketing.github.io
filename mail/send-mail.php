<?php

$user = $_POST['user'];
$to = $_POST['email'];
$email_type = $_POST['email_type'];

if ($email_type == "approach-mail") {
    // Subject
    $subject = "Elevate Your Business with Overseas Marketing - Tailored Solutions for Growth!";
    // Message Content
    $message = "
    <html>
        <head>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet'>
        </head>
        <body class='container bg-black text-white p-5'>
            <h1 class='m-0 p-0 fs-1'>Dear " . $user . ",</h1>
            <div class='m-0 p-0'>
                <br>
                We hope this message finds you in great spirits. Overseas Marketing, a dynamic and innovative marketing
                firm, is excited to connect with your organization to explore how our tailored solutions can drive the
                growth of your business.
                <br><br>
                At Overseas Marketing, we specialize in a diverse range of services designed to boost your brand's
                visibility and impact:
                <br><br>
                <div class='mx-3'>
                    <ol>
                        <li>
                            Graphic Designing:
                            <ul>
                                <li>
                                    Captivate your audience with compelling visual communication through our expert
                                    graphic
                                    design services.
                                </li>
                            </ul>
                        </li>
                        <li>
                            Web Development:
                            <ul>
                                <li>
                                    Elevate your online presence with seamlessly designed websites and web applications
                                    that
                                    align with your brand identity.
                                </li>
                            </ul>
                        </li>
                        <li>
                            SEO (Search Engine Optimization):
                            <ul>
                                <li>
                                    Boost your website's visibility on search engines and attract more organic traffic
                                    with
                                    our proven
                                    SEO strategies.
                                </li>
                            </ul>
                        </li>
                        <li>
                            Social Media Management:
                            <ul>
                                <li>
                                    Harness the power of social platforms to engage, grow, and maintain a strong online
                                    presence for
                                    your
                                    brand.
                                </li>
                            </ul>
                        </li>
                    </ol>
                </div>
                Here's how Overseas Marketing can make a significant impact on your business:
                <div class='mx-3'>
                    <ul>
                        <li>Strategic Planning:
                            <ul>
                                <li>
                                    Develop customized marketing strategies aligned with your business objectives.
                                </li>
                            </ul>
                        </li>
                        <li>
                            Visual Excellence:
                            <ul>
                                <li>
                                    Elevate your brand with captivating graphic design, video editing, and brand design.
                                </li>
                            </ul>
                        </li>
                        <li>
                            Digital Presence:
                            <ul>
                                <li>
                                    Optimize your online presence through effective SEO, web development, and social
                                    media
                                    management.
                                </li>
                            </ul>
                        </li>
                        <li>
                            Global Expansion:
                            <ul>
                                <li>
                                    Tap into new markets and audiences with our overseas marketing expertise.
                                </li>
                            </ul>
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
            </div>
        </body>
    </html>
    ";
    // Headers
    $from = "contact@overseasmarketing.co.in";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $from" . "\r\n";
    // Send the email
    $mailSent = mail($to, $subject, $message, $headers);
    // Check if the email was sent successfully
    if ($mailSent) {
        echo "Email sent successfully.";
        echo $message;
    } else {
        echo "Failed to send email. Please contact developer.";
        // echo $message;
    }
} else {
    echo "Invalid Email Type";
}
?>