<?php

require_once('Vconfig.php');
require_once('adfunction.php');

$result = display_data();

session_start();

// Check if the admin is logged in by checking the session or cookie
if (isset($_SESSION['adminName']) || isset($_COOKIE['adminName'])) {
    // Display the admin name either from the session or cookie
    $adminName = isset($_SESSION['adminName']) ? $_SESSION['adminName'] : $_COOKIE['adminName'];
} else {
    // Redirect to login page if the session or cookie is not found
    header("Location: front.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records Page</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        * {
            font-family: "Fredoka", sans-serif;
        }
        .h-font {
            font-family: "Roboto Serif", serif;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <!-- Greeting -->
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="webpage.php">
                Welcome, <?php echo htmlspecialchars($adminName, ENT_QUOTES, 'UTF-8'); ?>!
            </a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="webpage.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="admindash.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="adrecord.php">Records</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gprofile.php">My Team</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="adminform.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center">Visitors Records</h1>
    </div>

    <div class="card-body">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Full Name</th>
                    <th>Nationality</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['Date']); ?></td>
                        <td><?php echo htmlspecialchars($row['Full Name']); ?></td>
                        <td><?php echo htmlspecialchars($row['Nationality']); ?></td>
                        <td><?php echo htmlspecialchars($row['Age']); ?></td>
                        <td><?php echo htmlspecialchars($row['Email']); ?></td>
                        <td><a href="edit_record.php?Date=<?php echo urlencode($row['Date']); ?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="admindelete.php?Date=<?php echo urlencode($row['Date']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>
</html>
