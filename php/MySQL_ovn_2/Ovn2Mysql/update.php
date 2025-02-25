<?php
include "config.php";

if (isset($_GET['id'])) {
    $stmt = $pdo->prepare("SELECT * FROM members WHERE id = ?");
    $stmt->execute([$_GET['id']]);
    $member = $stmt->fetch(PDO::FETCH_ASSOC);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $birthday = $_POST["birthday"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    $stmt = $pdo->prepare("UPDATE members SET firstname=?, lastname=?, birthday=?, phone=?, email=? WHERE id=?");
    $stmt->execute([$firstname, $lastname, $birthday, $phone, $email, $id]);

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Uppdatera medlem</title>
</head>
<body>
    <h2>Uppdatera medlem</h2>
    <form method="post">
        <input type="hidden" name="id" value="<?= $member['id'] ?>">
        <input type="text" name="firstname" value="<?= $member['firstname'] ?>" required>
        <input type="text" name="lastname" value="<?= $member['lastname'] ?>" required>
        <input type="date" name="birthday" value="<?= $member['birthday'] ?>" required>
        <input type="text" name="phone" value="<?= $member['phone'] ?>">
        <input type="email" name="email" value="<?= $member['email'] ?>" required>
        <button type="submit">Uppdatera</button>
    </form>
</body>
</html>
