<?php
// Task 2
// Starta session för att spara färgvalet
session_start();

$colors = [
    "white" => "Vit",
    "lightblue" => "Ljusblå",
    "lightgreen" => "Ljusgrön",
    "lightcoral" => "Ljuskorall",
    "lightyellow" => "Ljusgul"
];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["color"])) {
    $_SESSION["selected_color"] = $_POST["color"];
}

// Hämta den valda färgen eller sätt standardfärg
$selectedColor = $_SESSION["selected_color"] ?? "white";

// Localhost (http://localhost/school/php/php_ovn_3extra/php_ovn_3extra2.php)
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamisk Dropdown-meny</title>
    <style>
        body {
            background-color: <?= htmlspecialchars($selectedColor) ?>;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }
        form {
            margin-top: 20px;
        }
        select, button {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>

    <h2>Välj en bakgrundsfärg</h2>

    <form method="post">
        <select name="color">
            <?php foreach ($colors as $key => $value): ?>
                <option value="<?= $key ?>" <?= ($selectedColor == $key) ? 'selected' : '' ?>>
                    <?= $value ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Ändra färg</button>
    </form>

</body>
</html>
