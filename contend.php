<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Arsenal&family=Play&family=Rajdhani:wght@400;500&family=Varela+Round&display=swap" rel="stylesheet">
        
        <button id="mode-toggle" class="mode-toggle">Dark Mode</button>
        <!--for GIF-->
        <style>
            .tenor-gif-embed {
                width: 25px;
                height: auto; 
                max-width: 25%; 
                display: block;
                margin: 20px auto; 
                border-radius: 50px;
            }
            
            .container {
                padding-bottom: 20px; 
            }

            *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    
}

body{
    background: black;
    text-align: center;
    color: white;
    transition: background-color 0.3s, color 0.3s;
}

h1{
    font-family: 'Play', sans-serif;
    font-size: 50px;
    color: white;
    padding-bottom: 20px;
}

p{
    color: white;
    font-family: 'Play', sans-serif;
}

p.input,textarea,label{
    font-family: 'Rajdhani', sans-serif;
}

.container{
    max-width: 1320px;
    margin: 0 auto;
    padding: 5%;
}


form{
    max-width: 500px;
    margin: 0 auto;
    text-align: left;
    padding: 20px 0;
}

input, textarea, label{
    display: block;
    margin:0 auto;
    width: 100%;
    color: white;
}

input, textarea{
    background-color: transparent;
    border: 0;
    border-bottom: 2px solid #fff;
    color: white;
    font-size: 18px;
    padding: 10px;
}
input[type=submit]{
    background-color: azure;
    padding: 15px 0;
    color: black;
    font-size: 18px;
    border-bottom: none;
    margin-top: 30px;
    cursor: pointer;
    transition: all .3s ease-in-out;
}

input[type=submit]:hover{
    background: white;
    color: black;
}

input, textarea{
    color: white;
    font-size: 18px;
    padding: 10px;
}

input:focus, textarea:focus{
outline: 1px solid white;
}

body.light-mode{
    background: white;
    color: black;
}

body.light-mode h1,
body.light-mode p,
body.light-mode input,
body.light-mode textarea,
body.light-mode label {
    color: black;
}

body.light-mode input[type=submit] {
    background-color: black;
    color: white;
}

body.light-mode input[type=submit]:hover {
    background: black;
    color: white;
}

/* Toggle button styles */
.mode-toggle {
    position: fixed;
    top: 20px;
    right: 20px;
    padding: 10px 20px;
    background-color: #333;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
    z-index: 1000;
}

.mode-toggle:hover {
    opacity: 0.8;
}

body.light-mode .mode-toggle {
    background-color: white;
    color: black;
}



        </style>
    </head>
    <body>
        <div class="container">
            <h1> Thank you for contacting us! </h1>
            <p> We are please to assist you. </p>
            <p class="back"> Go back to the <a href="gprofile.php" style=color:grey font-weight: bold; >profile</a></p>
            <div class="tenor-gif-embed" data-postid="15561163" data-share-method="host" data-aspect-ratio="1.23552" data-width="100%">
                <a href="https://tenor.com/view/thanks-cute-thank-you-gif-15561163">Thanks Cute Sticker</a>from <a href="https://tenor.com/search/thanks-stickers">Thanks Stickers</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
        </div>
        <!--For lights-->
        <script>
            const toggleButton = document.getElementById('mode-toggle');
            const body = document.body;

            toggleButton.addEventListener('click', () => {
                body.classList.toggle('light-mode');

                // Change button text based on mode
                if (body.classList.contains('light-mode')) {
                    toggleButton.textContent = 'Dark Mode';
                } else {
                    toggleButton.textContent = 'Light Mode';
                }
            });
        </script>
    </body>
</html>