<?php
session_start();
require 'db_config.php';
require 'db_operations.php';

if(isset($_SESSION['user_id'])){
    header("Location: dashboard.php");
    exit;
}

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = login($username, $password, $conn);

    if($result){
        $_SESSION['user_id'] = $result;
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Invalid username or password.";
    }
}
?>

