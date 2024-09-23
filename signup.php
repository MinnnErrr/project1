<?php

require 'dbconfig.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    try{
        //prepare SQL statement
        $sql = "INSERT INTO user (username, email, password) VALUES (:username, :email, :password)";
        $stmt = $conn->prepare($sql);
        //bind parameters
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);

        //execute statement
        $stmt->execute();

        echo "<script>
                alert('Registration successful! Redirecting to login page...');
                window.location.href = 'login.html';
              </script>";

        exit();
    }catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
}

$conn = null;
?>

