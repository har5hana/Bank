<?php
$servername = "localhost:3307";
$username = "root"; // Change as per your database username
$password = ""; // Change as per your database password
$dbname = "project"; // Ensure this database exists

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $father_name = $_POST['father-name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $state = $_POST['state'];
    $marital_status = $_POST['marital-status'];

    $sql = "INSERT INTO applicationform (name, father_name, dob, gender, email, city, pincode, state, marital_status) 
            VALUES ('$name', '$father_name', '$dob', '$gender', '$email', '$city', '$pincode', '$state', '$marital_status')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Application submitted successfully!'); window.location.href='application2.html';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
