<?php
$städer = array(
    "Helsingfors" => 601035,
    "Esbo" => 255121,
    "Tammerfors" => 216586,
    "Vanda" => 204545,
    "Åbo" => 179529
);
asort($städer);
foreach ($städer as $stad => $invånare) {
    echo "$stad: $invånare invånare<br>";
}
?>