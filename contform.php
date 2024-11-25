<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arsenal&family=Play&family=Rajdhani:wght@400;500&family=Varela+Round&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: black;
            text-align: center;
            color: white;
            transition: background-color 0.3s, color 0.3s;
        }

        h1 {
            font-family: 'Play', sans-serif;
            font-size: 50px;
            color: white;
            padding-bottom: 20px;
        }

        p {
            color: white;
            font-family: 'Play', sans-serif;
        }

        p.input, textarea, label {
            font-family: 'Rajdhani', sans-serif;
        }

        .container {
            max-width: 1320px;
            margin: 0 auto;
            padding: 5%;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            text-align: left;
            padding: 20px 0;
        }

        input, textarea, label {
            display: block;
            margin: 0 auto;
            width: 100%;
            color: white;
        }

        input, textarea {
            background-color: transparent;
            border: 0;
            border-bottom: 2px solid #fff;
            color: white;
            font-size: 18px;
            padding: 10px;
        }

        input[type=submit], input[type=button] {
            background-color: azure;
            padding: 15px 0;
            color: black;
            font-size: 18px;
            border-bottom: none;
            margin-top: 30px;
            cursor: pointer;
            transition: all .3s ease-in-out;
            width: 48%;
        }

        input[type=submit]:hover, input[type=button]:hover {
            background: white;
            color: black;
        }

        input:focus, textarea:focus {
            outline: 1px solid white;
        }

        body.light-mode {
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

        body.light-mode input[type=submit], body.light-mode input[type=button] {
            background-color: black;
            color: white;
        }

        body.light-mode input[type=submit]:hover, body.light-mode input[type=button]:hover {
            background: black;
            color: white;
        }

        /* Button group styling */
        .button-group {
            display: flex;
            justify-content: space-between;
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
    <button id="mode-toggle" class="mode-toggle">Toggle Dark Mode</button>
    <div class="container">
        <h1>Contact Us</h1>
        <p>Got something to ask? <br>Let us help you with any problem!</p>
        <!-- HTML Form -->
        <form method="POST" action="post.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
       
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <!-- Submit and Back Button Group -->
            <div class="button-group">
                <input type="submit" value="Send">
                <input type="button" value="Back" onclick="goBack()">
            </div>
        </form>
    </div>

    <script>
        // JavaScript to toggle light and dark mode
        const toggleButton = document.getElementById('mode-toggle');

        toggleButton.addEventListener('click', () => {
            document.body.classList.toggle('light-mode');
            const isLightMode = document.body.classList.contains('light-mode');
            toggleButton.textContent = isLightMode ? 'Toggle Dark Mode' : 'Toggle Light Mode';
        });

        // Function to go back to the previous page
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
