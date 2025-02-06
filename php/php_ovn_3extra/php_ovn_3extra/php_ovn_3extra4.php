<?php
// Task 4
session_start();

if (!isset($_SESSION["list"])) {
    $_SESSION["list"] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["item"])) {
    $item = trim($_POST["item"]);
    if (!empty($item)) {
        $_SESSION["list"][] = htmlspecialchars($item);
    }
}

if (isset($_POST["clear"])) {
    $_SESSION["list"] = [];
}

// Localhost (http://localhost/school/php/php_ovn_3extra/php_ovn_3extra4.php)
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamisk Lista</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        form { margin-bottom: 20px; }
        input, button { padding: 10px; font-size: 16px; }
        ul { list-style-type: none; padding: 0; }
        li { background: #f2f2f2; padding: 10px; margin: 5px; border-radius: 5px; display: inline-block; }
    </style>
</head>
<body>

    <h2>Lägg till en punkt i listan</h2>

    <form method="post">
        <input type="text" name="item" placeholder="Skriv här..." required>
        <button type="submit">Lägg till</button>
    </form>

    <h3>Din lista:</h3>
    
    <?php if (!empty($_SESSION["list"])): ?>
        <ul>
            <?php foreach ($_SESSION["list"] as $entry): ?>
                <li><?= $entry ?></li>
            <?php endforeach; ?>
        </ul>
        <form method="post">
            <button type="submit" name="clear">Rensa lista</button>
        </form>
    <?php else: ?>
        <p>Listan är tom. Lägg till något!</p>
    <?php endif; ?>

</body>
</html>
