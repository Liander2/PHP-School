<?php
$capital = array(
    "Finland" => "Helsingfors",
    "Sverige" => "Stockholm",
    "Japan" => "Tokyo",
    "Tyskland" => "Berlin"
);
foreach ($capital as $land => $stad) {
    echo "$stad är huvudstaden i $land.<br>";
}
?>