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

        <div class="w-100 overflow-hidden position-relative bg-black text-white" data-aos="fade">
            <div class="position-absolute w-100 h-100 bg-black opacity-75 top-0 start-0"></div>
            <div class="container py-vh-4 position-relative mt-5 px-vw-5 text-center">
                <div class="row d-flex align-items-center justify-content-center py-vh-5">
                    <div class="col-12 col-xl-10">
                        <!-- <span class="h5 text-secondary fw-lighter">Overseas Marketing</span> -->
                        <h1 class="display-huge mt-3 mb-3 lh-1">404</h1>
                    </div>
                    <div class="col-12 col-xl-8">
                        <p class="lead text-secondary">
                            It seems like your query entered a parallel dimension where cats rule the internet. Our team
                            of feline
                            enthusiasts is coaxing it back.
                        </p>
                    </div>
                    <div class="col-12 text-center">
                        <a href="https://overseasmarketing.co.in" class="btn btn-xl btn-light">
                            Go Back?
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- End Footer -->

    <!-- <script src="https://overseasmarketing.co.in/js/bootstrap.bundle.min.js"></script> -->
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

        window.addEventListener('scroll', function () {
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