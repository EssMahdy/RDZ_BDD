<?php
    // Establish MySQL connection
    $conn = mysqli_connect('localhost', 'root', 'yessi2604', 'psychologue');

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve user input
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Query to check user credentials
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        // Check if the query returns a row
        if (mysqli_num_rows($result) > 0) {
            echo "Login successful!";
            // Redirect to a secure page or perform further actions
        } else {
            echo "Invalid username or password";
        }
    }
?>