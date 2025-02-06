<?php
// Task 6
session_start();

$uploadDir = "uploads/"; // Mapp där filerna sparas

// Skapa mappen om den inte finns
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Tillåtna filtyper
$allowedTypes = ["image/jpeg", "image/png", "image/gif", "application/pdf", "text/plain"];
$maxFileSize = 5 * 1024 * 1024; // 5 MB

// Kolla om formuläret skickades
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["files"])) {
    $uploadedFiles = $_FILES["files"];
    $messages = [];

    for ($i = 0; $i < count($uploadedFiles["name"]); $i++) {
        $fileName = basename($uploadedFiles["name"][$i]);
        $fileTmpPath = $uploadedFiles["tmp_name"][$i];
        $fileSize = $uploadedFiles["size"][$i];
        $fileType = $uploadedFiles["type"][$i];
        $targetPath = $uploadDir . $fileName;

        // Kontrollera filtyp och storlek
        if (!in_array($fileType, $allowedTypes)) {
            $messages[] = "❌ Filtypen för '$fileName' är inte tillåten.";
            continue;
        }
        if ($fileSize > $maxFileSize) {
            $messages[] = "❌ Filen '$fileName' är för stor (max 5 MB).";
            continue;
        }

        // Flytta filen till uppladdningsmappen
        if (move_uploaded_file($fileTmpPath, $targetPath)) {
            $messages[] = "✅ '$fileName' har laddats upp.";
        } else {
            $messages[] = "❌ Något gick fel vid uppladdning av '$fileName'.";
        }
    }

    $_SESSION["messages"] = $messages;
    header("Location: php_ovn_3extra6.php"); // Ladda om sidan för att visa meddelanden
    exit();
}

// Hämta meddelanden från session och rensa dem
$messages = $_SESSION["messages"] ?? [];
unset($_SESSION["messages"]);

// Localhost (http://localhost/school/php/php_ovn_3extra/php_ovn_3extra6.php)
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filuppladdning</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        form { margin-bottom: 20px; }
        input, button { padding: 10px; font-size: 16px; }
        .messages { margin-top: 20px; text-align: left; display: inline-block; }
        .uploaded-files { margin-top: 20px; text-align: left; display: inline-block; }
    </style>
</head>
<body>

    <h2>📂 Ladda upp filer</h2>

    <form method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple required>
        <button type="submit">Ladda upp</button>
    </form>

    <?php if (!empty($messages)): ?>
        <div class="messages">
            <?php foreach ($messages as $msg): ?>
                <p><?= htmlspecialchars($msg) ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <h3>📄 Uppladdade filer:</h3>
    <div class="uploaded-files">
        <?php
        $files = array_diff(scandir($uploadDir), [".", ".."]);
        if (!empty($files)) {
            echo "<ul>";
            foreach ($files as $file) {
                echo "<li><a href='$uploadDir$file' target='_blank'>$file</a></li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Inga filer uppladdade än.</p>";
        }
        ?>
    </div>

</body>
</html>
