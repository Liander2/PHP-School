<?php
// Task 8
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $age = htmlspecialchars($_POST["age"]);
    echo "<h3>Hej, $name! Du är $age år gammal.</h3>";
} else {
    echo '
    <h2>Fyll i ditt namn och ålder</h2>
    <form method="POST" action="">
        <label for="name">Namn:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="age">Ålder:</label>
        <input type="text" id="age" name="age" required><br><br>
        
        <button type="submit">Skicka</button>
    </form>';
}

// samma som i Task 5 så fungerar koden när den behandlas via Apache-servern, men inte via five server extension,
// localhost (http://localhost/School/php/php_ovn_2extra/php_ovn_2extra8.php)

?>
