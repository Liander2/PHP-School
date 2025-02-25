<?php
// Localhost (http://localhost/School/php/Ovn2Mysql/index.php)

include "config.php";

// Sorteringslogik
$order_by = isset($_GET['order_by']) ? $_GET['order_by'] : 'id';
$allowed_columns = ['firstname', 'lastname', 'birthday'];
if (!in_array($order_by, $allowed_columns)) {
    $order_by = 'id';
}

$stmt = $pdo->prepare("SELECT * FROM members ORDER BY $order_by ASC");
$stmt->execute();
$members = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Medlemmar</title>
    <link rel="stylesheet" href="crud.css">
</head>
<body>
    <h2>Medlemmar</h2>
    <a href="create.php">Lägg till ny medlem</a>
    <table>
        <tr>
            <th><a href="?order_by=firstname">Förnamn</a></th>
            <th><a href="?order_by=lastname">Efternamn</a></th>
            <th><a href="?order_by=birthday">Födelsedatum</a></th>
            <th>Telefon</th>
            <th>Email</th>
            <th>Åtgärder</th>
        </tr>
        <?php foreach ($members as $member) : ?>
        <tr>
            <td><?= htmlspecialchars($member['firstname']) ?></td>
            <td><?= htmlspecialchars($member['lastname']) ?></td>
            <td><?= htmlspecialchars($member['birthday']) ?></td>
            <td><?= htmlspecialchars($member['phone']) ?></td>
            <td><?= htmlspecialchars($member['email']) ?></td>
            <td>
                <a href="update.php?id=<?= $member['id'] ?>">Redigera</a> | 
                <a href="delete.php?id=<?= $member['id'] ?>" onclick="return confirm('Är du säker?')">Radera</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
