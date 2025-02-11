<?php
$animals = ["Hund", "Katt", "Fågel", "Häst", "Fisk"];
$reversedAnimals = array_reverse($animals);

echo "<h2>Omvänd ordning på djur:</h2>";
echo "<ul>";
foreach ($reversedAnimals as $animal) {
    echo "<li>$animal</li>";
}
echo "</ul>";
?>
