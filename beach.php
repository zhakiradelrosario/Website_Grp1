<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Philippine Beaches</title>
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

        h2 {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-top: 50px;
            margin-bottom: 40px;
            color: #333;
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
        }

        .swiper-slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;  /* Or use 'contain' for non-cropping */
}


        .card {
            border: none;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-img-top {
            height: 350px;
            width: 100%;
            object-fit: cover;
        }

        .card-body {
            padding: 1.5rem;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: 700;
        }

        .card-text {
            font-size: 1rem;
            color: #555;
        }

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
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="webpage.php">PhilTravel</a>
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
                <button class="btn btn-outline-dark" onclick="window.history.back()">Go Back</button>
            </div>
        </div>
    </nav>

    <h2 class="mt-5 pt-4 mb-4 text-center h-font">PHILIPPINE BEACHES</h2>

    <div class="container">
        <div class="row justify-content-center">

            <swiper-container class="mySwiper" pagination="true" effect="coverflow" grab-cursor="true" centered-slides="true"
                slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="100"
                coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true" navigation="true">

                <swiper-slide>
                    <div class="card">
                        <img src="img/boracay.jpg" class="card-img-top" alt="Boracay">
                        <div class="card-body">
                            <h5 class="card-title">Boracay</h5>
                            <p class="card-text">It is a popular vacation spot, and well-known for its white-powder beaches,
                                crystal-blue waters and vibrant, exotic atmosphere. Nature-lovers who enjoy hiking will also appreciate the island's tropical, hilly landscape, which is populated by a 
                                variety of species of wildlife.
                            </p>
                            <a href="https://www.google.com/maps/place/Boracay/@11.9692801,121.8860292,13z/data=!3m1!4b1!4m6!3m5!1s0x33a53c2f324b4ee7:0xa738e81e5e6dda36!8m2!3d11.9673753!4d121.924815!16zL20vMDF5cXdn?entry=ttu&g_ep=EgoyMDI0MTExNy4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn btn-outline-dark">View on Map</a>
                            <div class="nearby-amenities">
                                <h6>Nearby Amenities:</h6>
                                <ul class="amenity-list">
                                <i class="bi bi-house-door-fill"></i> <strong>Hotels:</strong>Disovery Shores Boracay, Crimson Resort and Spa, Chill Out Hostel</li><br>
                                    <i class="bi bi-geo-alt-fill"></i> <strong>Restaurants:</strong> Diniwid Beach Restaurant, The Veranda, SpiceBird</li><br>
                                    <i class="bi bi-fuel-pump-fill"></i><strong>Gas Stations:</strong> Petron & Chevron Gas Station (Caticlan)</li>
                                </ul>
                                <a href="contform.php"  class="btn btn-outline-dark">Contact us for inquiries</a>
                            </div>
                        </div>
                    </div>
                </swiper-slide>

                <swiper-slide>
                    <div class="card">
                        <img src="img/camiguin.jpg" class="card-img-top" alt="Camiguin">
                        <div class="card-body">
                            <h5 class="card-title">Camiguin Island</h5>
                            <p class="card-text">It is widely known as an "island Born of Fire", as locals say the 
                                pear shaped island is formed by several eruptions of volcanoes scattered around the island.
                                Camiguin Island is also known as the smallest island in Mindanao and the second smallest in the Philippines.   
                            </p>
                            <a href="https://www.google.com/maps/place/Camiguin+Island/@9.1683781,124.5551185,11z/data=!3m1!4b1!4m6!3m5!1s0x33006e51e5910223:0x44092d466e4378b0!8m2!3d9.1732164!4d124.7298765!16zL20vMDFtcXQy?entry=ttu&g_ep=EgoyMDI0MTExNy4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn btn-outline-dark">View on Map</a>
                            <div class="nearby-amenities">
                                <h6>Nearby Amenities:</h6>
                                <ul class="amenity-list">
                                <i class="bi bi-house-door-fill"></i> <strong>Hotels:</strong>The Camellot Hotel, Seda Hotel, Camiguin Island Travel Lodge</li><br>
                                    <i class="bi bi-geo-alt-fill"></i> <strong>Restaurants:</strong> Luna Ristorante, The Boulevard Restaurant, Sunken Garden Restaurant</li><br>
                                    <i class="bi bi-fuel-pump-fill"></i><strong>Gas Stations:</strong> Petron & Shell Gas Station (Mambajao), Benoni Fuel Station (Benoni Port)</li>
                                </ul>
                                <a href="contform.php"  class="btn btn-outline-dark">Contact us for inquiries</a>
                            </div>
                        </div>
                    </div>
                </swiper-slide>

                <swiper-slide>
                    <div class="card">
                        <img src="img/malcapuya.jpg" class="card-img-top" alt="Malcapuya">
                        <div class="card-body">
                            <h5 class="card-title">Malcapuya</h5>
                            <p class="card-text"> Malcapuya Island is a pristine, relatively undeveloped island located in Coron, Palawan. 
                                Known for its powdery white sand beaches and crystal-clear turquoise waters, it offers a serene and picturesque escape from the crowds. 
                                The island is perfect for swimming, snorkeling, and relaxing, surrounded by vibrant coral reefs and marine life.
                            </p>
                            <a href="https://www.google.com/maps/place/Malcapuya+Island+Beach+Resort/@11.7888111,120.1113629,17z/data=!3m1!4b1!4m6!3m5!1s0x33b9ff16f649d8ef:0x3214f487f2894ba0!8m2!3d11.7888111!4d120.1139378!16s%2Fg%2F11rg8swd_z?entry=ttu&g_ep=EgoyMDI0MTExOC4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn btn-outline-dark">View on Map</a>
                            <div class="nearby-amenities">
                                <h6>Nearby Amenities:</h6>
                                <ul class="amenity-list">
                                <i class="bi bi-house-door-fill"></i> <strong>Hotels:</strong>Two Seasons Coron Island Resort and Spa, Coron Westown Resort, La Natura Resort</li><br>
                                    <i class="bi bi-geo-alt-fill"></i> <strong>Restaurants:</strong> Lolo Nonoy's Food Station, Cafe Marco, Kawayanan Grill</li><br>
                                    <i class="bi bi-fuel-pump-fill"></i><strong>Gas Stations:</strong> Petron Gas Station (Coron Town)</li>
                                </ul>
                                <a href="contform.php"  class="btn btn-outline-dark">Contact us for inquiries</a>
                            </div>
                        </div>
                    </div>
                </swiper-slide>

                <swiper-slide>
                    <div class="card">
                        <img src="img/patar.jpg" class="card-img-top" alt="Patar">
                        <div class="card-body">
                            <h5 class="card-title">Patar Bolinao</h5>
                            <p class="card-text">Patar Beach in Bolinao, Pangasinan, is a hidden gem known for its white sandy shores, crystal-clear waters, and scenic views.
                                 It’s a tranquil destination, perfect for relaxation, swimming, and enjoying the natural beauty of the area. The beach is surrounded by limestone 
                                 rock formations and is relatively less commercialized, offering a peaceful retreat away from the hustle and bustle.
                            </p>
                            <a href="https://www.google.com/maps/place/Patar+Beach/@16.3245898,119.7480673,13z/data=!4m10!1m2!2m1!1spatar+beach+bolinao!3m6!1s0x3393c82b758303f3:0x67cec1f7b0b3ce89!8m2!3d16.3386112!4d119.7986344!15sChNwYXRhciBiZWFjaCBib2xpbmFvkgEFYmVhY2jgAQA!16s%2Fg%2F11b6_j9rkl?entry=ttu&g_ep=EgoyMDI0MTExOC4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn btn-outline-dark">View on Map</a>
                            <div class="nearby-amenities">
                                <h6>Nearby Amenities:</h6>
                                <ul class="amenity-list">
                                <i class="bi bi-house-door-fill"></i> <strong>Hotels:</strong>Patar Rock Beach Resort, Bolinao Beach Resort, Cape Bolinao Resort</li><br>
                                    <i class="bi bi-geo-alt-fill"></i> <strong>Restaurants:</strong>Bolinao Restaurants, Patar Beach Grill, Sambali Beach House</li><br>
                                    <i class="bi bi-fuel-pump-fill"></i><strong>Gas Stations:</strong> Petron and Shell Gas Station (Bolinao Town)</li>
                                </ul>
                                <a href="contform.php"  class="btn btn-outline-dark">Contact us for inquiries</a>
                            </div>
                        </div>
                    </div>
                </swiper-slide>

                <swiper-slide>
                    <div class="card">
                        <img src="img/dahican.jpg" class="card-img-top" alt="Dahican">
                        <div class="card-body">
                            <h5 class="card-title">Dahican Beach</h5>
                            <p class="card-text">Dahican Beach is located in the town of Mati, Davao Oriental, and is known for its long stretch of powdery white sand, clear turquoise waters, and gentle waves, making it a popular destination for surfing, skimboarding, and beach lovers.
                                 The beach is surrounded by lush greenery and provides a laid-back atmosphere, perfect for relaxation and enjoying nature. It’s also home to a large population of sea turtles, adding to its charm.
                            </p>
                            <a href="https://www.google.com/maps/place/Dahican+Beach/@6.9293803,126.260109,14z/data=!3m1!4b1!4m6!3m5!1s0x32fbb60a3fffffff:0xd31710ab77b12a42!8m2!3d6.9293808!4d126.2807086!16s%2Fg%2F11hc_zksy7?entry=ttu&g_ep=EgoyMDI0MTExOC4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn btn-outline-dark">View on Map</a>
                            <div class="nearby-amenities">
                                <h6>Nearby Amenities:</h6>
                                <ul class="amenity-list">
                                <i class="bi bi-house-door-fill"></i> <strong>Hotels and Resorts:</strong>The Dahican Surf Resort, Casa de Parco, Amihan Beach Cabanas</li><br>
                                    <i class="bi bi-geo-alt-fill"></i> <strong>Restaurants:</strong> The Surf Cafe, Dahican Beach Dining</li><br>
                                    <i class="bi bi-fuel-pump-fill"></i><strong>Gas Stations:</strong> Petron & Shell Gas Station (Mati City)</li>
                                </ul>
                                <a href="contform.php"  class="btn btn-outline-dark">Contact us for inquiries</a>
                            </div>
                        </div>
                    </div>
                </swiper-slide>

                <swiper-slide>
                    <div class="card">
                        <img src="img/nacpan.jpg" class="card-img-top" alt="Nacpan">
                        <div class="card-body">
                            <h5 class="card-title">Nacpan Beach</h5>
                            <p class="card-text">
                            Nacpan Beach is a stunning, relatively secluded beach located about 45 minutes north of El Nido, Palawan.
                             Known for its long stretch of powdery white sand, crystal-clear waters, and peaceful atmosphere, 
                             Nacpan Beach is a popular destination for those seeking a more tranquil alternative to the busier beaches in El Nido.
                              Its pristine environment makes it perfect for swimming, sunbathing, and enjoying the natural beauty of the surrounding area.
                            </p>
                            <a href="https://www.google.com/maps/place/Nacpan+Beach/@11.3197358,119.4117028,15z/data=!3m1!4b1!4m6!3m5!1s0x33b70778b8e77e77:0x1ca10e91bef9c5e0!8m2!3d11.3211895!4d119.427758!16s%2Fg%2F12vt97dc3?entry=ttu&g_ep=EgoyMDI0MTExOC4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn btn-outline-dark">View on Map</a>
                            <div class="nearby-amenities">
                                <h6>Nearby Amenities:</h6>
                                <ul class="amenity-list">
                                <i class="bi bi-house-door-fill"></i> <strong>Hotels and Resorts:</strong>The Alternative Beach Hotel, Mad Monkey Hostel, Nacpan Beach Resort</li><br>
                                    <i class="bi bi-geo-alt-fill"></i> <strong>Restaurants:</strong> The Beach Shack, Nacpan Beach Bar, Local eateries</li><br>
                                    <i class="bi bi-fuel-pump-fill"></i><strong>Gas Stations:</strong> Petron & Shell Gas Station (El Nido City)</li>
                                </ul>
                                <a href="contform.php"  class="btn btn-outline-dark">Contact us for inquiries</a>
                            </div>
                        </div>
                    </div>
                </swiper-slide>

                <swiper-slide>
                    <div class="card">
                        <img src="img/pink.jpg" class="card-img-top" alt="Pink">
                        <div class="card-body">
                            <h5 class="card-title">Sta. Cruz Grande Pink Sand Beach</h5>
                            <p class="card-text">
                            Sta. Cruz Grande Pink Sand Beach is located on Sta. Cruz Island in Zamboanga City, Mindanao. 
                            The beach is renowned for its unique pink sand, which is a rare natural phenomenon caused by crushed red corals mixing with the white sand. 
                            The vibrant pink hue of the sand, combined with clear blue waters, makes it an incredibly picturesque and serene destination. 
                            The beach is perfect for swimming, sunbathing, and photography, and is often less crowded than other tourist destinations.
                            </p>
                            <a href="https://www.google.com/maps/place/STA.+CRUZ+GRANDE+PINK+SAND+BEACH/@6.8725007,122.0559288,17z/data=!3m1!4b1!4m6!3m5!1s0x32506b0033d9aa8b:0x975687af77afc77f!8m2!3d6.8725007!4d122.0585037!16s%2Fg%2F11vk49z6r_?entry=ttu&g_ep=EgoyMDI0MTExOC4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn btn-outline-dark">View on Map</a>
                            <div class="nearby-amenities">
                                <h6>Nearby Amenities:</h6>
                                <ul class="amenity-list">
                                <i class="bi bi-house-door-fill"></i> <strong>Hotels and Resorts:</strong>Lantaka Hotel by the Sea, The Garden Orchid Hotel, Casa Lorenzo</li><br>
                                    <i class="bi bi-geo-alt-fill"></i> <strong>Restaurants:</strong> Alavar Seafood Restaurants, Cafe de Susana, Great Wall Chinese Restaurant</li><br>
                                    <i class="bi bi-fuel-pump-fill"></i><strong>Gas Stations:</strong> Petron, Caltex & Shell Gas Station (Zamboanga City)</li>
                                </ul>
                                <a href="contform.php"  class="btn btn-outline-dark">Contact us for inquiries</a>
                            </div>
                        </div>
                    </div>
                </swiper-slide>

                <swiper-slide>
                    <div class="card">
                        <img src="img/seven.jpg" class="card-img-top" alt="Seven">
                        <div class="card-body">
                            <h5 class="card-title">Seven Commandos Beach</h5>
                            <p class="card-text">
                            Seven Commandos Beach is a secluded beach on the island of El Nido in Palawan, Philippines. 
                            It's known for its white sand, clear waters, and limestone cliffs. 
                            The beach is only accessible by boat, and the boat ride to the beach offers views of other beaches and lagoons.
                            </p>
                            <a href="https://www.google.com/maps/place/Seven+Commandos+Beach/@11.1736751,119.3765282,17z/data=!3m1!4b1!4m6!3m5!1s0x33b6551b3bdc81c5:0xdde9914172e7c5f9!8m2!3d11.1736705!4d119.378839!16s%2Fg%2F12vt5gfcf?entry=ttu&g_ep=EgoyMDI0MTExOC4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn btn-outline-dark">View on Map</a>
                            <div class="nearby-amenities">
                                <h6>Nearby Amenities:</h6>
                                <ul class="amenity-list">
                                <i class="bi bi-house-door-fill"></i> <strong>Hotels and Resorts:</strong>El Nido Resorts Lagen Island, Cauayan Resort,Hostels and Budget Stays</li><br>
                                    <i class="bi bi-geo-alt-fill"></i> <strong>Restaurants:</strong> Artcafe, El Nido Market, Sea Slugs Restaurant and Bar</li><br>
                                    <i class="bi bi-fuel-pump-fill"></i><strong>Gas Stations:</strong> Petron & Shell Gas Station (El Nido Town)</li>
                                </ul>
                                <a href="contform.php"  class="btn btn-outline-dark">Contact us for inquiries</a>
                            </div>
                        </div>
                    </div>
                </swiper-slide>

                <swiper-slide>
                    <div class="card">
                        <img src="img/whitesand.jpg" class="card-img-top" alt="WhiteSand">
                        <div class="card-body">
                            <h5 class="card-title">White Sand Beach</h5>
                            <p class="card-text">
                            Seven Commandos Beach is a secluded beach on the island of El Nido in Palawan, Philippines. 
                            It's known for its white sand, clear waters, and limestone cliffs. 
                            The beach is only accessible by boat, and the boat ride to the beach offers views of other beaches and lagoons.
                            </p>
                            <a href="https://www.google.com/maps/place/Seven+Commandos+Beach/@11.1736751,119.3765282,17z/data=!3m1!4b1!4m6!3m5!1s0x33b6551b3bdc81c5:0xdde9914172e7c5f9!8m2!3d11.1736705!4d119.378839!16s%2Fg%2F12vt5gfcf?entry=ttu&g_ep=EgoyMDI0MTExOC4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn btn-outline-dark">View on Map</a>
                            <div class="nearby-amenities">
                                <h6>Nearby Amenities:</h6>
                                <ul class="amenity-list">
                                <i class="bi bi-house-door-fill"></i> <strong>Hotels and Resorts:</strong>El Nido Resorts Lagen Island, Cauayan Resort,Hostels and Budget Stays</li><br>
                                    <i class="bi bi-geo-alt-fill"></i> <strong>Restaurants:</strong> Artcafe, El Nido Market, Sea Slugs Restaurant and Bar</li><br>
                                    <i class="bi bi-fuel-pump-fill"></i><strong>Gas Stations:</strong> Petron & Shell Gas Station (El Nido Town)</li>
                                </ul>
                                <a href="contform.php"  class="btn btn-outline-dark">Contact us for inquiries</a>
                            </div>
                        </div>
                    </div>
                </swiper-slide>



            </swiper-container>

            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More places</a>
            </div>

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
