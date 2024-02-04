<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Quadmin</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="img/icon.png" type="image/x-icon">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- JS -->
    <script src="js/main.js"></script>
    <script src="js/post.js" defer></script>
    <!-- Inner Scripts -->
    <script>
        // Redirect to index if device width is less than 1000px
        setInterval(() => {
            let deviceWidth = window.innerWidth;
            // console.log(deviceWidth);
            if (deviceWidth < 1000) {
                if (!window.location.href.includes('no-mobile-phones')) {
                    window.location.href = 'no-mobile-phones';
                }
            } else if (deviceWidth > 1000) {
                if (window.location.href.includes('no-mobile-phones')) {
                    window.location.href = 'index';
                }
            }
        }, 1000);
    </script>
</head>