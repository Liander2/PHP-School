<?php
// Task 9
$selectedGender = null;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["gender"])) {
    $selectedGender = $_POST["gender"]; 
}

// Localhost (http://localhost/school/php/php_ovn_3extra/php_ovn_3extra9.php)
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Välj kön</title>
    <link rel="stylesheet" href="ManFemale.css">
</head>
<body>

    <div class="form-container">
        <h2>Välj ditt kön</h2>

        <form method="post">
            <label class="radio-option">
                <input type="radio" name="gender" value="Man" required>
                Man
            </label>
            
            <label class="radio-option">
                <input type="radio" name="gender" value="Kvinna">
                Kvinna
            </label>
            
            <button type="submit">Skicka</button>
        </form>

        <?php if ($selectedGender): ?>
            <p class="result">Du har valt: <strong class="<?= strtolower($selectedGender) ?>"><?= htmlspecialchars($selectedGender) ?></strong></p>
        <?php endif; ?>
    </div>

</body>
</html>
