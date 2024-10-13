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

        <div class="container p-5 animate__animated animate__fadeIn">
            Namaste,
            <h1>
                Where creativity meets strategy to deliver measurable results for your brand.
            </h1>
            <p>
                We are dynamic and innovative marketing firm that specializes in helping businesses and influencer's
                expand their reach and tap into new markets overseas.
            </p>
        </div>

        <div class="container p-5">
            <h2 class="text-start">Our Clients</h2>
            <center>
                <?php
                $directory = 'img/clients';
                $images = glob($directory . '/*.{jpg,jpeg,png,gif,webp}', GLOB_BRACE);

                foreach ($images as $image) {
                    // Extract file name for alt attribute
                    $imageName = pathinfo($image, PATHINFO_FILENAME);
                    echo '<img class="img-fluid m-1 rounded-circle client-logo cursor-pointer" loading="lazy" src="' . $image . '" alt="Logo of ' . htmlspecialchars($imageName) . '">';
                }
                ?>
            </center>
        </div>

    </main>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- End Footer -->

</body>

</html>