<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front Page</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <style>
        * {
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #f8f9fa;
            color: #333;
        }

        .h-font {
            font-family: 'Roboto', sans-serif;
        }

        /* Navbar Styling */
        nav {
            background-color: #fff;
            border-bottom: 2px solid #ddd;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.75rem;
            color: #007bff;
            transition: color 0.3s ease;
        }

        .navbar-brand:hover {
            color: #0056b3;
        }

        .navbar-nav .nav-link {
            font-size: 1rem;
            margin-left: 1rem;
            color: #555;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #007bff;
        }

        /* Swiper */
.swiper {
    width: 100%;
    height: 80vh; /* Adjust height of the swiper container */
}

.swiper-slide {
    display: flex;
    justify-content: center;
    align-items: center;
}

.swiper-slide img {
    width: 90%; /* Set the width to 80% of the container */
    max-height: 800px; /* Limit the max height of the image */
    object-fit: cover;
    border-radius: 8px;
    transition: transform 0.5s ease;
}

.swiper-slide img:hover {
    transform: scale(1.05);
}
        /* Card Styling */
        .card-body {
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .card-body:hover {
            transform: translateY(-10px);
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 1rem;
        }

        .card-text {
            color: #777;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            border-radius: 25px;
            text-transform: uppercase;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        /* Fixed Image Height for Cards */
        .img-fixed {
            height: 220px;
            object-fit: cover;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .img-fixed:hover {
            transform: scale(1.1);
        }

        /* Button for More Places */
        .btn-outline-dark {
            font-weight: 600;
            border-radius: 30px;
            border-width: 2px;
            text-transform: uppercase;
            padding: 0.5rem 2rem;
            font-size: 1rem;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .btn-outline-dark:hover {
            background-color: #333;
            color: #fff;
        }

        /* General Container Styling */
        .container-fluid {
            padding: 0;
            width: 100vw;
            margin: 0;
            background-color: #fff;
        }

        .container {
            background-color: #fff;
        }

        h2 {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-top: 50px;
            margin-bottom: 40px;
            color: #333;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .swiper-slide img {
                height: auto;
            }

            .card-body {
                padding: 1.5rem;
            }

            .btn-primary {
                padding: 0.6rem 1.3rem;
            }

            .btn-outline-dark {
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font " href="webpage.php">PhilTravel</a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="front.php">Log page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gprofile.php">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Swiper -->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="img/phil.jpg" alt="Slide 1"></div>
                <div class="swiper-slide"><img src="img/mayon.jpg" alt="Slide 2"></div>
                <div class="swiper-slide"><img src="img/bohol.jpg" alt="Slide 3"></div>
                <div class="swiper-slide"><img src="img/plwn.jpg" alt="Slide 4"></div>
                <div class="swiper-slide"><img src="img/manila.jpg" alt="Slide 5"></div>
                <div class="swiper-slide"><img src="img/bbb.jpg" alt="Slide 6"></div>
                <div class="swiper-slide"><img src="img/boracay.jpg" alt="Slide 7"></div>
                <div class="swiper-slide"><img src="img/Coron.jpg" alt="Slide 8"></div>
                <div class="swiper-slide"><img src="img/LakeSebu.jpg" alt="Slide 9"></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <h2 class="mt-5 pt-4 mb-4 text-center hw-bold h-font">THE PHILIPPINE ATTRACTION</h2>

    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6 mt-3 text-center">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="img/food.jpg" class="card-img-top img-fixed">
                    <div class="card-body">
                        <h5 class="card-title">FOODS</h5>
                        <p class="card-text">Filipino cuisine is a unique blend of indigenous, Spanish, Chinese, and American influences, which is reflected in their restaurant menus.</p>
                        <a href="foods.php" class="btn btn-primary">View Foods</a>
                    </div>
                </div>
            </div>

            
            <div class="col-lg-4 col-md-6 mt-3 text-center">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="img/beach.jpg" class="card-img-top img-fixed">
                    <div class="card-body">
                        <h5 class="card-title">BEACHES</h5>
                        <p class="card-text">Blinding white sands and shell-encrusted dunes, coves filled with coral, and waves worthy of windsurfing; the Philippines has it all.</p>
                        <a href="beach.php" class="btn btn-primary">View Beaches</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-3 text-center">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="img/land.jpg" class="card-img-top img-fixed">
                    <div class="card-body">
                        <h5 class="card-title">LANDSCAPE</h5>
                        <p class="card-text">The Philippines is made up of over 7,000 islands, with diverse landscapes including mountains, volcanoes, and coastal lowlands.</p>
                        <a href="land.php" class="btn btn-primary">View Landscape</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More places</a>
            </div>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500, // Set autoplay delay (in milliseconds)
                disableOnInteraction: false,
            },
            loop: true, // Allow infinite loop scrolling
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
</body>
</html>
