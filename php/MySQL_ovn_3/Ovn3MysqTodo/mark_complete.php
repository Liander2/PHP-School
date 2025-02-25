<?php
include 'ConnectorDB.php';

$id = $_GET['id'];

$stmt = $pdo->prepare('UPDATE todos SET is_completed = 1, completed_at = NOW() WHERE id = ?');
$stmt->execute([$id]);

header('Location: index.php');
exit;
?>
