<?php
// Task 11
$name = $email = $message = "";
$nameError = $emailError = $messageError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    if (empty($name)) {
        $nameError = "Namn är obligatoriskt.";
    }

    if (empty($email)) {
        $emailError = "E-post är obligatoriskt.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = "Ogiltig e-postadress.";
    }

    if (empty($message)) {
        $messageError = "Meddelande är obligatoriskt.";
    }
}

// Localhost (http://localhost/school/php/php_ovn_3extra/php_ovn_3extra11.php)
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontaktformulär</title>
    <link rel="stylesheet" href="ErrorMessages.css">
</head>
<body>

    <div class="form-container">
        <h2>Kontaktformulär</h2>

        <form method="post">
            <label for="name">Namn:</label>
            <input type="text" id="name" name="name" value="<?= htmlspecialchars($name) ?>">
            <?php if ($nameError): ?>
                <div class="error"><?= $nameError ?></div>
            <?php endif; ?>

            <label for="email">E-post:</label>
            <input type="email" id="email" name="email" value="<?= htmlspecialchars($email) ?>">
            <?php if ($emailError): ?>
                <div class="error"><?= $emailError ?></div>
            <?php endif; ?>

            <label for="message">Meddelande:</label>
            <textarea id="message" name="message"><?= htmlspecialchars($message) ?></textarea>
            <?php if ($messageError): ?>
                <div class="error"><?= $messageError ?></div>
            <?php endif; ?>

            <button type="submit">Skicka</button>
        </form>
    </div>

</body>
</html>
