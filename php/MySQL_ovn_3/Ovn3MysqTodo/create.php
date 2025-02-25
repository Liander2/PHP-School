<?php
include 'ConnectorDB.php';
include 'header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $priority = $_POST['priority'];
    $due_date = $_POST['due_date'] ?: NULL;  

    $stmt = $pdo->prepare('INSERT INTO todos (title, description, priority, due_date) VALUES (?, ?, ?, ?)');
    $stmt->execute([$title, $description, $priority, $due_date]);

    header('Location: index.php');
    exit;
}
?>

<div class="container mt-5">
    <h2>Skapa ny uppgift</h2>
    <form method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Titel</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Beskrivning</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="priority" class="form-label">Prioritet</label>
            <select class="form-select" id="priority" name="priority" required>
                <option value="Low">Låg</option>
                <option value="Medium">Mellan</option>
                <option value="High">Hög</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="due_date" class="form-label">Förfallodatum</label>
            <input type="datetime-local" class="form-control" id="due_date" name="due_date">
        </div>
        <button type="submit" class="btn btn-primary">Spara</button>
    </form>
</div>

<?php include 'footer.php'; ?>
