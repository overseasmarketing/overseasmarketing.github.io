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
                    <button onclick="navbarIcon()" style="box-shadow: none; border: none; transition: 200ms;"
                        class="navbar-toggler navbar-button bg-light text-dark" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i id="bar-icon" style="display: block;" class="fa fa-solid fa-bars p-2"></i>
                        <i id="x-icon" style="display: none;" class="fa fa-solid fa-xmark p-2"></i>
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
                            <a class="nav-link cursor-pointer" onclick="openLink('services')">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link cursor-pointer" onclick="openLink('about')">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link cursor-pointer" onclick="openLink('contact')">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link cursor-pointer" onclick="openLink('work')">Work</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link cursor-pointer" onclick="openLink('T&C.pdf')">Terms & Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    // Navbar
    function navbarIcon() {
        let barIcon = document.getElementById('bar-icon');
        let xIcon = document.getElementById('x-icon');

        if (barIcon.style.display === 'block') {
            barIcon.style.display = 'none';
            xIcon.style.display = 'block';
        } else {
            barIcon.style.display = 'block';
            xIcon.style.display = 'none';
        }
    }

    function openLink(link) {
        window.location.href = link;
    }
</script>