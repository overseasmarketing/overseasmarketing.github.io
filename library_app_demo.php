<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/fontawesome.min.css" rel="stylesheet">
    <link href="https://pro.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet">
    <style>
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        background-color: #333;
        border-bottom: 1px solid #444;
    }

    .scrolling-wrapper {
        overflow-x: auto;
        white-space: nowrap;
        scrollbar-width: none;

    }

    .scrolling-wrapper::-webkit-scrollbar {
        display: none;

    }

    .search-container {
        position: relative;
        margin-top: 20px;
    }

    .bg-search {
        background-color: #1a1a1a;
    }

    .search-bar {
        background-color: rgba(255, 255, 255, 0.1);
        color: rgb(10, 10, 10);
        border: none;
        border-radius: 20px;
        padding: 10px 20px 10px 40px;
        width: 100%;
        outline: none;
        box-shadow: none;
    }

    .search-bar::placeholder {
        color: rgba(217, 217, 217, 0.5);
    }

    .search-icon {
        position: absolute;
        top: 50%;
        left: 15px;
        transform: translateY(-50%);
        color: rgba(255, 255, 255, 0.5);
    }

    .search-input {
        color: white;
        background-color: #1a1a1a !important;
        border: none !important;
        box-shadow: none !important;
    }

    .search-input::placeholder {
        color: rgba(217, 217, 217, 0.5);
    }
    </style>
</head>

<body class="bg-dark">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-2 bg-dark">
                <div class="row p-2 d-flex justify-content-center align-items-center">
                    <div class="col-6 pt-3">
                        <i class="fa fa-solid fa-book text-white fs-1"></i>
                    </div>
                    <div class="col-6 pt-3">
                        <center>
                            <button class="btn btn-dark">Edit</button>
                        </center>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h1 class="text-white pt-2">Books</h1>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-10 bg-black text-white">
                <!-- Section: SubNav -->
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-12">
                        <div class="search-container">
                            <div class="search-bar">
                                <i class="fa fa-search search-icon"></i>
                                <input class="form-control search-input border-0 bg-search text-white"
                                    placeholder="What do you wanna read today?" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row d-flex justify-content-center align-items-center p-3">
                            <div class="col-6 text-start">
                                <h1 class="m-0 p-0">Home</h1>
                            </div>
                            <div class="col-6 text-end">
                                <h2 class="m-0 p-0">Girish Kale <i class="fa fa-solid fa-user"></i></h2>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row bg-dark">
                    <h3 class="text-secondary">More To Explore</h3>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="card bg-transparent text-white">
                            <img src="https://placehold.co/600x300" class="img-fluid">
                            <div class="card-body">
                                <h5 class="card-title book-title">Category #1</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="card bg-transparent text-white">
                            <img src="https://placehold.co/600x300" class="img-fluid">
                            <div class="card-body">
                                <h5 class="card-title book-title">Category #2</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row bg-dark">
                    <h3 class="text-secondary">All Time Best Seller</h3>
                    <center>
                        <div class="scrolling-wrapper row flex-row flex-nowrap">
                            <div class="col-sm-12 col-md-4 col-lg-2">
                                <div class="card bg-transparent text-white">
                                    <img src="https://placehold.co/400x600" class="img-fluid">
                                    <div class="card-body">
                                        <h5 class="card-title book-title">Book #1</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-2">
                                <div class="card bg-transparent text-white">
                                    <img src="https://placehold.co/400x600" class="img-fluid">
                                    <div class="card-body">
                                        <h5 class="card-title book-title">Book #2</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-2">
                                <div class="card bg-transparent text-white">
                                    <img src="https://placehold.co/400x600" class="img-fluid">
                                    <div class="card-body">
                                        <h5 class="card-title book-title">Book #3</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-2">
                                <div class="card bg-transparent text-white">
                                    <img src="https://placehold.co/400x600" class="img-fluid">
                                    <div class="card-body">
                                        <h5 class="card-title book-title">Book #4</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-2">
                                <div class="card bg-transparent text-white">
                                    <img src="https://placehold.co/400x600" class="img-fluid">
                                    <div class="card-body">
                                        <h5 class="card-title book-title">Book #5</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-2">
                                <div class="card bg-transparent text-white">
                                    <img src="https://placehold.co/400x600" class="img-fluid">
                                    <div class="card-body">
                                        <h5 class="card-title book-title">Book #6</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-2">
                                <div class="card bg-transparent text-white">
                                    <img src="https://placehold.co/400x600" class="img-fluid">
                                    <div class="card-body">
                                        <h5 class="card-title book-title">Book #7</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Icons CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>