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
                        aria-expanded="false" aria-label="Toggle navigation" onclick="navbarIcon()">
                        <i id="bar-icon" class="fa fa-solid fa-bars p-2"></i>
                        <i id="x-icon" class="fa fa-solid fa-xmark p-2 d-none"></i>
                    </button>
                </center>
            </div>
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-transparent p-4">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://overseasmarketing.co.in">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="work">Work</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="T&C.pdf">Terms & Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    // Navbar Icon Toggle
    function navbarIcon() {
        let barIcon = document.getElementById('bar-icon');
        let xIcon = document.getElementById('x-icon');

        barIcon.classList.toggle('d-none');
        xIcon.classList.toggle('d-none');
    }
</script>