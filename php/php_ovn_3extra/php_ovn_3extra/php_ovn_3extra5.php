<?php
// Task 5
session_start();

// Om sessionen inte har en räknare, sätt den till 0
if (!isset($_SESSION["counter"])) {
    $_SESSION["counter"] = 0;
}

if (isset($_POST["increase"])) {
    $_SESSION["counter"]++;
}

if (isset($_POST["reset"])) {
    $_SESSION["counter"] = 0;
}

// Localhost (http://localhost/school/php/php_ovn_3extra/php_ovn_3extra5.php)
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Räknare</title>
    <link rel="stylesheet" href="Counter.css">
</head>
<body>

    <div class="counter-container">
        <h2>Räknare</h2>
        <p class="count-display">Nuvarande värde: <span><?= $_SESSION["counter"] ?></span></p>

        <form method="post">
            <button type="submit" name="increase" class="btn increase">Öka +1</button>
            <button type="submit" name="reset" class="btn reset">Återställ</button>
        </form>
    </div>

</body>
</html>
