<?php
require 'dbconfig.php';

session_start();

// if($_SERVER["REQUEST_METHOD"] == "POST"){
if(isset($_POST["sign_in"])){
    //collect value from input field
    $emailOrName = $_POST['emailOrName'];
    $password = $_POST['password'];

    try{
        //sql statement is created    
        $stmt = $conn->prepare("SELECT * FROM user WHERE username = :emailOrName OR email = :emailOrName");

        //bind the values to the parameters
        $stmt->bindParam(':emailOrName', $emailOrName);

        //database execute statement
        $stmt->execute();

        //fetch user data from database
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user) {
            if(password_verify($password, $user['password'])){
                // Successful login: Set session variables
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];

                // Redirect to a dashboard or home page
                // echo "<script>
                //         alert('Login successful! Redirecting to your dashboard...');
                //         window.location.href = 'index.php';
                //       </script>";
                
                header('location: index.php'); //login成功没必要alert
            }else{
                $_SESSION['loginError']= 'Incorrect password. Please try again.';
                header('location: login.php');
            }
        }else{
            $_SESSION['loginError'] = 'No user found with this email or username. Please sign up first.';
            header('location: login.php');
        }
    }catch(PDOException $e){
        error_log("Database Error: " . $e->getMessage());

        $_SESSION['loginError'] = 'An error occurred while processing your request. Please try again later.';
        header('location: login.php');        
    }

    exit();
}
$conn = null;
?>