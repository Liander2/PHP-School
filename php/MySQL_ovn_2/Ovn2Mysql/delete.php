<?php
include "config.php";

if (isset($_GET["id"])) {
    $stmt = $pdo->prepare("DELETE FROM members WHERE id = ?");
    $stmt->execute([$_GET["id"]]);
}

header("Location: index.php");
exit;
?>
