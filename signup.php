<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Handle sign-up logic here
    $username = $_POST["username"];

    // Generate a random number for the password
    $randomNumber = rand(1000, 9999);
    $password = $username . $randomNumber;

    // Save the username and password (this is a simplified example)
    // You should securely store passwords in a real application
    echo "<p>Account created for $username with password $password</p>";
}

?>
