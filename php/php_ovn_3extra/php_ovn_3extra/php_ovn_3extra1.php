<?php
// Task 1
$filename = "guestbook.txt";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $message = htmlspecialchars($_POST["message"]);

    if (!empty($name) && !empty($message)) {
        $date = date("Y-m-d H:i:s");

        $entry = "$date - $name: $message\n";
        
        file_put_contents($filename, $entry, FILE_APPEND);
    }
}

$messages = file_exists($filename) ? file($filename) : [];

// Localhost (http://localhost/school/php/php_ovn_3extra/php_ovn_3extra1.php)
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gästbok</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 600px; margin: 20px auto; }
        form { margin-bottom: 20px; }
        textarea, input { width: 100%; margin-bottom: 10px; padding: 8px; }
        button { background-color: #28a745; color: white; border: none; padding: 10px; cursor: pointer; }
        .message { border-bottom: 1px solid #ddd; padding: 10px 0; }
    </style>
</head>
<body>

    <h2>Gästbok</h2>

    <form method="post">
        <input type="text" name="name" placeholder="Ditt namn" required>
        <textarea name="message" placeholder="Skriv ditt meddelande här" required></textarea>
        <button type="submit">Skicka</button>
    </form>

    <h3>Tidigare meddelanden:</h3>

    <?php if (!empty($messages)): ?>
        <?php foreach (array_reverse($messages) as $msg): ?>
            <div class="message"><?= nl2br(htmlspecialchars($msg)) ?></div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Inga meddelanden ännu.</p>
    <?php endif; ?>

</body>
</html>
