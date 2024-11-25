<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial scale=1">
        <title> Group Profile </title>
<!--bootstrap link-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
       <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<!--font link-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Arsenal&family=Play&family=Rajdhani:wght@400;500&family=Varela+Round&display=swap" rel="stylesheet">

        <style>
            * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Play', sans-serif;
    text-decoration: none;
}


.center {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    justify-content: center;
    margin-bottom: 2rem;
}


.team {
    position: relative;
    margin-right: 10%;
    width: 100%;
    height: 150vh;
    background: white;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.team-profile-title {
    position: relative;
    font-family: 'Rajdhani', sans-serif;
    font-size: 5rem;
    color: #708090;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    overflow: hidden;
    border-right: 0.15em solid #fff;
    white-space: nowrap;
    margin: 0 auto;
    animation: typing 3s steps(22), blink 0.8s step-end, underline-glow 3s ease-in-out;
}

@keyframes typing {
    0% {
        width: 0;
    }
    100% {
        width: 100%;
    }
}

@keyframes blink {
    50% {

        border-color: transparent;
    }
}

@keyframes underline-glow {
    0% {
        text-shadow: 0 0 5px #000, 0 0 10px #000, 0 0 15px #000;
    }
    100% {
        text-shadow: 0 0 20px rgb(2, 20, 20), 0 0 30px rgb(7, 39, 39);
    }
}


.team-content {
    width: 100%;
    max-width: 1350px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, auto));
    align-items: center;
    gap: 2rem;
    text-align: center;
    margin-top: 4rem;
}

.team-content img {
    width: 100%;
    height: 70vh;
    border-radius: 15px;
    margin-bottom: 15px;
    transition: transform 0.4s ease-in-out;
}

.quote {
    color: white;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    position: absolute;
    background: rgba(0, 0, 0, 0.75);
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    opacity: 0;
    transition: opacity 0.4s ease-in-out;
    border-radius: 15px;
    text-align: center;
}

.box {
    padding: 16px;
    background: black;
    border-radius: 15px;
    transition: transform 0.4s ease-in-out;
    position: relative;
    box-shadow: 0 4px 8px rgba(0, 0, 10, 10);
}

.box h3, .box h5 {
    color: white;
}

.icons i {
    display: inline-block;
    color: white;
    font-size: 20px;
    transition: transform 0.2s ease;
}

.icons i:hover {
    transform: scale(1.5);
}

/* hover effects */
.box:hover {
    transform: translateY(-10px);
    cursor: pointer;
}

.box:hover .quote {
    opacity: 1;
}

.box:hover img {
    transform: scale(1.05);
}

/* transition */
.quote > * {
    transform: translateY(0);
    transition: transform 0.5s ease-in-out;
}
/*phone layout*/
@media (max-width: 768px) {
    .team-profile-title {
        font-size: 2.5rem; 
    }

    .team-content {
        grid-template-columns: 1fr; 
    }

    .team-content img {
        height: auto; 
    }
}

@media (max-width: 480px) {
    .team-profile-title {
        font-size: 1.5rem; 
    }

    .box {
        padding: 12px; 
    }
}
/*Footer*/

footer {
    background-color: black;
    color: white;
    text-align: center;
    padding: 15px 0;
    position: center; /* Keeps footer at the bottom */
    bottom: 0; /* Aligns footer at the bottom */
    width: 100%;
}

footer a {
    color: #ffffff;
    text-decoration: none;
    margin-top: 10px;
}

footer a:hover {
    text-decoration: underline;
}

/*toggle for darkmode and lighmode*/
:root {
    --background-color: white;
    --text-color: black;
    --box-background: black;
    --box-text-color: white;
    --footer-background: black;
    --footer-text-color: white;
}

/* Dark mode styles */
body.dark-mode {
    --background-color: #121212;
    --text-color: white;
    --box-background: black;
    --box-text-color: white;
    --footer-background: black;
    --footer-text-color: white;
}

body {
    background-color: var(--background-color);
    color: var(--text-color);
    font-family: 'Play', sans-serif;
    transition: background-color 0.3s, color 0.3s;
}

.team {
    background-color: var(--background-color);
    color: var(--text-color);
}

/* Updated box styles */
.box {
    background: black;
    color: white;
    padding: 16px;
    border-radius: 15px;
    transition: transform 0.4s ease-in-out;
    position: relative;
    box-shadow: 0 4px 8px rgba(0, 0, 10, 10);
}

/* Footer */
footer {
    background-color: var(--footer-background);
    color: var(--footer-text-color);
    text-align: center;
    padding: 15px 0;
    width: 100%;
}

/*button styles */
.mode-toggle {
    position: fixed;
    top: 20px;
    right: 20px;
    padding: 10px 20px;
    background-color: gray;
    color: black;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}


/* Go Back button styling */
.go-back-btn {
    position: fixed;
    top: 20px;
    left: 20px;
    padding: 10px 20px;
    background-color: gray;
    color: black;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    z-index: 100; /* Added this line to bring the button forward */
}
.go-back-btn:hover {
    background-color: darkgray;
}

.mode-toggle:hover {
    opacity: 0.8;
}


        </style>
    </head>
    <body>
            <!-- Go Back button -->
           <!-- <button class="go-back-btn" onclick="window.location.href='webpage.php';"><i class="bi bi-box-arrow-left"></i>Go Back</button> -->
           <button class="go-back-btn" onclick="window.location.href='webpage.php';">
    <i class="bi bi-box-arrow-left"></i> Go Back
</button>


        <!--Button for modes-->
        <section class="team">
            <div class="center">
            <h1 class="team-profile-title" data text="ONE TEAM PROFILE"> ONE TEAM PROFILE </h1>
            <p align-items="center">Greetings! We are Group 1, currently pursuing a Bachelor of Science in Information Technology at Pamantasang Lungsod ng Muntinlupa. </p>
            <p align-items="center">We are focused on developing our skills and knowledge in IT and are eager to apply what we've learned to new and exciting projects.</p>
            </div>

            <div class="team-content">
                 <!--Jennylyn Pluma-->
             <div class="box">
                    <img src="img/jen.jpeg.jpg">
                    <div class="quote">
                        <p> Creating user-friendly and aesthetically pleasing web experiences. </p> 
                          <br>
                           <p> <i style="font-family: Bona Nova SC, serif; font-weight: 400;">"Timely planning leads to timely success."</i></p>
                           <br>
                           <p>------------</p>
                           <div class="icons">
                              <a href="https://www.facebook.com/jennylyn.plumaobina?mibextid=ZbWKwL"><i class="ri-facebook-circle-fill"></i></a>
                              <a href="https://www.instagram.com/j_nylyn?igsh=NHMzcHBwOWZweTFs"><i class="ri-instagram-fill"></i></a>
                              <a href="https://www.linkedin.com/in/jennylyn-pluma-a27485322"><i class="ri-linkedin-box-fill"></i></a>
                         </div>
                           <p>------------</p>
                           </div>
                          <h3> Jennylyn Pluma</h3>
                         <h5> UX Designer </h5>
                          <div class="icons">
                             <a href="https://www.facebook.com/jennylyn.plumaobina?mibextid=ZbWKwL"><i class="ri-facebook-circle-fill"></i></a>
                             <a href="https://www.instagram.com/j_nylyn?igsh=NHMzcHBwOWZweTFs"><i class="ri-instagram-fill"></i></a>
                             <a href="https://www.linkedin.com/in/jennylyn-pluma-a27485322"><i class="ri-linkedin-box-fill"></i></a>
                          </div>
                    
                </div>
    <!--Zhakira-->
                <div class="box">
                    <img src="img/zha.jpeg.jpg">
                    <div class="quote">
                        <p> Building attractive, user-friendly, and responsive front-end elements. </p> 
                        <br>
                        <p> <i style="font-family: Bona Nova SC, serif; font-weight: 400;">"It's better to be late, than to be absent."</i></p>
                        <br>
                        <p>------------</p>
                        <div class="icons">
                            <a href="https://www.facebook.com/zhakira.delrosario"><i class="ri-facebook-circle-fill"></i></a>
                            <a href="https://www.instagram.com/zho.ok/"><i class="ri-instagram-fill"></i></a>
                            <a href="http://www.linkedin.com/in/zhakira-del-rosario-12a134313"><i class="ri-linkedin-box-fill"></i></a>
                        </div>
                        <p>------------</p>
                        </div>
                    <h3> Zhakira Del Rosario</h3>
                    <h5> Front-end Developer </h5>
                    <div class="icons">
                        <a href="https://www.facebook.com/zhakira.delrosario"><i class="ri-facebook-circle-fill"></i></a>
                        <a href="https://www.instagram.com/zho.ok/"><i class="ri-instagram-fill"></i></a>
                        <a href="http://www.linkedin.com/in/zhakira-del-rosario-12a134313"><i class="ri-linkedin-box-fill"></i></a>
                    </div>
                </div>
<!--Sherry-->
                <div class="box">
                    <img src="img/sherry.jpeg.jpg">
                    <div class="quote">
                        <p> Ensuring that the project keep it moving along on the schedule. </p> 
                        <br>
                        <p> <i style="font-family: Bona Nova SC, serif; font-weight: 400;">"The goal you set must be challenging."</i></p>
                        <br>
                        <p>------------</p>
                        <div class="icons">
                            <a href="https://www.facebook.com/sherryblossom.mongado"><i class="ri-facebook-circle-fill"></i></a>
                            <a href="https://www.instagram.com/sheribresu2004/?hl=en"><i class="ri-instagram-fill"></i></a>
                            <a href="https://www.linkedin.com/in/sherry-mongado-2a9485322/"><i class="ri-linkedin-box-fill"></i></a>
                        </div>
                        <p>------------</p>
                    </div>
                    <h3> Sherry Bless Mongado</h3>
                    <h5> Project Manager </h5>
                    <div class="icons">
                        <a href="https://www.facebook.com/sherryblossom.mongado"><i class="ri-facebook-circle-fill"></i></a>
                        <a href="https://www.instagram.com/sheribresu2004/?hl=en"><i class="ri-instagram-fill"></i></a>
                        <a href="https://www.linkedin.com/in/sherry-mongado-2a9485322/"><i class="ri-linkedin-box-fill"></i></a>
                    </div>
                </div>
<!--Juvy-->
                <div class="box">
                    <img src="img/juvy.jpeg.jpg">
                    <div class="quote">
                        <p> Establish a website that performs correctly. </p> 
                        <br>
                        <p> <i style="font-family: Bona Nova SC, serif; font-weight: 400;">"Believe you can and you will."</i></p>
                        <br>
                        <p>------------</p>
                        <div class="icons">
                            <a href="https://www.facebook.com/juvymaemalayao"><i class="ri-facebook-circle-fill"></i></a>
                            <a href="https://www.instagram.com/juvymayo?igsh=MWZmMWw2eDNuNHQ3OQ=="><i class="ri-instagram-fill"></i></a>
                            <a href="https://www.linkedin.com/in/juvy-mae-malayao-a1b690322/"><i class="ri-linkedin-box-fill"></i></a>
                        </div>
                        <p>------------</p>
                    </div>
                    <h3> Juvymae Malayao</h3>
                    <h5> Back-end Developer </h5>
                    <div class="icons">
                        <a href="https://www.facebook.com/juvymaemalayao"><i class="ri-facebook-circle-fill"></i></a>
                        <a href="https://www.instagram.com/juvymayo?igsh=MWZmMWw2eDNuNHQ3OQ=="><i class="ri-instagram-fill"></i></a>
                        <a href="https://www.linkedin.com/in/juvy-mae-malayao-a1b690322/"><i class="ri-linkedin-box-fill"></i></a>
                    </div>
                </div>
<!--Trishia-->
                <div class="box">
                    <img src="img/trish.jpeg.jpg">
                    <div class="quote">
                        <p> Guarantee that our website works properly. </p> 
                        <br>
                        <p> <i style="font-family: Bona Nova SC, serif; font-weight: 400;">"Embrace the journey, and let growth be your constant companion."</i></p>
                        <br>
                        <p>------------</p>
                        <div class="icons">
                            <a href="https://www.facebook.com/profile.php?id=100082960123595&mibextid=ZbWKwL"><i class="ri-facebook-circle-fill"></i></a>
                            <a href="https://www.instagram.com/not.me_spongebob?igsh=MWlpMWo1czdwdnI1bw=="><i class="ri-instagram-fill"></i></a>
                            <a href="https://www.linkedin.com/in/trishia-mhae-bacolor-0b8ab1322/"><i class="ri-linkedin-box-fill"></i></a>
                            
                        </div>
                        <p>------------</p>
                    </div>
                    <h3> Trishia Mhae Bacolor</h3>
                    <h5> Quality  Tester </h5>
                    <div class="icons">
                        <a href="https://www.facebook.com/profile.php?id=100082960123595&mibextid=ZbWKwL"><i class="ri-facebook-circle-fill"></i></a>
                        <a href="https://www.instagram.com/not.me_spongebob?igsh=MWlpMWo1czdwdnI1bw=="><i class="ri-instagram-fill"></i></a>
                        <a href="https://www.linkedin.com/in/trishia-mhae-bacolor-0b8ab1322/"><i class="ri-linkedin-box-fill"></i></a>
                        
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <p>&copy; 2024 GROUP1 BSIT3D <br>All Rights Reserved.</p>
            <a href="contform.php">Contact Us</a>
            <button id="mode-toggle" class="mode-toggle">Toggle Dark Mode</button>
        </footer>

     <script>
            const toggleButton = document.getElementById('mode-toggle');

// Function to between light and dark modes
toggleButton.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');

    // Save the user's theme preference to localStorage
    if (document.body.classList.contains('dark-mode')) {
        localStorage.setItem('theme', 'dark');
        toggleButton.textContent = 'Light Mode';
    } else {
        localStorage.setItem('theme', 'light');
        toggleButton.textContent = 'Dark Mode';
    }
});

// Load the user's preference on page load
const currentTheme = localStorage.getItem('theme');
if (currentTheme === 'dark') {
    document.body.classList.add('dark-mode');
    toggleButton.textContent = 'Light Mode';
} else {
    toggleButton.textContent = 'Dark Mode';
}



        </script>
    </body>
</html> 