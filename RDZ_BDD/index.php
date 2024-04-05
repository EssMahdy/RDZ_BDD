<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body style="background-color: #D5BDAF;">
    <div class="container center-div" style="display:flex;">
    <div class="container text-center" style="margin-left: auto;">
        <h2 class="modal-title">Connexion</h2>
        <div class="form">
        <?php include "./loginController.php" ?>
        <form method="post">
            <label for="username">Identifiant:(numéro de sécurité sociale)</label><br>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Mot de passe:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" class="btn btn-primary" value="Se connecter">
        </form>
        </div>
    </div>
    </div>
    <?php
    // Close MySQL connection
    mysqli_close($conn);
    ?>
</body>
</html>
