<?php
function login($username, $password, $conn){
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $query = "SELECT id FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        return $row['id'];
    } else {
        return false;
    }
}

function register($username, $password, $conn){
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $result = $conn->query($query);

    if($result){
        return $conn->insert_id;
    } else {
        return false;
    }
}
?>

