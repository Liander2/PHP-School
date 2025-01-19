<?php
// Task 1
$code = array("HTML", "CSS", "JAVA", "PHP");

// Task 2
echo "<p>$code[0]</p>";
echo "<p>$code[1]</p>";
echo "<p>$code[2]</p>";
echo "<p>$code[3]</p>";

// Task 3a
$bakelse = array (
    array("Bulla",1.50,10),
    array("Kaka",5.00,4),
    array("Pirog",2.50,12)
);

foreach ($bakelse as $item) {
    echo "Bakelse: " . $item[0] . "<br>";
    echo "Pris: " . number_format($item[1], 2) . "<br>";
    echo "Antal: " . $item[2] . "<br>";
    echo "--------------------<br>";
}

// Task 3b
echo "priset på bulla: ".$bakelse[0][1]. "<br>";
echo "antalet piroger: ".$bakelse[2][2]. "<br>";

// Task 3c
$antalBakelser = count($bakelse);

echo "<br> Antalet olika bakelser: $antalBakelser <br>";

// Task 3d
$totalAntal = 0;

foreach ($bakelse as $antal) {
    $totalAntal += $antal[2];
}

echo "<br> Totala antalet varor: $totalAntal";
?>