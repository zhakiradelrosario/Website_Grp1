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

.navbar-nav .nav-item .btn {
    margin-left: auto;
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

/* Card Layout and Alignment */
.card-deck {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 2rem;
}

.card {
    width: 100%;
    max-width: 350px;
    margin: auto;
}

.card-body {
    background-color: #fff;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%;
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
    flex-grow: 1; /* Ensure text is flexible and grows within the card */
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

/* Image Styling */
.img-fixed {
    height: 220px;
    object-fit: cover;
    border-radius: 8px;
    transition: transform 0.3s ease;
}

.img-fixed:hover {
    transform: scale(1.1);
}

/* Responsive Design */
@media (max-width: 768px) {
    .card-body {
        padding: 1.5rem;
    }

    .btn-primary {
        padding: 0.3rem 1.3rem;
    }

    .btn-outline-dark {
        font-size: 0.9rem;
    }

    /* Stack the cards on smaller screens */
    .card-deck {
        flex-direction: column;
        align-items: center;
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
                <button class="btn btn-outline-dark" onclick="window.history.back()">Go Back</button>
            </div>
        </div>
    </nav>

    <h2 class="mt-5 pt-4 mb-4 text-center hw-bold h-font">FILIPINO FOODS</h2>

    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6 mt-3 text-center">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="img/adobo.jpeg" class="card-img-top img-fixed" alt="Adobo">
                    <div class="card-body">
                        <h5 class="card-title">Adobo</h5>
                        <p class="card-text">
                            Adobo is a classic Filipino dish made with meat, usually chicken or pork, marinated in soy sauce, vinegar, garlic, and spices before being slow-cooked to perfection. It’s one of the most beloved dishes in the Philippines.
                        </p>
                        <strong>Ingredients:</strong>
                        <ul class="text-start">
                            <li>Chicken or Pork</li>
                            <li>Soy Sauce</li>
                            <li>Vinegar</li>
                            <li>Garlic</li>
                            <li>Bay Leaves</li>
                            <li>Black Peppercorns</li>
                        </ul>
                        <i class="bi bi-shop"></i> <strong>Popular Place:</strong> Adobo is popular all over the Philippines, but it's especially loved in Manila and the Visayas region.
                        <a href="https://www.knorr.com/ph/r/chicken-adobo.html/214369?gclsrc=aw.ds&gad_source=1&gclid=Cj0KCQiAi_G5BhDXARIsAN5SX7qBnNPxaXIGOmHzQuNvXXgmdCrXF7yDnU16nnSNkraUtO9WcZTtOEEaAvA0EALw_wcB" class="btn btn-primary mt-3">View Steps</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-3 text-center">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="img/sinigang.jpg" class="card-img-top img-fixed" alt="Sinigang">
                    <div class="card-body">
                        <h5 class="card-title">Sinigang na Baboy</h5>
                        <p class="card-text">
                            Sinigang is a sour soup or stew made with tamarind, tomatoes, and various vegetables, often served with pork, shrimp, or fish. It is a comfort food that is perfect for rainy days.
                        </p>
                        <strong>Ingredients:</strong>
                        <ul class="text-start">
                            <li>Pork, Shrimp, or Fish</li>
                            <li>Tamarind</li>
                            <li>Tomatoes</li>
                            <li>Okra</li>
                            <li>Long Green Beans</li>
                            <li>Radish</li>
                        </ul>
                        <i class="bi bi-shop"></i> <strong>Popular Place:</strong> Sinigang is a popular dish throughout the Philippines but is a special favorite in Cebu and Manila.
                        <a href="https://jocyls.com/2023/04/27/quick-sinigang-na-baboy-recipe-for-beginners/" class="btn btn-primary mt-3">View Steps</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-3 text-center">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="img/leche.jpg" class="card-img-top img-fixed" alt="Leche Flan">
                    <div class="card-body">
                        <h5 class="card-title">Leche Flan</h5>
                        <p class="card-text">
                            Leche Flan is a rich, creamy caramel custard dessert that is made with eggs, milk, sugar, and vanilla. It's often served at festive occasions like birthdays and holidays.
                        </p>
                        <strong>Ingredients:</strong>
                        <ul class="text-start">
                            <li>Eggs</li>
                            <li>Sweetened Condensed Milk</li>
                            <li>Evaporated Milk</li>
                            <li>Sugar</li>
                            <li>Vanilla Extract</li>
                        </ul>
                        <i class="bi bi-shop"></i> <strong>Popular Place:</strong> Leche Flan is a favorite dessert across the Philippines but is especially popular in Quezon City.
                        <a href="https://www.wikihow.com/Make-Leche-Flan" class="btn btn-primary mt-3">View Steps</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-3 text-center">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="img/balut.jpg" class="card-img-top img-fixed" alt="Balut">
                    <div class="card-body">
                        <h5 class="card-title">Balut</h5>
                        <p class="card-text">
                            Balut is a fertilized duck egg that is incubated and then boiled or steamed and eaten from the shell.
                        </p>
                        <strong>Ingredients:</strong>
                        <ul class="text-start">
                            <li>Fertilized duck egg</li>  
                        </ul>
                        <i class="bi bi-shop"></i> <strong>Popular Place:</strong> Popular delicacy in the Philippines and Vietnam, and also
                        consumed in other East and Sutheast Asian countries. <br>
                        <a href="https://www.mamasguiderecipes.com/2017/10/24/make-balut-egg/#google_vignette" class="btn btn-primary mt-3">View Steps</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-3 text-center">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="img/bicol.jpg" class="card-img-top img-fixed" alt="Bicol">
                    <div class="card-body">
                        <h5 class="card-title">Bicol Express</h5>
                        <p class="card-text">
                           A spicy and savory pork dish that's stewed in coconut milk to give it a rich and creamy sauce.
                           The primary ingredient for the dish includes alamang, a salty fermented shrimp paste that lends
                           the dish tons of umami flavor and a slight pinkish-hue. 
                        </p>
                        <strong>Ingredients:</strong>
                        <ul class="text-start">
                            <li>Pork Belly</li>
                            <li>Coconut Milk</li>
                            <li>Shrimp Paste</li>
                            <li>Green Chilies</li>
                            <li>Tomatoes</li>
                            <li>Long Green Beans</li>
                        </ul>
                        <i class="bi bi-shop"></i> <strong>Popular Place:</strong> Most famous in the Bicol Region where it originated. Also famous in Naga, Legazpi, Camarines Sur, Sorsogon City.
                        <a href="https://www.knorr.com/ph/recipes/recipe-tips/crispy-bicol-express-recipe.html" class="btn btn-primary mt-3">View Steps</a>
                    </div>
                </div>
            </div>            

            <div class="col-lg-4 col-md-6 mt-3 text-center">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="img/bulalo.jpg" class="card-img-top img-fixed" alt="Bulalo">
                    <div class="card-body">
                        <h5 class="card-title">Bulalo</h5>
                        <p class="card-text">
                           A beef dish from the Philippines. It is a light colored soup that is made by cooking beef shanks
                           and bone marrow until the collagen and fat has been melted into rhe clear broth.
                        </p>
                        <strong>Ingredients:</strong>
                        <ul class="text-start">
                            <li>Beef Shank</li>
                            <li>Corn</li>
                            <li>Potatoes</li>
                            <li>Cabbage</li>  
                            <li>Green Beans</li>
                        </ul>
                        <i class="bi bi-shop"></i> <strong>Popular Place:</strong> Popular in Tagaytay, it is often enjoyed during cold weather,
                        particularly in the province of Batanngas and Cavite. <br>
                        <a href="https://norecipes.com/bulalo-recipe/" class="btn btn-primary mt-3">View Steps</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-3 text-center">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="img/pakbet.jpg" class="card-img-top img-fixed" alt="pakbet">
                    <div class="card-body">
                        <h5 class="card-title">Pinakbet</h5>
                        <p class="card-text">
                           Pinakbet is a traditional Filipino vegetable dish made from a mix of vegetables, often sauteed with shrimp paste,
                           and cooked for perfection in a savory broth. It's known for its balance of flavors sweet, bitter, and salty making it a beloved comfort food.
                        </p>
                        <strong>Ingredients:</strong>
                        <ul class="text-start">
                            <li>Bittermelon</li>
                            <li>Eggplant</li>
                            <li>Tomatoes</li>
                            <li>Okra</li>
                            <li>Squash</li>
                            <li>String Beans</li>
                            <li>Shrimp Paste</li>
                        </ul>
                        <i class="bi bi-shop"></i> <strong>Popular Place:</strong> Most popular in the Ilocos Region particularly Ilocos Norte and Ilocos Sur
                        and Cagayan Valley, where it originated. It's also widely enjoyed in the Bicol region.  
                        <a href="https://philippinesfoodrecipes.wordpress.com/2014/07/14/how-to-cook-pinakbet/" class="btn btn-primary mt-3">View Steps</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-3 text-center">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="img/cassava.jpg" class="card-img-top img-fixed" alt="cassava">
                    <div class="card-body">
                        <h5 class="card-title">Cassava Cake</h5>
                        <p class="card-text">Cassava Cake is a popular Filipino dessert made from grated cassava, coconut milk, sugar, and eggs
                            creating a moist, dense, and slightly chewy treat. It's often topped with a creamy coconut glazed for added richness.
                           
                        </p>
                        <strong>Ingredients:</strong>
                        <ul class="text-start">
                            <li>Grated Cassava</li>
                            <li>Coconut Milk</li>
                            <li>Sugar</li>
                            <li>Eggs</li>
                            <li>Evaporated Milk</li>
                            <li>Condensed Milk</li>
                           
                        </ul>
                        <i class="bi bi-shop"></i> <strong>Popular Place:</strong> Cassava cake is popular all over the Philippines, but it's especially well-love 
                        in Quezon province, Cavite, and Laguna, where it's often served during celebrations and festivals. 
                        <a href="https://philippinesfoodrecipes.wordpress.com/2014/07/14/how-to-cook-pinakbet/" class="btn btn-primary mt-3">View Steps</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-3 text-center">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="img/karekare.jpg" class="card-img-top img-fixed" alt="karekare">
                    <div class="card-body">
                        <h5 class="card-title">Kare-kare</h5>
                        <p class="card-text">
                          Kare-kare is a rich Filipino stew made with oxtail, tripes and vegetables, all simmered in a thick
                          peanut sauce. it's comforting dish often served wih bagoong on the side for added flavor.
                        </p>
                        <strong>Ingredients:</strong>
                        <ul class="text-start">
                            <li>Oxtail</li>
                            <li>Peanut Butter or Ground Peanuts</li>
                            <li>Banana Blossoms</li>
                            <li>Eggplant</li>
                            <li>Bok Choy or other greens</li>
                            <li>String Beans</li>
                        </ul>
                        <i class="bi bi-shop"></i> <strong>Popular Place:</strong> Kare-kare is most popular ni Metro Manila and the Central Luzon region,
                        particularly in Bulacan and Pampanga, where it's traditional dish often served during celebrations.
                        <a href="https://www.instructables.com/Kare-Kare:-Filipino-ox-tail-stew/" class="btn btn-primary mt-3">View Steps</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-3 text-center">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="img/halo.jpg" class="card-img-top img-fixed" alt="halohalo">
                    <div class="card-body">
                        <h5 class="card-title">Halo-halo</h5>
                        <p class="card-text">
                          Halo-halo is a refreshing Filipino dessert made by mixing shaved ice with a variety
                          of sweetened fruits, jellies, and beans, topped with leche flan, purple yam, and scoop
                          of ice cream. It's colorful, sweet treat perfect for hot weather.
                        </p>
                        <strong>Ingredients:</strong>
                        <ul class="text-start">
                            <li>Shaved Ice</li>
                            <li>Sweetened Fruits</li>
                            <li>Jellies</li>
                            <li>Beans</li>
                            <li>leche Flan</li>
                            <li>Purple Yam</li>
                            <li>Ice Cream</li>
                        </ul>
                        <i class="bi bi-shop"></i> <strong> Popular Place:</strong> Halo-halo is popular throughout the Philippines, especially in Manila, Tagaytay, and Batangas
                            where it's often served in local restaurants and especially dessert shops. It's also a favorite in Quezon Province. 
                        <a href="https://pilipinasrecipes.com/halo-halo-recipe/" class="btn btn-primary mt-3">View Steps</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
