<?php
include "db.php";




if (isset($_POST['register'])) {

    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Hash password (IMPORTANT)
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (name, email, password, phone)
            VALUES ('$name', '$email', '$password', '$phone')";

    if (mysqli_query($conn, $sql)) {
        echo "User registered successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
