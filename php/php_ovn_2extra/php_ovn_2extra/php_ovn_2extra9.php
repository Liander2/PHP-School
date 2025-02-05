<?php
// Task 9
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = htmlspecialchars($_POST["num1"]);
    $num2 = htmlspecialchars($_POST["num2"]);
    $operation = htmlspecialchars($_POST["operation"]);
    
    // Kontrollera att användaren har angett giltiga nummer
    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operation) {
            case "addition":
                $result = $num1 + $num2;
                break;
            case "subtraction":
                $result = $num1 - $num2;
                break;
            case "multiplication":
                $result = $num1 * $num2;
                break;
            case "division":
                // Kontrollera division med noll
                if ($num2 == 0) {
                    $result = "Kan inte dividera med noll!";
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                $result = "Ogiltig operation!";
        }

        echo "<h3>Resultat: $result</h3>";
    } else {
        echo "<h3>Vänligen ange giltiga nummer.</h3>";
    }
}

// samma som i Task 5 och 8 så fungerar koden när den behandlas via Apache-servern, men inte via five server extension,
// localhost (http://localhost/School/php/php_ovn_2extra/php_ovn_2extra9.php)
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matematikoperationer</title>
</head>
<body>

    <h2>Välj en operation</h2>
    <form method="POST" action="">
        <label for="num1">Nummer 1:</label>
        <input type="number" id="num1" name="num1" required><br><br>
        
        <label for="num2">Nummer 2:</label>
        <input type="number" id="num2" name="num2" required><br><br>
        
        <label for="operation">Välj operation:</label>
        <select id="operation" name="operation" required>
            <option value="addition">Addition (+)</option>
            <option value="subtraction">Subtraktion (-)</option>
            <option value="multiplication">Multiplikation (×)</option>
            <option value="division">Division (÷)</option>
        </select><br><br>
        
        <button type="submit">Beräkna</button>
    </form>

</body>
</html>
