<!doctype html>
<html class="h-100" lang="en">

<!-- Head -->
<?php include 'head.php'; ?>
<!-- Head -->

<body class="bg-black text-white" data-bs-spy="scroll" data-bs-target="#navScroll">

    <!-- Navbar -->
    <?php include 'navbar.php'; ?>
    <!-- Navbar -->

    <main>

        <div class="container">

            <div class="row d-flex justify-content-center py-vh-5 pb-0 mt-5">
                <div class="col-12 col-lg-10 col-xl-8">
                    <div class="row">
                        <div class="col-12">
                            <br>
                            <h1 class="display-1 fw-bold">
                                Contact Us
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-10 col-xl-8">
                    <div class="row d-flex align-items-start" data-aos="fade-right">
                        <div class="col-12 col-lg-7">
                            <!-- <h2 class="h3 mt-5 border-top pt-5">Overseas Marketing</h2> -->
                            <p class="text-secondary">
                                <!-- A Digital Marketing Agency<br> -->
                                <span class="fs-6">
                                    Overseas, works with businesses to help them expand their reach and tap into new
                                    markets overseas.
                                    Whether you are looking to expand into new regions or simply want to increase your
                                    global brand
                                    awareness, we have the expertise and resources to help you achieve your goals.
                                </span>
                            </p>
                        </div>
                        <div class="col-12 col-lg-4 offset-lg-1 bg-gray-900 p-5 mt-5">
                            <h3 class="h6">Social Media</h3>
                            <p class="text-secondary">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="https://www.instagram.com/overseasmarketing.co.in/"
                                        class="link-fancy link-fancy-light">Instagram</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://api.whatsapp.com/send/?phone=9090503838&text=Hey%2C+I+am+interested+in+your+marketing+services"
                                        class="link-fancy link-fancy-light">WhatsApp</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.linkedin.com/in/overseas-marketing-baa857264/"
                                        class="link-fancy link-fancy-light">LinkedIn</a>
                                </li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-flex align-items-start justify-content-center py-vh-3 text-muted" data-aos="fade">
                <div class="col-12 col-lg-10 col-xl-9">
                    <div class="p-5 small bg-gray-900">
                        <center>
                            <h2>Contact Form</h2>
                        </center>
                        <form method="POST" action="https://overseasmarketing.alwaysdata.net/files/contact.php"
                            id="contactForm" name="contactForm" class="contactForm">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="uoxbp" id="name"
                                            placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="xmtmc" id="email"
                                            placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="tthwy" class="form-control" id="message" cols="30" rows="4"
                                            placeholder="Message" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="submit" value="Send Message" class="btn btn-xl btn-light">
                                        <div class="submitting"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </main>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- End Footer -->

</body>

</html>