<?php
/*
$name = 'AyaTammam' ;//$_POST['username'];
$Subject = 'This is my question';//$_POST['subject'];
$Message = 'i wanna ask about prices';//$_POST['message'];
$to = 'cleaningserviceam2023@gmail.com';


$conn = new mysqli('localhost', 'root', '', 'cleaning service');
if ($conn->connect_error) {
    die("Connection Failed : " . $conn->connect_error);
} else {
    // Retrieve the email address from the database
    $stmt = $conn->prepare("SELECT Email FROM customer WHERE Name = ?");
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->fetch();
    $stmt->close();
    $conn->close();

    // Build the email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // Send the email
    mail($to, $Subject, $Message, $headers);

    echo "Email sent successfully!";
}

*/

$name = 'AyaTammam' ;//$_POST['username'];
$Subject = $_POST['subject'];
$Message = $_POST['message'];



$conn = new mysqli('localhost', 'root', '', 'cleaning service');
if ($conn->connect_error) {
    die("Connection Failed : " . $conn->connect_error);
} else {
    // Retrieve the email address from the database
    $stmt = $conn->prepare("SELECT id FROM customer WHERE Name = ?");
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $stmt->bind_result($ID);
    $stmt->fetch();
    $stmt->close();
    $conn->close();
    $conn = new mysqli('localhost', 'root', '', 'cleaning service');
    $stmt = $conn->prepare("insert into  messages( CustomerID , subject , message ) values(?, ?, ?)");
    $stmt->bind_param("iss", $ID  , $Subject , $Message);
    $stmt->execute();
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();




}