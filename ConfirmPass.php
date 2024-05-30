<?php

$email = $_POST['email'];
$password = $_POST['password'];




$conn = new mysqli('localhost', 'root', '', 'cleaning service');
if ($conn->connect_error) {
    die("Connection Failed : " . $conn->connect_error);
} else {


    $sql = "UPDATE customer SET password = '$password' WHERE Email = '$email'";

    if ($conn->query($sql) === TRUE) {
        header('Location: ../Frame/LogInUser.html');

    } else {
        echo "Error updating password: " . $conn->error;
    }

    $conn->close();



}

