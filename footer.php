<footer class="bg-black">
    <div class="container pt-3 text-secondary">
        <div class="row w-100 d-flex align-items-center justify-content-center p-3">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <a class="navbar-brand text-center" href="https://overseasmarketing.co.in/">
                    <img width="50" class="img-fluid navLogo" src="https://overseasmarketing.co.in/img/tube.png"
                        alt="Overseas Logo">
                    <span class="fw-bolder mx-2">Overseas Marketing</span>
                </a>
                <br>
                <br>
                <p>
                    <b>Location</b>
                    5th floor, ITTS House Kala Ghoda, Fort, Mumbai 400001
                    <br>
                    <b>Phone</b>
                    <a class="text-decoration-none text-secondary" href="tel:9090503838">+91 90905 03838</a>
                    <br>
                    <b>Email</b>
                    <a class="text-decoration-none text-secondary"
                        href="mailto:contact@overseasmarketing.co.in">contact@overseasmarketing.co.in</a>
                </p>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="mt-4">
                    <center>
                        <a class="btn btn-dark m-1" href="https://overseasmarketing.co.in" aria-label="Home">Home</a>
                        <a class="btn btn-dark m-1" href="services" aria-label="Services">Services</a>
                        <a class="btn btn-dark m-1" href="about" aria-label="About">About</a>
                        <a class="btn btn-dark m-1" href="contact" aria-label="Contact">Contact</a>
                        <a class="btn btn-dark m-1" href="work" aria-label="Work">Work</a>
                        <a class="btn btn-dark m-1" href="T&C.pdf" aria-label="Terms & Conditions">Terms &
                            Conditions</a>
                    </center>
                </div>
            </div>
        </div>
        <div class="container text-center pb-5 pt-2">
            © <span id="currentYear"></span> Overseas Marketing. All Rights Reserved.
        </div>
    </div>
</footer>

<!-- AOS JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>
    // Initialize AOS
    AOS.init({
        duration: 800, // values from 0 to 3000, with step 50ms
    });

    // Set current year dynamically
    document.getElementById('currentYear').textContent = new Date().getFullYear();
</script>