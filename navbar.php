<nav class="navbar navbar-dark bg-transparent text-white">
    <div class="container">
        <div class="row w-100 d-flex align-items-center justify-content-center p-3">
            <div class="col-10">
                <a class="navbar-brand text-center" href="https://overseasmarketing.co.in/">
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
                                onclick="openLink('https://overseasmarketing.co.in');">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link cursor-pointer"
                                onclick="openLink('https://overseasmarketing.co.in/services')">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link cursor-pointer"
                                onclick="openLink('https://overseasmarketing.co.in/about')">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link cursor-pointer"
                                onclick="openLink('https://overseasmarketing.co.in/contact')">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link cursor-pointer"
                                onclick="openLink('https://overseasmarketing.co.in/work')">Work</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link cursor-pointer"
                                onclick="openLink('https://overseasmarketing.co.in/partners')">Partners</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link cursor-pointer"
                                onclick="openLink('https://overseasmarketing.co.in/OverAI')">
                                OverAI <span class="badge bg-primary">NEW</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    // Navbar
    function showClose() {
        document.getElementById("close").style.display = "block";
        document.getElementById("bars").style.display = "none";
    }

    function showBars() {
        document.getElementById("bars").style.display = "block";
        document.getElementById("close").style.display = "none";
    }

    function openLink(link) {
        window.location.href = link;
    }
</script>