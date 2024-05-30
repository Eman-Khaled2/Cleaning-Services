
<?php


    $Name = $_POST['Name'];
    $mail = $_POST['mail'];
    $city = $_POST['city'];
    $street = $_POST['street'];
    $password = $_POST['password'];
    $confirmPass = $_POST['confirmPass'];
    $account = $_POST['account'];
    $phone = $_POST['phone'];


    $conn = new mysqli('localhost', 'root', '', 'cleaning service');
    if ($conn->connect_error) {
        die("Connection Failed : " . $conn->connect_error);
    } else {


        $stmt = $conn->prepare("insert into  customer( Email ,phoneNum, Name, city, street, password, account) values(?, ?, ?, ?, ?, ?,?)");
        $stmt->bind_param("sisssss", $mail, $phone, $Name, $city, $street, $password, $account);
        $stmt->execute();
        echo "Registration successfully...";
        $stmt->close();
        $conn->close();


    }


