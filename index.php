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

        <div class="w-100 h-100vh overflow-hidden position-relative bg-black text-white" data-aos="fade">
            <div class="position-absolute w-100 h-100 bg-black opacity-75 top-0 start-0"></div>
            <div class="container py-vh-4 position-relative mt-5 px-vw-5 text-center">
                <div class="row d-flex align-items-center justify-content-center py-vh-5">
                    <div class="col-12 col-xl-10">
                        <!-- <span class="h5 text-secondary fw-lighter">Overseas Marketing</span> -->
                        <h1 class="display-huge mt-3 mb-3 lh-1">
                            we do marketing stuff for <span class="text-danger" id="word">entrepreneurs</span>
                        </h1>
                        <script>
                        let audience = ['business owners', 'influencers', 'startups', 'small businesses', 'creators',
                            'artists', 'freelancers', 'designers', 'entrepreneurs', 'EVERYONE'
                        ]
                        let i = 0;
                        let word = document.getElementById('word');
                        setInterval(() => {
                            word.innerHTML = audience[i];
                            i++;
                            if (i == audience.length) {
                                i = 0;
                            }
                        }, 1500);
                        </script>
                    </div>
                    <div class="col-12 col-xl-8">
                        <p class="text-secondary">
                            Overseas Marketing is a dynamic and innovative marketing firm that specializes in helping
                            businesses
                            expand their reach and tap into new markets overseas.
                        </p>
                    </div>
                    <div class="col-12 text-center">
                        <a href="https://overseasmarketing.co.in/quote/" class="btn btn-xl btn-light">
                            Get a Quote
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="w-100 position-relative bg-black text-white bg-cover d-flex align-items-center">
      <div class="container-fluid px-vw-5">
        <div class="position-absolute w-100 h-50 bg-dark bottom-0 start-0"></div>
        <div class="row d-flex align-items-center position-relative justify-content-center px-0 g-5">
          <div class="col-12 col-lg-6">
            <img src="img/one.png" width="2280" height="1732" alt="abstract image" class="img-fluid position-relative rounded-5 shadow" data-aos="fade-up">
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <img src="img/two.png" width="1116" height="1578" alt="abstract image" class="img-fluid position-relative rounded-5 shadow" data-aos="fade-up" data-aos-duration="2000">
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <img src="img/three.png" width="1116" height="848" alt="abstract image" class="img-fluid position-relative rounded-5 shadow" data-aos="fade-up" data-aos-duration="3000">
          </div>
        </div>
      </div>
    </div> -->

        <div class="bg-dark">
            <div class="container px-vw-5 py-vh-5">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-lg-7 text-lg-end">
                        <span class="h5 text-secondary fw-lighter">What we do</span>
                        <h2 class="display-4">
                            we offer a wide range of <span class="text-danger">marketing services</span>, including
                            market research,
                            advertising, public relations, and
                            digital marketing.
                        </h2>
                    </div>
                    <div class="col-12 col-lg-5">
                        <h3 class="pt-5">Graphic Designing & Content Creation</h3>
                        <p class="text-secondary">
                            Graphic design is the process of visual communication and problem-solving through the use of
                            typography,
                            photography, and illustration.
                            <br>
                            <a href="services" class="link-fancy link-fancy-light me-2">Tell me more</a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                            </svg>
                        </p>
                        <h3 class="border-top border-secondary pt-5 mt-5">Web Development & SEO</h3>
                        <p class="text-secondary">
                            Web development is the process of creating and maintaining websites and web applications.
                            <br>
                            <a href="services" class="link-fancy link-fancy-light me-2">Tell me more</a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                            </svg>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-black py-vh-3">
            <div class="container bg-black px-vw-5 py-vh-3 rounded-5 shadow">
                <div class="row gx-5">
                    <div class="col-12 col-md-6 col-sm-12">
                        <div class="card bg-transparent mb-5" data-aos="zoom-in-up">
                            <div class="bg-dark shadow rounded-5 p-0">
                                <img src="img/services/graphic_designing.png" width="100%" alt="abstract image"
                                    class="img-fluid rounded-5 no-bottom-radius">
                                <div class="p-5">
                                    <h2 class="fw-lighter">Graphic Designing</h2>
                                    <p class="pb-4 text-secondary">
                                        Graphic design is the process of visual communication and problem-solving
                                        through the use of
                                        typography, photography, and illustration.
                                    </p>
                                    <!-- <a href="#" class="link-fancy link-fancy-light">Read more</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="card bg-transparent" data-aos="zoom-in-up">
                            <div class="bg-dark shadow rounded-5 p-0">
                                <img src="img/services/web_development.png" width="100%" alt="abstract image"
                                    class="img-fluid rounded-5 no-bottom-radius">
                                <div class="p-5">
                                    <h2 class="fw-lighter">Web Development</h2>
                                    <p class="pb-4 text-secondary">
                                        Web development is the process of creating and maintaining websites and web
                                        applications.
                                    </p>
                                    <!-- <a href="#" class="link-fancy link-fancy-light">Read more</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-sm-12">
                        <div class="p-5 pt-0 mt-5" data-aos="fade">
                            <span class="h5 text-secondary fw-lighter">What do we do?</span>
                            <h2 class="display-4">There is a lot we do. Here is a small sneak peek</h2>
                        </div>
                        <div class="card bg-transparent mb-5 mt-5" data-aos="zoom-in-up">
                            <div class="bg-dark shadow rounded-5 p-0">
                                <img src="img/services/seo.png" width="100%" alt="abstract image"
                                    class="img-fluid rounded-5 no-bottom-radius">
                                <div class="p-5">
                                    <h2 class="fw-lighter">SEO</h2>
                                    <p class="pb-4 text-secondary">
                                        SEO, or Search Engine Optimization, is the process of improving the visibility
                                        and ranking of a
                                        website or web page in search engine results pages (SERPs).
                                    </p>
                                    <!-- <a href="#" class="link-fancy link-fancy-light">Read more</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="card bg-transparent" data-aos="zoom-in-up">
                            <div class="bg-dark shadow rounded-5 p-0">
                                <img src="img/services/barand_design.png" width="100%" alt="abstract image"
                                    class="img-fluid rounded-5 no-bottom-radius">
                                <div class="p-5">
                                    <h2 class="fw-lighter">Brand Designing</h2>
                                    <p class="pb-4 text-secondary">
                                        Elevate your brand's presence with our expert brand designing. Craft captivating
                                        visual identities
                                        that resonate with your audience and make a lasting impression. Stand out in the
                                        digital landscape.
                                    </p>
                                    <!-- <a href="#" class="link-fancy link-fancy-light">Read more</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="bg-dark position-relative">
      <div class="container px-vw-5 py-vh-5">
        <div class="row d-flex align-items-center">

          <center>
            <div class="col-12 col-lg-6 col-md-12 col-sm-12">
              <img class="img-fluid rounded-5 mb-n5 shadow" src="img/services/advertising.png" width="50%" alt="a nice person"  data-aos="zoom-in-right">
              <img class="img-fluid rounded-5 ms-5 mb-n5 shadow" src="img/services/uxui.png" width="50%" alt="another nice person"  data-aos="zoom-in-up">
            </div>
          </center>

          <div class="col-12 col-lg-5 bg-dark rounded-5 py-5" data-aos="fade">
            <span class="h5 text-secondary fw-lighter">Do you like our services?</span>
            <h2 class="display-4">We constantly adding new services to our agency.</h2>
          </div>
        </div>
      </div>
    </div> -->

        <div class="bg-black">
            <div class="container px-vw-5 py-vh-5">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-lg-8 text-center text-lg-end" data-aos="zoom-in-right">
                        <span class="h5 text-secondary fw-lighter">Pricing</span>
                        <h2 class="display-4">What we charge?</h2>
                        <p class="lead text-secondary">
                            We charge according to the level of service you require.</small>
                        </p>
                    </div>
                    <div class="col-12 col-lg-4 bg-dark rounded-5 py-vh-3 text-center my-5" data-aos="zoom-in-up">
                        <h2 class="display-huge m-3 text-white">
                            <!-- <span class="fs-4 me-2 fw-light"> -->
                            <!-- ₹</span><span class="border-bottom border-5">699</span><span class="fs-6 fw-light">/day -->
                            <i class="fa-solid fa-sack-dollar"></i>
                        </h2>
                        <!-- <a href="services" class="btn btn-xl btn-light">Services
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
              </svg>
            </a> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid px-vw-5 position-relative" data-aos="fade">
            <div class="position-absolute w-100 h-50 bg-black top-0 start-0"></div>
            <div class="position-relative py-vh-5 bg-cover bg-center rounded-5"
                style="background-image: url(img/webp/abstract12.webp)">
                <div class="container bg-black px-vw-5 py-vh-3 ro unded-5 shadow">
                    <div class="row d-flex align-items-center">
                        <div class="col-12 d-flex align-items-center bg-dark shadow rounded-5 p-0"
                            data-aos="zoom-in-up">
                            <div class="row d-flex justify-content-center">
                                <div class="col-12 col-sm-12 col-md-8 col-lg-8 my-1">
                                    <p class="lead p-5 border-secondary">
                                        <span class="text-secondary fs-6">
                                            Dear <span id="name" class="text-white">Business Owner</span>,
                                            <br>
                                            Whether you are looking to expand into new regions or simply want to
                                            increase your global brand
                                            awareness, we have the expertise and resources to help you achieve your
                                            goals. With a team of
                                            experienced professionals, we offer a wide range of digital marketing
                                            services. Trust us to help
                                            you
                                            navigate the complexities of the global marketplace and drive your brand to
                                            new heights of
                                            success.
                                            <br>
                                            Warm Regards,<br>
                                            <span class="text-white">Overseas Marketing</span>
                                            <script>
                                            let customerLetter = ['business owners', 'influencers', 'startups',
                                                'small businesses', 'creators', 'artists', 'freelancers',
                                                'designers', 'entrepreneurs', 'everyone'
                                            ]
                                            let j = 0;
                                            let name = document.getElementById('name');
                                            setInterval(() => {
                                                name.innerHTML = audience[j];
                                                j++;
                                                if (j == audience.length) {
                                                    j = 0;
                                                }
                                            }, 1500);
                                            </script>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row pt-5">
                            <span class="h5 text-secondary fw-lighter">The numbers</span>
                            <div class="col-12 col-md-4 col-lg-4 col-sm-12">
                                <h2 class="display-huge fw-bolder border-secondary" data-aos="zoom-in-left">10+</h2>
                                <p class="h4 fw-lighter text-secondary">
                                    Clever minds
                                </p>
                            </div>
                            <div class="col-12 col-md-4 col-lg-4 col-sm-12">
                                <h2 class="display-huge fw-bolder border-secondary" data-aos="zoom-in-left">911
                                </h2>
                                <p class="h4 fw-lighter text-secondary">
                                    Cups of coffee
                                </p>
                            </div>
                            <div class="col-12 col-md-4 col-lg-4 col-sm-12">
                                <h2 class="display-huge fw-bolder border-secondary" data-aos="zoom-in-left">98%</h2>
                                <p class="h4 fw-lighter text-secondary">
                                    Happy clients
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-dark py-vh-5">
            <div class="container px-vw-5">
                <div class="row d-flex gx-5 align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="rounded-5 bg-black p-5 shadow" data-aos="zoom-in-right">
                            <div class="fs-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>


                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>


                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>


                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>


                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>


                            </div>
                            <p class="lead text-secondary fs-6">
                                Our experience working with Overseas Digital Marketing Agency on our website development
                                needs was
                                fantastic. They recognized the needs of our target market and our business goals, which
                                produced a
                                beautiful and easy-to-use website. The attention to detail, responsive design makes them
                                the perfect
                                partner for building a powerful online presence. Strongly advised!
                            </p>
                            <div
                                class="d-flex justify-content-start align-items-center border-top border-secondary pt-3">
                                <img src="img/clients/code.png" width="96" height="96" class="rounded-circle me-3"
                                    alt="a nice person" data-aos="fade">
                                <div>
                                    <span class="h6 fw-5">CODE CoWorking</span><br>
                                    <small class="text-secondary">Kala Ghoda, Mumbai</small>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-5 bg-black p-5 shadow mt-5" data-aos="zoom-in-right">
                            <div class="fs-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>


                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>


                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>


                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>


                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-star-half" viewBox="0 0 16 16">
                                    <path
                                        d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z" />
                                </svg>

                            </div>
                            <p class="lead text-secondary fs-6">
                                Working with Overseas Digital Marketing Agency for our social media management needs was
                                a game-changer.
                                Their expertise and strategic approach increased our brand engagement and follower
                                growth significantly.
                                Their up-to-date knowledge and open communication made them an invaluable partner.
                                Highly recommended
                                for businesses seeking effective social media management solutions.
                            </p>
                            <div
                                class="d-flex justify-content-start align-items-center border-top border-secondary pt-3">
                                <img src="img/clients/ingrain.png" width="96" height="96" class="rounded-circle me-3"
                                    alt="a nice person" data-aos="fade">
                                <div>
                                    <span class="h6 fw-5">Ingrain</span><br>
                                    <small class="text-secondary">Mumbai</small>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="p-5 pt-0" data-aos="fade">
                            <span class="h5 text-secondary fw-lighter">What others have to say</span>
                            <h2 class="display-4">Our Client Testimonials</h2>
                        </div>
                        <div class="rounded-5 bg-black p-5 shadow mt-5" data-aos="zoom-in-left">
                            <div class="fs-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>


                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>


                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>


                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>


                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>


                            </div>
                            <p class="lead text-secondary fs-6">
                                Working with Overseas Digital Marketing Agency for our SEO needs was a game-changer.
                                Their expertise and
                                strategic approach improved our search engine rankings and boosted organic traffic.
                                Their commitment to
                                staying ahead of industry trends and transparent communication made them an invaluable
                                partner. Highly
                                recommended for businesses seeking effective SEO solutions.
                            </p>
                            <div class="d-flex justify-content-start align-items-center border-top pt-3">
                                <img src="img/clients/mb.png" width="96" height="96" class="rounded-circle me-3"
                                    alt="a nice person" data-aos="fade">
                                <div>
                                    <span class="h6 fw-5">Monish Bhagnani</span><br>
                                    <small>MB Creatives</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- End Footer -->

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