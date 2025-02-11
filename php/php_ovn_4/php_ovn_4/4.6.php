<?php
$rad = 8;
if ($rad == 0) {
    echo "Värdet är noll";
} elseif ($rad == 1) {
    echo "Endast en rad";
} elseif ($rad >= 2 && $rad <= 10) {
    $i = 1;
    while ($i <= $rad) {
        echo "Detta är rad $i<br>";
        $i++;
    }
} else {
    echo "För mycket rader eller ogiltigt värde";
}
?>