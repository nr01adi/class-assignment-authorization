<?php
// signup_process.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$matricNo = $_POST['matricNo'];
$addressCu = $_POST['addressCu'];
$addressHo = $_POST['addressHo'];
$email = $_POST['email'];
$phoneNum = $_POST['phoneNum'];

// Insert data into database
$sql = "INSERT INTO student_detail (name, matricNo, addressCu, addressHo, email, phoneNum) VALUES ('$name', '$matricNo', '$addressCu', '$addressHo', '$email', '$phoneNum' )";

if ($conn->query($sql) === TRUE) {
    echo "User registered successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>