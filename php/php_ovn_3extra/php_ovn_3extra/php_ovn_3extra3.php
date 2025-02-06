<?php
// Task 3
session_start();

$valid_username = "admin";
$valid_password = "12345"; 

if (isset($_GET["logout"])) {
    session_destroy(); 
    header("Location: php_ovn_3extra3.php"); // Ladda om sidan
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
    } else {
        $error = "Fel användarnamn eller lösenord!";
    }
}

// Kolla om användaren är inloggad
$loggedIn = $_SESSION["loggedin"] ?? false;

// Localhost (http://localhost/school/php/php_ovn_3extra/php_ovn_3extra3.php)
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggning</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        form, .welcome-box { 
            display: inline-block; 
            text-align: left; 
            padding: 20px; 
            border: 1px solid #ccc; 
            border-radius: 5px; 
            margin-top: 20px;
        }
        input { display: block; width: 100%; padding: 10px; margin: 10px 0; }
        button { background-color: #28a745; color: white; padding: 10px; border: none; cursor: pointer; }
        .error { color: red; }
        .logout-btn { background-color: #dc3545; }
    </style>
</head>
<body>

    <?php if ($loggedIn): ?>
        <div class="welcome-box">
            <h2>Välkommen, <?= htmlspecialchars($_SESSION["username"]) ?>! </h2>
            <p>Du är nu inloggad.</p>
            <a href="?logout=true"><button class="logout-btn">Logga ut</button></a>
        </div>
    <?php else: ?>
        <h2>Logga in</h2>

        <?php if (!empty($error)): ?>
            <p class="error"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>

        <form method="post">
            <label for="username">Användarnamn:</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Lösenord:</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">Logga in</button>
        </form>
    <?php endif; ?>

</body>
</html>
