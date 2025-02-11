<?php
function beräknaArea($längd, $bredd) {
    if (!is_numeric($längd) || !is_numeric($bredd)) {
        return "Fel: Båda värdena måste vara siffror.";
    }

    $area = $längd * $bredd;

    return "Arean är: " . number_format($area, 2) . " kvadratmeter.";
}
echo beräknaArea(5, 10);
echo "<br>";
echo beräknaArea("hej", 10);
?>
