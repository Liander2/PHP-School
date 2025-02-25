<?php
var_dump($_SERVER);  // För att kolla om REQUEST_METHOD finns där
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $birthday = $_POST["birthday"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    $stmt = $pdo->prepare("INSERT INTO members (firstname, lastname, birthday, phone, email) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$firstname, $lastname, $birthday, $phone, $email]);

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Lägg till medlem</title>
</head>
<body>
    <h2>Lägg till medlem</h2>
    <form method="post">
        <input type="text" name="firstname" placeholder="Förnamn" required>
        <input type="text" name="lastname" placeholder="Efternamn" required>
        <input type="date" name="birthday" required>
        <input type="text" name="phone" placeholder="Telefon">
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit">Lägg till</button>
    </form>
</body>
</html>
