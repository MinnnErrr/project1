<?php

require 'dbconfig.php';
session_start();
// if($_SERVER["REQUEST_METHOD"] == "POST"){
if (isset($_POST["sign_up"])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    try {
        $stmt = $conn->prepare("SELECT * FROM user WHERE username = :username OR email = :email");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC); // 只要是select都要fetch，其他的都到execute而已        

        if ($stmt->rowCount() < 1) { //如果在database有return不多过1行一样的user info(意思就是不存在database的话才proceed if()里面的东西)
            //prepare SQL statement
            $stmt = $conn->prepare("INSERT INTO user (username, email, password) VALUES (:username, :email, :password)");
            //bind parameters
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashedPassword);

            //execute statement
            $stmt->execute();

            $_SESSION['signupSuccess'] = 'Registration successful!';
            header('location: login.php');
        } else {
            $_SESSION['signupError'] = 'Email or username already exist. Please try with a different one.';
            header('location: signup.php');
        }
    } catch (PDOException $e) {
        error_log("Database Error: " . $e->getMessage());
        $_SESSION['signupError'] = 'An error occurred while processing your request. Please try again later.';
        header('location: signup.php');
    }

    exit();
}

$conn = null;
