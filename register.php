<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    $secretcode = $_POST['secretcode'];


    //Database connection

    $conn = new mysqli('localhost', 'root', '','register');
    if($conn->connect_error){
    	die('Connection Failed:'. $conn->connect_error);
    }else {
    	$stmt = $conn-> prepare("insert into registration(email, password, secretcode) values(?,?,?)");
    	$stmt-> bind_param("ssi", $email, $password, $secretcode);
    	$stmt-> execute();
    	echo "Registration Successfull.";
    	$stmt->close();
    	$conn->close();
    }

?>