<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "08";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if username already exists
$sql = "SELECT * FROM Users WHERE username='".$_POST["username"]."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "Username already exists";
  die();
}

$sql = "INSERT INTO Users (username, email, gender, dob, college, password)
VALUES ('".$_POST["username"]."','".$_POST["email"]."','".$_POST["gender"]."','".$_POST["dob"]."','".$_POST["college"]."','".$_POST["password"]."')";

if ($conn->query($sql) === TRUE) {
  header('Location: login.html'); // Redirect to the login page
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
