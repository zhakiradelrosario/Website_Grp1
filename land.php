<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Philippine Landscapes</title>
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
            background-color: #f1f4f7;
            color: #333;
            padding-bottom: 40px;
        }

        h2 {
            font-size: 2.8rem;
            font-weight: 700;
            text-align: center;
            margin-top: 50px;
            margin-bottom: 50px;
            color: #2c3e50;
        }

        .swiper-container {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 350px;
            height: 500px;
            border-radius: 10px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }

        .card {
            border: none;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .card-img-top {
            height: 350px;
            object-fit: cover;
            border-radius: 8px;
        }

        .card-body {
            padding: 1.5rem;
            background-color: #fff;
            border-radius: 0 0 8px 8px;
        }

        .card-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: #2c3e50;
        }

        .card-text {
            font-size: 1rem;
            color: #7f8c8d;
            margin-bottom: 20px;
        }

        .btn-outline-dark {
            font-weight: 600;
            border-radius: 30px;
            border-width: 2px;
            text-transform: uppercase;
            padding: 0.5rem 2rem;
            font-size: 1rem;
            transition: background-color 0.3s ease, color 0.3s ease;
            margin-top: 10px;
        }

        .btn-outline-dark:hover {
            background-color: #007bff;
            color: #fff;
            border-color: #007bff;
        }

        /* Nearby Amenities Section */
        .nearby-amenities {
            margin-top: 15px;
            font-size: 0.9rem;
            color: #34495e;
        }

        .nearby-amenities h6 {
            font-size: 1.1rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 8px;
        }

        .amenity-list {
            list-style-type: none;
            padding-left: 0;
        }

        .amenity-list li {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .amenity-list li i {
            color: #007bff;
            margin-right: 10px;
        }

        /* Swiper Navigation Arrows */
        .swiper-button-next, .swiper-button-prev {
            color: #333;
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 50%;
            padding: 10px;
            font-size: 1.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .swiper-button-next:hover, .swiper-button-prev:hover {
            background-color: #007bff;
            color: #fff;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .swiper-slide {
                width: 90%;
                height: auto;
            }

            .btn-outline-dark {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 480px) {
            .nearby-amenities {
                font-size: 0.85rem;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="webpage.php">PhilTravel</a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="front.php">Log page</a></li>
                    <li class="nav-item"><a class="nav-link" href="gprofile.php">About Us</a></li>
                </ul>
                <button class="btn btn-outline-dark" onclick="window.history.back()">Go Back</button>
            </div>
        </div>
    </nav>

    <!-- Title -->
    <h2 class="mt-5 pt-4 mb-4 text-center h-font">PHILIPPINE LANDSCAPES</h2>

    <!-- Swiper -->
    <div class="container">
        <div class="row justify-content-center">
            <swiper-container class="mySwiper" pagination="true" effect="coverflow" grab-cursor="true" centered-slides="true"
                slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="100"
                coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true" navigation="true">

                <!-- Slide 1 -->
                <swiper-slide>
                    <div class="card">
                        <img src="img/chocolate.jpg" class="card-img-top" alt="Bohol">
                        <div class="card-body">
                            <h5 class="card-title">Chocolate Hills of Bohol</h5>
                            <p class="card-text">Known for its unique Chocolate Hills and the cute Tarsiers, Bohol offers beautiful beaches and historical sites.
                                One of the island provinces in the Philippines, the 10 largest in the country. It is roughly in oval shape with major axis trending to 
                            northeast to southwest with the camotes Sea at the north and the Mindanao Sea at its south. The province is predominantly hilly and rolling 
                            with narrow coastal plains.</p>
                            <a href="https://www.google.com/maps/place/Bohol" target="_blank" class="btn btn-outline-dark">View on Map</a>

                            <!-- Nearby Amenities Section -->
                            <div class="nearby-amenities">
                                <h6>Nearby Amenities:</h6>
                                <ul class="amenity-list">
                                <i class="bi bi-house-door-fill"></i> <strong>Hotels:</strong> Bohol Beach Club, Amorita Resort</li><br>
                                    <i class="bi bi-geo-alt-fill"></i> <strong>Restaurants:</strong> The Buzzz Cafe, Saffron Restaurant</li><br>
                                    <i class="bi bi-fuel-pump-fill"></i><strong>Gas Stations:</strong> Shell Gasoline Station, Petron Gasoline Station</li>
                                </ul>
                                <a href="contform.php"  class="btn btn-outline-dark">Contact us for inquiries</a>
                            </div>

                        </div>
                    </div>
                </swiper-slide>

                <swiper-slide>
                    <div class="card">
                        <img src="img/taal.jpg" class="card-img-top" alt="Taal Volcano">
                        <div class="card-body">
                            <h5 class="card-title">Taal Volcano</h5>
                            <p class="card-text">Taal Volcano is one of the most active volcanoes in the Philippines, located on an island in Taal Lake. 
                                It is an active volcano within a massive caldera, with at least 38 recorded eruptions in the last 450 years.
                                its most recent majot eruption in 2020 prompted evacuations in its surrounding communities while spreading ash across neighboring provinces
                                and regions, including Metro Manila.
                            </p>
                            <a href="https://www.google.com/maps/place/Taal+Volcano" target="_blank" class="btn btn-outline-dark">View on Map</a>
                            <div class="nearby-amenities">
                                <h6>Nearby Amenities:</h6>
                                <ul class="amenity-list">
                                <i class="bi bi-house-door-fill"></i> <strong>Hotels:</strong> Taal Vista Hotel, Tagaytay Haven Hotel</li><br>
                                    <i class="bi bi-geo-alt-fill"></i> <strong>Restaurants:</strong> Antonio's Restaurant, Balay Dako</li><br>
                                    <i class="bi bi-fuel-pump-fill"></i><strong>Gas Stations:</strong> Shell Gasoline Station, Petron Gasoline Station</li>
                                    
                                </ul>
                                <a href="contform.php"  class="btn btn-outline-dark">Contact us for inquiries</a>
                            </div>
                        </div>

                        

                    </div>
                </swiper-slide>
                
                <swiper-slide>
                    <div class="card">
                        <img src="img/rice.jpg" class="card-img-top" alt="Rice Terraces">
                        <div class="card-body">
                            <h5 class="card-title">Rice Terraces of Banaue</h5>
                            <p class="card-text">The Banaue Rice Terraces are 2,000-year-old terraces carved into the mountains, considered a marvel of ancient engineering.
                                It is the Philippines' top tourist destinations. Called the 8th Wonder of the Modern World by locals, these terraces are said to have been carved
                                into the mounains and hillsides by the ancestors of the local indigenous Ifugao tribes.
                            </p>
                            <a href="https://www.google.com/maps/place/Banaue+Rice+Terraces" target="_blank" class="btn btn-outline-dark">View on Map</a>
                            <div class="nearby-amenities">
                                <h6>Nearby Amenities:</h6>
                                <ul class="amenity-list">
                                <i class="bi bi-house-door-fill"></i> <strong>Hotels:</strong> Banaue Hotel and Youth Hostel, Ifugao Inn</li><br>
                                    <i class="bi bi-geo-alt-fill"></i> <strong>Restaurants:</strong> Rice Terraces Viewpoint Restaurant, Don Mariano's Restaurant</li><br>
                                    <i class="bi bi-fuel-pump-fill"></i><strong>Gas Stations:</strong> Shell Gasoline Station, Petron Gasoline Station</li>
                                </ul>
                                <a href="contform.php"  class="btn btn-outline-dark">Contact us for inquiries</a>
                            </div>
                        </div>
                        
                    </div>
                </swiper-slide>

                <swiper-slide>
                    <div class="card">
                        <img src="img/mtpulag.jpg" class="card-img-top" alt="Mt. Pulag">
                        <div class="card-body">
                            <h5 class="card-title">Mt. Pulag</h5>
                            <p class="card-text">Mt. Pulag is known for its sea of clouds and cold weather, making it one of the most popular hiking destinations in the Philippines.
                                Borders the province of Benguet, Ifugao, and Nueva Vizcaya. It is the Philippines' third highest mountain
                                and Luzon's highest peak. The mountain hosts more than 500 species. The dwarf bamboo, for instance, is endemic to the mountain.
                            </p>
                            <a href="https://www.google.com/maps/place/Mt.+Pulag" target="_blank" class="btn btn-outline-dark">View on Map</a>
                            <div class="nearby-amenities">
                                <h6>Nearby Amenities:</h6>
                                <ul class="amenity-list">
                                <i class="bi bi-house-door-fill"></i> <strong>Hotels:</strong> Ambangeg Mount Pulag Hotel, Eden's Nest Mountain Resort</li><br>
                                    <i class="bi bi-geo-alt-fill"></i> <strong>Restaurants:</strong> Mount Pulag Restaurant, Kubo ni Apo</li><br>
                                    <i class="bi bi-fuel-pump-fill"></i><strong>Gas Stations:</strong> Shell Gasoline Station, Petron Gasoline Station, Caltex Gasoline Station</li>
                                </ul>
                                <a href="contform.php"  class="btn btn-outline-dark">Contact us for inquiries</a>
                            </div>
                        </div>
                        
                    </div>
                </swiper-slide>

                <swiper-slide>
                    <div class="card">
                        <img src="img/coffins.jpg" class="card-img-top" alt="Hanging Coffins of Sagada">
                        <div class="card-body">
                            <h5 class="card-title">Hanging Coffins of Sagada</h5>
                            <p class="card-text">Hanging coffins are coffins which have been placed on cliffs. 
                                The Kankanaey believe that the higher the corpse is placed, the closer it is to heaven 
                                and the sacred ancestors. Secondly, the Kankanaey wanted to preserve their bodies after death as well as 
                                possible, but also let them rest in peace.
                            </p>
                            <a href="https://www.google.com/maps/place/Hanging+Coffins+of+Sagada/@17.0809865,120.9031594,17z/data=!3m1!4b1!4m6!3m5!1s0x338fd32f4788a175:0xf48e20a013c19d0b!8m2!3d17.0809865!4d120.9057343!16s%2Fg%2F11c1q9b5sp?entry=ttu&g_ep=EgoyMDI0MTExMy4xIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn btn-outline-dark">View on Map</a>
                            <div class="nearby-amenities">
                                <h6>Nearby Amenities:</h6>
                                <i class="bi bi-house-door-fill"></i> <strong>Hotels:</strong> log Cabin Restaurant, Yoghurt House, Masferre's Restaurant</li><br>
                                <i class="bi bi-cup-hot-fill"></i><strong>Coffee:</strong> Sagada Coffee, Coffee Shop of the Hanging Coffins</li><br>
                                <i class="bi bi-geo-alt-fill"></i> <strong>Restaurants:</strong> The Buzzz Cafe, Saffron Restaurant</li><br>
                                    <i class="bi bi-fuel-pump-fill"></i><strong>Gas Stations:</strong> Shell Gasoline Station (Bontoc), Petron Gasoline Station(Sagada), Caltex Gasoline Station(Bontoc)</li>
                                </ul>
                                
                            </div>
                            <a href="contform.php"  class="btn btn-outline-dark">Contact us for inquiries</a>
                        </div>
                       
                    </div>
                </swiper-slide>

                <swiper-slide>
                    <div class="card">
                        <img src="img/mtapo.png" class="card-img-top" alt="Mt. Apo">
                        <div class="card-body">
                            <h5 class="card-title">Mt. Apo</h5>
                            <p class="card-text">Mt. Apo is an active volcano in south central Mindanao, 20 miles west of Davao City.
                                It is the highest point in the Philippines, rising to 9,629 feet. Part of the Cordillera Central,
                                it is covered by a forest of tall, tropical hardwoods. Two subsidiary peaks nearly match its height.
                            </p>
                            <a href="https://www.google.com/maps/place/Mount+Apo" target="_blank" class="btn btn-outline-dark">View on Map</a>
                            <div class="nearby-amenities">
                                <h6>Nearby Amenities:</h6>
                                <ul class="amenity-list">
                                <i class="bi bi-house-door-fill"></i> <strong>Hotels:</strong> Red Planet Hotel, The Apo View Hotel, Kidapawan Nature's Park and Resort</li><br>
                                    <i class="bi bi-geo-alt-fill"></i> <strong>Restaurants:</strong> Ranchero Grill, Tapsilogan at NCCC, Bistro Selera</li><br>
                                    <i class="bi bi-fuel-pump-fill"></i><strong>Gas Stations:</strong> Shell & Caltex Gasoline Station (Davao City), Petron Gasoline Station (Davao City & Kidapawan)</li>
                                </ul>
                                <a href="contform.php"  class="btn btn-outline-dark">Contact us for inquiries</a>
                            </div>
                        </div>
                        
                    </div>
                </swiper-slide>

                <swiper-slide>
                    <div class="card">
                        <img src="img/enchanted.jpg" class="card-img-top" alt="enchanted">
                        <div class="card-body">
                            <h5 class="card-title">Enchanted River</h5>
                            <p class="card-text"> The Hinatuan Enchanted River, also called the Hinatuan Sacred River, is a deep
                                spring river on the island of Mindanao in the Philippines. It flows into the Philippine Sea and 
                                the Pacific Ocean at Barangay Talisay, Hinatuan, Surigao Del Sur. It is found between the boundaries
                                of Barangays of Talisay and Cambatong.
                            </p>
                            <a href="https://www.google.com/maps/place/Enchanted+River/@9.2792497,122.1204153,7z/data=!4m10!1m2!2m1!1senchanted+river+location+map!3m6!1s0x32fd8e74ab893c8b:0x417dd65d6bb7ef35!8m2!3d8.4588288!4d126.3548129!15sChxlbmNoYW50ZWQgcml2ZXIgbG9jYXRpb24gbWFwWh4iHGVuY2hhbnRlZCByaXZlciBsb2NhdGlvbiBtYXCSARJ0b3VyaXN0X2F0dHJhY3Rpb27gAQA!16s%2Fg%2F1pxxqh069?entry=ttu&g_ep=EgoyMDI0MTExMy4xIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn btn-outline-dark">View on Map</a>
                            <div class="nearby-amenities">
                                <h6>Nearby Amenities:</h6>
                                <ul class="amenity-list">
                                <i class="bi bi-house-door-fill"></i> <strong>Hotels:</strong> The great Wall Hotel, Isla de oro Beach Resort, Enchanted River Hotel and Resort</li><br>
                                    <i class="bi bi-geo-alt-fill"></i> <strong>Restaurants:</strong> Fruitas Restaurant, Gerry's Grill, The Ranch Restaurant</li><br>
                                    <i class="bi bi-fuel-pump-fill"></i><strong>Gas Stations:</strong> Shell & Petron Gas Station (Hinatuan), Caltex Gas Station (Tandag City)</li>
                                </ul>
                                <a href="contform.php"  class="btn btn-outline-dark">Contact us for inquiries</a>
                            </div>
                        </div>
                        
                    </div>
                </swiper-slide>

                <swiper-slide>
                    <div class="card">
                        <img src="img/hundred.jpg" class="card-img-top" alt="hundred">
                        <div class="card-body">
                            <h5 class="card-title">Hundred Islands</h5>
                            <p class="card-text"> It is located in the Northern Philippines in the province of Pangasinan. 
                                There are 124 pristine coral reef islands scattered accross an area of 7.12 square miles.
                                The Islands feature a coral reef foundation with the above ground cliffs being compromised of limestone.
                            </p>
                            <a href="https://www.google.com/maps/place/Hundred+Islands/@16.1935015,119.9383168,12z/data=!4m10!1m2!2m1!1shundred+island+pangasinan+description!3m6!1s0x3393dbca44626905:0xb94e52fa71c995bd!8m2!3d16.2116667!4d120.0452778!15sCiVodW5kcmVkIGlzbGFuZCBwYW5nYXNpbmFuIGRlc2NyaXB0aW9uWiciJWh1bmRyZWQgaXNsYW5kIHBhbmdhc2luYW4gZGVzY3JpcHRpb26SAQZpc2xhbmTgAQA!16s%2Fg%2F12lrbf72p?entry=ttu&g_ep=EgoyMDI0MTExMy4xIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn btn-outline-dark">View on Map</a>
                            <div class="nearby-amenities">
                                <h6>Nearby Amenities:</h6>
                                <ul class="amenity-list">
                                <i class="bi bi-house-door-fill"></i> <strong>Hotels:</strong> Island Tropic Hotel, The Garden Resort, Star Plaza Hotel</li><br>
                                    <i class="bi bi-geo-alt-fill"></i> <strong>Restaurants:</strong> Alaminos Longganisa Restaurant, Lugang Cafe, Mang Inasal</li><br>
                                    <i class="bi bi-fuel-pump-fill"></i><strong>Gas Stations:</strong> Shell, Caltex, Phoenix & Petron Gas Station (Alaminos City), Total Gas Station (Pangasinan)</li>
                                </ul>
                                <a href="contform.php"  class="btn btn-outline-dark">Contact us for inquiries</a>
                            </div>
                        </div>
                        
                    </div>
                </swiper-slide>

                <swiper-slide>
                    <div class="card">
                        <img src="img/sand.jpg" class="card-img-top" alt="sand">
                        <div class="card-body">
                            <h5 class="card-title">Paoay Sand Dunes</h5>
                            <p class="card-text"> Located just outside Laoag City, these dunes offer a 4x4 adventure 
                                that combines bumpy ride with the natural beauty of the area. Some recommend the 4x4 ride and say
                                the workers are excellent at taking pictures.
                            </p>
                            <a href="https://www.google.com/maps/place/Paoay+Sand+Dunes+Adventures+(Suba)/@18.1406228,120.5144939,17z/data=!4m6!3m5!1s0x338eb8a529e33417:0x343ecc0bb1a44a7a!8m2!3d18.1406228!4d120.5170688!16s%2Fg%2F119wn1nd1?entry=ttu&g_ep=EgoyMDI0MTExMy4xIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn btn-outline-dark">View on Map</a>
                            <div class="nearby-amenities">
                                <h6>Nearby Amenities:</h6>
                                <ul class="amenity-list">
                                <i class="bi bi-house-door-fill"></i> <strong>Hotels:</strong>Fort Ilocandia Resort Hotel, Northview Hotel, Paoay Lake Resort</li><br>
                                    <i class="bi bi-geo-alt-fill"></i> <strong>Restaurants:</strong> La Preciosa Restaurant, Herencia Cafe, Big Brother's Grill</li><br>
                                    <i class="bi bi-fuel-pump-fill"></i><strong>Gas Stations:</strong> Shell, Petron, Caltex, Phoenix & Total Gas Station (Laoag City)</li>
                                </ul>
                                <a href="contform.php"  class="btn btn-outline-dark">Contact us for inquiries</a>
                            </div>
                        </div>
                       
                    </div>
                </swiper-slide>

            </swiper-container>

            </swiper-container>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.mySwiper', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>
</html>
