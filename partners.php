<!doctype html>
<html class="h-100" lang="en">

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <meta
    content='Overseas Marketing is a dynamic and innovative marketing firm that specializes in helping businesses expand their reach and tap into new markets overseas. Whether you are looking to expand into new regions or simply want to increase your global brand awareness, we have the expertise and resources to help you achieve your goals.'>
  <meta content='Overseas Marketing Company, Overseas Marketing Agency' name='keywords'>
  <meta name="author" content="Overseas Marketing">
  <!-- Title -->
  <title>Overseas Marketing</title>
  <!-- CSS -->
  <link rel="stylesheet" href="css/theme.min.css">
  <link rel="stylesheet" href="css/theme.css">
  <!-- Javascript -->
  <script src="js/components.js"></script>
  <!-- favicon -->
  <link rel='icon' href='img/tube.png'>
  <link rel="apple-touch-icon" sizes="180x180" href="img/tube.png">
  <!-- Icons -->
  <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@4cac1a6/css/all.css" rel="stylesheet"
    type="text/css">

  <style>
    /* inter-300 - latin */
    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 300;
      font-display: swap;
      src: local(''),
        url('fonts/inter-v12-latin-300.woff2') format('woff2'),
        /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('fonts/inter-v12-latin-300.woff') format('woff');
      /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
    }

    /* inter-400 - latin */
    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: local(''),
        url('fonts/inter-v12-latin-regular.woff2') format('woff2'),
        /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('fonts/inter-v12-latin-regular.woff') format('woff');
      /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
    }

    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 500;
      font-display: swap;
      src: local(''),
        url('fonts/inter-v12-latin-500.woff2') format('woff2'),
        /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('fonts/inter-v12-latin-500.woff') format('woff');
      /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
    }

    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: local(''),
        url('fonts/inter-v12-latin-700.woff2') format('woff2'),
        /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('fonts/inter-v12-latin-700.woff') format('woff');
      /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
    }
  </style>


</head>

<body class="bg-black text-white mt-0" data-bs-spy="scroll" data-bs-target="#navScroll">

  <!-- Navbar -->
  <script>
    document.write(navbar);
  </script>
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