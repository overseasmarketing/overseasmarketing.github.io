<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portfolio</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="QuantumByteStudios">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <!-- GoogleFonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        @font-face {
            font-family: 'Futura';
            src: url('fonts/futura.woff2') format('woff2'),
                url('fonts/futura.woff') format('woff');
            font-weight: normal;
            font-style: normal;
        }

        body {
            font-family: 'Futura', sans-serif;
        }

        .title-name {
            font-size: 150px;
            line-height: 80%;
            font-weight: 1000;
            filter: invert(1);
            opacity: 0.5;
        }

        .title-tagline {
            font-weight: 1000;
            color: white;
        }

        @media all and (max-width: 1000px) {
            .title-name {
                font-size: 50px;
            }
        }

        .bg-sand {
            background-image: url("img/sand.png");
            background-size: cover;
            background-repeat: no-repeat;
        }

        .bg-sand-light {
            background-color: black;
            background-image: url("img/sand.png");
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>

    <!-- Section 1 -->
    <div style="height: 100vh;" class="container-fluid p-0 bg-sand d-flex justify-content-center align-items-center">
        <div class="animate__animated animate__fadeIn">
            <center>
                <span class="fs-1 text-white">
                    GRAPHIC DESIGNER
                </span>
                <br>
                <span class="title-name">
                    TANUSHREE
                    <br>
                    SAWALE
                </span>
            </center>
        </div>
    </div>

    <!-- Section 2 -->
    <div style="height: 100vh;"
        class="container-fluid p-0 bg-sand-light opacity-50 d-flex justify-content-center align-items-center">
        <div class="animate__animated animate__fadeIn">
            <center>
                <span class="fs-1 title-tagline">
                    TURNING CONCEPTS INTO REALITY
                </span>
            </center>
        </div>
    </div>

</body>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>

</html>