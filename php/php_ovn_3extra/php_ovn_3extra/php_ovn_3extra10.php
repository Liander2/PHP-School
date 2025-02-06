<?php
// Task 10
$selectedCity = null;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["city"])) {
    $selectedCity = $_POST["city"];
}

// Localhost (http://localhost/school/php/php_ovn_3extra/php_ovn_3extra10.php)
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Välj Stad</title>
    <link rel="stylesheet" href="CityResults.css">
</head>
<body>

    <div class="form-container">
        <h2>Välj en stad</h2>

        <form method="post">
            <label for="city">Välj stad:</label>
            <select name="city" id="city" required>
                <option value="">--Välj en stad--</option>
                <option value="Helsingfors">Helsingfors</option>
                <option value="Esbo">Esbo</option>
                <option value="Tammerfors">Tammerfors</option>
                <option value="Oulu">Oulu</option>
                <option value="Turku">Turku</option>
                <option value="Vanda">Vanda</option>
                <option value="Jyväskylä">Jyväskylä</option>
                <option value="Lahti">Lahti</option>
                <option value="Kuopio">Kuopio</option>
                <option value="Pori">Pori</option>
            </select>
            <button type="submit">Skicka</button>
        </form>

        <?php if ($selectedCity): ?>
            <p class="result">Du har valt: <strong><?= htmlspecialchars($selectedCity) ?></strong></p>
        <?php endif; ?>
    </div>

</body>
</html>
