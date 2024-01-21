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
                                Get A Quote
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-10 col-xl-8">
                    <div class="row d-flex align-items-start" data-aos="fade-right">
                        <div class="col-12 col-lg-12">
                            <p class="text-secondary">
                                <span class="fs-6">
                                    Overseas, works with businesses to help them expand their reach and tap into new
                                    markets overseas.
                                    Whether you are looking to expand into new regions or simply want to increase your
                                    global brand
                                    awareness, we have the expertise and resources to help you achieve your goals.
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-flex align-items-start justify-content-center py-vh-3 text-muted" data-aos="fade">
                <div class="col-12 col-lg-10 col-xl-9">
                    <div class="p-5 small bg-gray-900">
                        <center>
                            <h2>We need some information</h2>
                        </center>
                        <form method="POST" action="https://overseasmarketing.alwaysdata.net/files/contact.php"
                            id="contactForm" name="contactForm" class="contactForm">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="uoxbp" id="name"
                                            placeholder="Your name" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="xmtmc" id="email"
                                            placeholder="Your email" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="tthwy" class="form-control" id="message" cols="30" rows="4"
                                            placeholder="Your business description, and what you are looking for."
                                            required></textarea>
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
    <script>
    document.write(footer);
    </script>
    <!-- Footer -->

    <script src="https://overseasmarketing.co.in/js/bootstrap.bundle.min.js"></script>
    <script src="https://overseasmarketing.co.in/js/aos.js"></script>
    <script>
    AOS.init({
        duration: 800, // values from 0 to 3000, with step 50ms
    });
    </script>
    <script>
    let scrollpos = window.scrollY;
    const header = document.querySelector(".navbar");
    const header_height = header.offsetHeight;

    const add_class_on_scroll = () => header.classList.add("scrolled", "shadow-sm");
    const remove_class_on_scroll = () => header.classList.remove("scrolled", "shadow-sm");

    window.addEventListener('scroll', function() {
        scrollpos = window.scrollY;

        if (scrollpos >= header_height) {
            add_class_on_scroll();
        } else {
            remove_class_on_scroll();
        }

        console.log(scrollpos);
    })
    </script>

</body>

</html>