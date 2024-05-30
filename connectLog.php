<?php
$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli('localhost', 'root', '', 'cleaning service');
if ($conn->connect_error) {
die("Connection Failed : " . $conn->connect_error);
} else {

$sql = "SELECT * FROM customer WHERE Email='$email' AND password='$password'";
$result = $conn->query($sql);

// Check if there is a match
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
$name = $row['Name'];

header("Location: /Frame/Indexx.html?name=$name");
} else {
// User does not exist in database
echo "Invalid username or password.";
}

// Close database connection
$conn->close();
}
