<?php
$rad = "<p>Detta är en rad</p>";
// htmlspecialchars() på variabeln $rad, omvandlar HTML-taggarna <p> och </p> i strängen till sina HTML-entiteter
echo "<p>" . htmlspecialchars($rad) . "</p>";
?>
