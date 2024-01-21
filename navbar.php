<!-- <nav id="navScroll" class="navbar navbar-dark bg-black fixed-top px-vw-5" tabindex="0">

    <a class="navbar-brand text-center" href=".">
        <img width="48" class="img-fluid navLogo" src="https://overseasmarketing.co.in/img/tube.png"
            alt="Overseas Logo">
        <span class="fw-bolder mx-2">Overseas Marketing</span>
    </a>

    <div class="navbar-nav list-group list-group-horizontal">
        <li class="nav-item">
            <a class="nav-link fs-5" href="https://overseasmarketing.co.in/services" aria-label="Our Services">
                services
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-5" href="https://overseasmarketing.co.in/about" aria-label="About Us">
                about
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-5" href="https://overseasmarketing.co.in/contact" aria-label="Contact Us">
                contact
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-5" href="https://overseasmarketing.co.in/work" aria-label="Our Work">
                work
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-5" href="https://overseasmarketing.co.in/partners" aria-label="Our Partners">
                partners
            </a>
        </li>
    </div>

</nav> -->

<nav class="navbar navbar-dark bg-transparent text-white">
    <div class="container-fluid">
        <div class="row w-100 d-flex align-items-center justify-content-center p-3">
            <div class="col-10">
                <a class="navbar-brand text-center" href=".">
                    <img width="48" class="img-fluid navLogo" src="https://overseasmarketing.co.in/img/tube.png"
                        alt="Overseas Logo">
                    <span class="fw-bolder mx-2">Overseas Marketing</span>
                </a>
            </div>
            <div class="col-2">
                <center>
                    <button style="box-shadow: none; border: none; transition: 200ms;"
                        class="navbar-toggler navbar-button bg-light text-dark" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i onclick="showClose()" style="display: block;" id="bars" class="fa fa-solid fa-bars p-2"></i>
                        <i onclick="showBars()" style="display: none;" id="close" class="fa fa-solid fa-xmark p-2"></i>
                    </button>
                </center>
            </div>
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-transparent p-4">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link cursor-pointer"
                                onclick="openLink('https://overseasmarketing.co.in')">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link cursor-pointer"
                                onclick="openLink('https://overseasmarketing.co.in/services')">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link cursor-pointer"
                                onclick="openLink('https://overseasmarketing.co.in/about')">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link cursor-pointer"
                                onclick="openLink('https://overseasmarketing.co.in/contact')">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link cursor-pointer"
                                onclick="openLink('https://overseasmarketing.co.in/work')">Our Work</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link cursor-pointer"
                                onclick="openLink('https://overseasmarketing.co.in/partners')">Partners</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link cursor-pointer"
                                onclick="openLink('https://overseasmarketing.co.in/OverAI')">OverAI</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>