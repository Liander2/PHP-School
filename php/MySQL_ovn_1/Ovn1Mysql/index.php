<?php
include 'db_connect.php';

// Hämta alla anställda från databasen
$sql = "SELECT * FROM employees";
$result = $conn->query($sql);

// Hämta anställda som började mellan 2006 och 2009
$sql_filtered = "SELECT fname, lname FROM employees WHERE start_year BETWEEN 2006 AND 2009";
$result_filtered = $conn->query($sql_filtered);
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>
</head>
<body>
    <h1>Lista över anställda</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>fname</th>
            <th>lname</th>
            <th>title</th>
            <th>start_year</th>
            <th>phone</th>
            <th>Email</th>
            <th>street_address</th>
            <th>postal_code</th>
            <th>city</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['fname']}</td>
                        <td>{$row['lname']}</td>
                        <td>{$row['title']}</td>
                        <td>{$row['start_year']}</td>
                        <td>{$row['phone']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['street_address']}</td>
                        <td>{$row['postal_code']}</td>
                        <td>{$row['city']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='10'>Inga anställda funna</td></tr>";
        }
        ?>
    </table>

    <h2>Anställda som började mellan 2006 och 2009</h2>
    <ul>
        <?php
        if ($result_filtered->num_rows > 0) {
            while ($row = $result_filtered->fetch_assoc()) {
                echo "<li>{$row['fname']} {$row['lname']}</li>";
            }
        } else {
            echo "<li>Inga anställda hittades</li>";
        }
        ?>
    </ul>

</body>
</html>
