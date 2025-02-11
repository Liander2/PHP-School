<?php
function addition($a, $b) {
    return $a + $b;
}

function subtraktion($a, $b) {
    return $a - $b;
}

function multiplikation($a, $b) {
    return $a * $b;
}

function division($a, $b) {
    if ($b == 0) {
        return "Fel: Kan inte dividera med 0.";
    }
    return $a / $b;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tal1 = $_POST['tal1'];
    $tal2 = $_POST['tal2'];
    $operation = $_POST['operation'];

    if (is_numeric($tal1) && is_numeric($tal2)) {
        switch ($operation) {
            case "addition":
                $resultat = addition($tal1, $tal2);
                break;
            case "subtraktion":
                $resultat = subtraktion($tal1, $tal2);
                break;
            case "multiplikation":
                $resultat = multiplikation($tal1, $tal2);
                break;
            case "division":
                $resultat = division($tal1, $tal2);
                break;
            default:
                $resultat = "Ogiltig operation.";
        }
    } else {
        $resultat = "Fel: Båda inmatningarna måste vara siffror.";
    }
}

// Localhost (http://localhost/school/php/php_ovn_5/5.4.php)
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enkel Kalkylator</title>
</head>
<body>

    <h1>Enkel Kalkylator</h1>

    <form method="post" action="">
        <label for="tal1">Tal 1:</label>
        <input type="text" id="tal1" name="tal1" value="<?php echo isset($tal1) ? $tal1 : ''; ?>" required><br><br>

        <label for="tal2">Tal 2:</label>
        <input type="text" id="tal2" name="tal2" value="<?php echo isset($tal2) ? $tal2 : ''; ?>" required><br><br>

        <label for="operation">Välj operation:</label>
        <select name="operation" id="operation" required>
            <option value="addition" <?php echo (isset($operation) && $operation == "addition") ? "selected" : ""; ?>>Addition</option>
            <option value="subtraktion" <?php echo (isset($operation) && $operation == "subtraktion") ? "selected" : ""; ?>>Subtraktion</option>
            <option value="multiplikation" <?php echo (isset($operation) && $operation == "multiplikation") ? "selected" : ""; ?>>Multiplikation</option>
            <option value="division" <?php echo (isset($operation) && $operation == "division") ? "selected" : ""; ?>>Division</option>
        </select><br><br>

        <button type="submit">Beräkna</button>
    </form>

    <?php
    if (isset($resultat)) {
        echo "<h2>Resultat: $resultat</h2>";
    }
    ?>

</body>
</html>
