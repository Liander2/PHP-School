<?php
$bilar = "audi,jeep,volkswagen,ford,opel";
$bilarArray = explode(",", $bilar);
foreach ($bilarArray as $bil) {
    echo "$bil<br>";
}
?>