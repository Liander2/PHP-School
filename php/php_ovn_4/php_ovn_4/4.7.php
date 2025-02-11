<?php
$personer = array(
    "Paul" => "14.03.1977",
    "Anna" => "22.07.1990",
    "Johan" => "05.12.1985",
    "Lisa" => "30.04.2001"
);
foreach ($personer as $namn => $datum) {
    $delar = explode(".", $datum);
    $månad = $delar[1];
    $månadsNamn = str_replace(
        ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"],
        ["Januari", "Februari", "Mars", "April", "Maj", "Juni", "Juli", "Augusti", "September", "Oktober", "November", "December"],
        $månad
    );
    echo "$namn är född i $månadsNamn.<br>";
}
?>