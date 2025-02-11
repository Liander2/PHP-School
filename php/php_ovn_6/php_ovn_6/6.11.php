<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Betyg</title>
    <link rel="stylesheet" href="StudentResults.css">
</head>
<body>

<?php
$students = [
    "Alice" => [
        "Matematik" => "A",
        "Engelska" => "B",
        "Historia" => "A"
    ],
    "Bob" => [
        "Matematik" => "C",
        "Engelska" => "B",
        "Historia" => "B"
    ],
    "Charlie" => [
        "Matematik" => "B",
        "Engelska" => "C",
        "Historia" => "A"
    ]
];

// Välj en student
$studentName = "Bob";

// Visa betyg för den valda studenten
echo "<h2>Betyg för $studentName:</h2>";
echo "<table class='student-results'>";
echo "<tr><th>Ämne</th><th>Betyg</th></tr>";

foreach ($students[$studentName] as $subject => $grade) {
    echo "<tr><td>$subject</td><td>$grade</td></tr>";
}

echo "</table>";
?>

</body>
</html>
