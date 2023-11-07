<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Replace this with your user authentication logic, e.g., database lookup.
    $validUsername = "user";
    $validPassword = "password";

    if ($username === $validUsername && $password === $validPassword) {
        // Authentication successful
        echo "Login successful. Welcome, $username!";
    } else {
        // Authentication failed
        echo "Login failed. Invalid username or password.";
    }
}
?>
