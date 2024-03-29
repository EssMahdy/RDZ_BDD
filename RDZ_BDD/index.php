<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php
    // Establish MySQL connection
    $conn = mysqli_connect('localhost', 'root', '', 'mahdi_test');

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
    <form method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    <?php
    // Close MySQL connection
    mysqli_close($conn);
    ?>
</body>
</html>
