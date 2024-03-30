<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "Rohan@123";
$dbname = "petshop";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Handle form submission
 if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    $pet_name = $_POST['pet_name'];
    $pet_type = $_POST['pet_type'];
    $owner_name = $_POST['owner_name'];
    $phone = $_POST['phone'];
    // Insert data into database

    $sql = "INSERT INTO pet ( pet_name, pet_type, owner_name, phone) VALUES ('$pet_name', '$pet_type', '$owner_name', '$phone')";
    if ($conn->query($sql) === TRUE) 
    {
        echo "New record created successfully";
    } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>


