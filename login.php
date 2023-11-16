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

$sql = "SELECT * FROM Users WHERE username='".$_POST["username"]."' AND password='".$_POST["password"]."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "You have successfully logged in. <br>";
    echo "Username: " . $row["username"]. "<br>";
    echo "Email: " . $row["email"]. "<br>";
    echo "Gender: " . $row["gender"]. "<br>";
    echo "DOB: " . $row["dob"]. "<br>";
    echo "College: " . $row["college"]. "<br>";
  }
} else {
  echo "Invalid login credentials";
}
$conn->close();
?>
