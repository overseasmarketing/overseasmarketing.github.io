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
          <div class="row ">
            <div class="col-12">
              <br>
              <h1 class="display-1 fw-bold">
                <!-- <span class="fs-5 text-secondary">Overseas Marketing</span><br> -->
                Partners
              </h1>
              <p class="lead border-top pt-5 mt-5" data-aos="fade-up">
                Our marketing company thrives on dynamic partnerships, leveraging synergies to craft innovative
                campaigns. Collaborate
                with us for tailored strategies that elevate your brand and drive unparalleled success.
              </p>
            </div>
          </div>
        </div>

        <div class="row d-flex align-items-start m-5 p-5" data-aos="fade-right">
          <div class="col-6">
            <img class="img-fluid partners-logo" src="img/inc.png" alt="">
          </div>
          <div class="col-6">
            <img class="img-fluid partners-logo" src="img/qb.png" alt="">
          </div>
        </div>


      </div>
    </div>

  </main>

  <!-- Footer -->
  <script>
    document.write(footer);
  </script>


  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/aos.js"></script>
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

      if (scrollpos >= header_height) { add_class_on_scroll(); }
      else { remove_class_on_scroll(); }

      console.log(scrollpos);
    })
  </script>

</body>

</html>