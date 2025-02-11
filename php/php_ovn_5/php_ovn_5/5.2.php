<?php
function beräknaMedeltal($tal) {
    $talArray = explode(",", $tal);
    $renaTal = array_filter(array_map('trim', $talArray), 'is_numeric');
    if (count($renaTal) !== count($talArray)) {
        return "<p>Fel: Alla värden måste vara heltal.</p>";
    }

    $renaTal = array_map('intval', $renaTal);
    $medelvärde = array_sum($renaTal) / count($renaTal);
    return "<p>Medelvärdet är: " . number_format($medelvärde, 2) . "</p>";
}

$tal = "3, 24, 80, 9, 1";
echo beräknaMedeltal($tal);
?>
