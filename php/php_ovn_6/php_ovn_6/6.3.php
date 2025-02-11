<?php
$rad = "<p>Detta är en rad</p>"; 
// Funktionen strip_tags() används för att ta bort alla HTML- och PHP-taggar från en sträng.
echo "<p>" . strip_tags($rad) . "</p>";
?>
