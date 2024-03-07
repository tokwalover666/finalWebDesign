<?php
    //Database connection
    $conn = new mysqli('localhost', 'root', '', 'interlink-database');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else {
        $stmt = $conn->prepare(" INSERT INTO registration(email, password) values(?,?)");
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        echo "registered succesfully!! ";
        $stmt->close();
        $conn->close();
    }

    $email = $_POST['email'];
    $passw = $_POST['passw'];
?>