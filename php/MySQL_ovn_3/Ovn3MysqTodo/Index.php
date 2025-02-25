<?php
// localhost (http://localhost/School/php/Ovn3MysqTodo/index.php)

include 'ConnectorDB.php';
include 'header.php';

$stmt = $pdo->query('SELECT * FROM todos');
$tasks = $stmt->fetchAll();
?>

<div class="container mt-5">
    <h2>Din To-Do lista</h2>
    <a href="create.php" class="btn btn-primary mb-3">Skapa ny uppgift</a>
    <table class="table">
        <thead>
            <tr>
                <th>Uppgift</th>
                <th>Prioritet</th>
                <th>Skapad</th>
                <th>Förfallodatum</th>
                <th>Slutförd</th>
                <th>Slutförd datum</th>
                <th>Åtgärder</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $task): ?>
                <tr>
                    <td><?php echo htmlspecialchars($task['title']); ?></td>
                    <td><?php echo $task['priority']; ?></td>
                    <td><?php echo date('Y-m-d H:i:s', strtotime($task['created_at'])); ?></td>
                    <td>
                        <?php echo $task['due_date'] ? date('Y-m-d H:i:s', strtotime($task['due_date'])) : 'Inget förfallodatum'; ?>
                    </td>
                    <td>
                        <?php echo $task['is_completed'] ? 'Ja' : 'Nej'; ?>
                        <?php if (!$task['is_completed']): ?>
                            <a href="mark_complete.php?id=<?php echo $task['id']; ?>" class="btn btn-success btn-sm">Markera som slutförd</a>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php echo $task['completed_at'] ? date('Y-m-d H:i:s', strtotime($task['completed_at'])) : 'Ej slutförd'; ?>
                    </td>
                    <td>
                        <a href="edit.php?id=<?php echo $task['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete.php?id=<?php echo $task['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'footer.php'; ?>
