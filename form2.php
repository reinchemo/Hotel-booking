<?php
// Database connection variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reinhard";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form has been submitted
if (isset($_POST['submit'])) {
    // Get form data
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $Rooms = $_POST['Rooms'];

    // Sanitize user input
    $fname = mysqli_real_escape_string($conn, $fname);
    $email = mysqli_real_escape_string($conn, $email);
    $Rooms = mysqli_real_escape_string($conn, $Rooms);

    // Update rooms value in database



    $sql = "INSERT INTO omen (id, fname, email, Rooms) VALUES ('0', '$fname', '$email', '$Rooms')";

    if (mysqli_query($conn, $sql)) {
        echo "Rooms value updated successfully";
    } else {
        echo "Error updating rooms value: " . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>







