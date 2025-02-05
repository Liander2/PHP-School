<?php
// Task 5
// Kontrollera om formuläret har skickats via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Hämta användarens namn och skydda mot XSS genom att sanera input
    $name = htmlspecialchars($_POST["name"]);

    // Visa hälsning med användarens namn
    echo "<h3>Hej, $name! Välkommen! </h3>";
} else {
    // Om formuläret inte har skickats, visa formuläret
    echo '
        <form method="POST" action="">
            <label for="name">Skriv in ditt namn:</label>
            <input type="text" id="name" name="name" required>
            <button type="submit">Skicka</button>
        </form>
    ';
}

// Koden fungerar när den behandlas av Apache-servern, men inte via five server extensionen,
// så när jag använder Localhost (http://localhost/School/php/php_ovn_2extra/php_ovn2extra5.php) så fungerar det som den skall
?>
