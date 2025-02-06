<?php
// Task 8
$passwordLength = null;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["password"])) {
    $password = $_POST["password"];
    $passwordLength = strlen($password); 
}

// Localhost (http://localhost/school/php/php_ovn_3extra/php_ovn_3extra8.php)
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lösenordsräknare</title>
    <link rel="stylesheet" href="FormuCounter.css">
</head>
<body>

    <div class="form-container">
        <h2>Lösenordsräknare</h2>

        <form method="post">
            <label for="password">Ange ett lösenord:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Skicka</button>
        </form>

        <?php if ($passwordLength !== null): ?>
            <p class="result">Lösenordets längd: <strong><?= $passwordLength ?></strong> tecken.</p>
        <?php endif; ?>
    </div>

</body>
</html>
