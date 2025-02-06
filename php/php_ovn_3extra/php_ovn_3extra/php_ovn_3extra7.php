<?php
// Task 7
session_start();

// Skapa en tom array för beräkningar om den inte finns
if (!isset($_SESSION["calculations"])) {
    $_SESSION["calculations"] = [];
}

// Om formuläret skickas, gör en beräkning
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["operation"])) {
    $num1 = floatval($_POST["num1"]);
    $num2 = floatval($_POST["num2"]);
    $operation = $_POST["operation"];
    $result = null;
    $expression = "$num1 ? $num2";

    switch ($operation) {
        case "add":
            $result = $num1 + $num2;
            $expression = "$num1 + $num2 = $result";
            break;
        case "subtract":
            $result = $num1 - $num2;
            $expression = "$num1 - $num2 = $result";
            break;
        case "multiply":
            $result = $num1 * $num2;
            $expression = "$num1 × $num2 = $result";
            break;
        case "divide":
            if ($num2 != 0) {
                $result = $num1 / $num2;
                $expression = "$num1 ÷ $num2 = $result";
            } else {
                $expression = "Fel: Division med 0 är inte tillåten!";
            }
            break;
        default:
            $expression = "Ogiltig operation!";
    }

    // Spara beräkningen i sessionen
    $_SESSION["calculations"][] = $expression;
}

if (isset($_POST["clear"])) {
    $_SESSION["calculations"] = [];
}

// Localhost (http://localhost/school/php/php_ovn_3extra/php_ovn_3extra7.php)
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkylator</title>
    <link rel="stylesheet" href="CalculatorAlaSession.css">
</head>
<body>

    <div class="calculator-container">
        <h2>Kalkylator</h2>

        <form method="post">
            <input type="number" name="num1" step="any" placeholder="Första talet" required>
            
            <select name="operation" required>
                <option value="add">➕ Addition</option>
                <option value="subtract">➖ Subtraktion</option>
                <option value="multiply">✖ Multiplikation</option>
                <option value="divide">➗ Division</option>
            </select>
            
            <input type="number" name="num2" step="any" placeholder="Andra talet" required>
            
            <button type="submit">Beräkna</button>
        </form>

        <h3>Beräkningshistorik:</h3>
        
        <?php if (!empty($_SESSION["calculations"])): ?>
            <ul class="history">
                <?php foreach (array_reverse($_SESSION["calculations"]) as $calc): ?>
                    <li><?= htmlspecialchars($calc) ?></li>
                <?php endforeach; ?>
            </ul>
            <form method="post">
                <button type="submit" name="clear" class="clear-btn">Rensa historik</button>
            </form>
        <?php else: ?>
            <p>Inga beräkningar gjorda ännu.</p>
        <?php endif; ?>

    </div>

</body>
</html>
