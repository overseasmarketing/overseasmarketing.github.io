<!doctype html>
<html class="h-100" lang="en">

<head>
    <?php include 'head.php'; ?>
</head>

<body class="bg-black text-white" data-bs-spy="scroll" data-bs-target="#navScroll">

    <?php include 'navbar.php'; ?>

    <main>
        <div class="container">
            <div class="row d-flex justify-content-center py-vh-5 pb-0 mt-5">
                <div class="col-12 col-lg-10 col-xl-8">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="display-1 fw-bold">Contact</h1>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-10 col-xl-8">
                    <div class="row d-flex align-items-start" data-aos="fade-right">
                        <div class="col-12 col-lg-7">
                            <p class="text-secondary">
                                <span class="fs-6">
                                    Overseas, works with businesses to help them expand their reach and tap into new
                                    markets overseas. Whether you are looking to expand into new regions or simply want
                                    to increase your
                                    global brand awareness, we have the expertise and resources to help you achieve your
                                    goals.
                                </span>
                            </p>
                        </div>
                        <div class="col-12 col-lg-4">
                            <h3 class="h6">Social Media</h3>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="https://www.instagram.com/overseasmarketing.co.in/"
                                        class="text-decoration-none">Instagram</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://api.whatsapp.com/send/?phone=9090503838&text=Hey%2C+I+am+interested+in+your+marketing+services"
                                        class="text-decoration-none">WhatsApp</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.linkedin.com/in/overseas-marketing-baa857264/"
                                        class="text-decoration-none">LinkedIn</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row d-flex justify-content-center my-2" data-aos="fade">
                <div class="col-12 col-lg-10 col-xl-8">
                    <form method="POST" action="submit.php" class="bg-transparent rounded shadow-sm">
                        <h1>Schedule A Meeting</h1>
                        <br>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control form-input" name="name" id="name" required>
                            </div>

                            <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                                <label for="email" class="form-label">Your Email</label>
                                <input type="email" class="form-control form-input" name="email" id="email" required>
                            </div>

                            <div class="col-12 mb-3">
                                <div class="row">
                                    <div class="col-lg-3 mb-2 mb-lg-0">
                                        <label for="country_code" class="form-label">Country Code</label>
                                        <select class="form-select form-input" name="country_code" id="country_code">
                                            <option class="text-black" value="91" selected>India (+91)</option>
                                            <?php include 'phone-option-group.php'; ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-9">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <small id="phoneNumberError" class="text-danger"></small>
                                        <input type="tel" class="form-control form-input" id="phone" name="phone"
                                            required maxlength="10" pattern="\d+" oninput="validatePhoneNumber(this)">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                                <label for="meeting_mode" class="form-label">Meeting Mode</label>
                                <select class="form-select form-input" name="meeting_mode" id="meeting_mode" required>
                                    <option class="text-black" value="online">Online</option>
                                    <option class="text-black" value="offline">Offline</option>
                                </select>
                            </div>

                            <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                                <label for="meeting_date" class="form-label">Meeting Date</label>
                                <input type="date" class="form-control form-input" name="meeting_date" id="meeting_date"
                                    required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="message" class="form-label">Your Message</label>
                                <textarea class="form-control form-input" name="message" id="message" rows="4"
                                    required></textarea>
                            </div>

                            <input type="hidden" value="<?php echo date('d-m-Y'); ?>" name="date" id="date">

                            <div class="col-12 my-2">
                                <button type="submit" class="btn btn-lg btn-light w-100">
                                    <i class="fa fa-inbox"></i> Submit
                                </button>
                            </div>
                        </div>
                    </form>

                    <script>
                        function validatePhoneNumber(input) {
                            var numericRegex = /^\d+$/;
                            var errorElement = document.getElementById('phoneNumberError');
                            if (!numericRegex.test(input.value)) {
                                errorElement.textContent = "Only numeric values are allowed";
                                input.value = input.value.slice(0, -1);
                            } else {
                                errorElement.textContent = '';
                            }
                        }
                        document.getElementById('meeting_date').min = new Date().toISOString().split('T')[0];
                    </script>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

</body>

</html>