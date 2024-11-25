<?php
// Include database connection file
require_once('Vconfig.php');

// Check if 'Date' is passed via GET
if (isset($_GET['Date'])) {
    $date = $_GET['Date'];

    // Prepare delete query
    $query = "DELETE FROM visits WHERE Date = ?";
    
    // Prepare statement to prevent SQL injection
    $stmt = $con->prepare($query);
    $stmt->bind_param("s", $date);
    
    // Execute the query
    if ($stmt->execute()) {
        // Redirect back to the records page after successful deletion
        header("Location: adrecord.php?message=Record+deleted+successfully");
        exit();
    } else {
        // Handle the error
        echo "Error deleting record: " . $con->error;
    }
} else {
    // Redirect back if no 'Date' is provided
    header("Location: adrecord.php");
    exit();
}
?>
