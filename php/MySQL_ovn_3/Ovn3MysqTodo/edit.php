<?php
include 'ConnectorDB.php';
include 'header.php';

$id = $_GET['id'];
$stmt = $pdo->prepare('SELECT * FROM todos WHERE id = ?');
$stmt->execute([$id]);
$task = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $priority = $_POST['priority'];
    $due_date = $_POST['due_date'] ?: NULL; 

    $stmt = $pdo->prepare('UPDATE todos SET title = ?, description = ?, priority = ?, due_date = ? WHERE id = ?');
    $stmt->execute([$title, $description, $priority, $due_date, $id]);

    header('Location: index.php');
    exit;
}
?>

<div class="container mt-5">
    <h2>Redigera uppgift</h2>
    <form method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Titel</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($task['title']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Beskrivning</label>
            <textarea class="form-control" id="description" name="description"><?php echo htmlspecialchars($task['description']); ?></textarea>
        </div>
        <div class="mb-3">
            <label for="priority" class="form-label">Prioritet</label>
            <select class="form-select" id="priority" name="priority" required>
                <option value="Low" <?php echo $task['priority'] == 'Low' ? 'selected' : ''; ?>>Låg</option>
                <option value="Medium" <?php echo $task['priority'] == 'Medium' ? 'selected' : ''; ?>>Mellan</option>
                <option value="High" <?php echo $task['priority'] == 'High' ? 'selected' : ''; ?>>Hög</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="due_date" class="form-label">Förfallodatum</label>
            <input type="datetime-local" class="form-control" id="due_date" name="due_date" value="<?php echo $task['due_date'] ? date('Y-m-d\TH:i', strtotime($task['due_date'])) : ''; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Uppdatera</button>
    </form>
</div>

<?php include 'footer.php'; ?>
