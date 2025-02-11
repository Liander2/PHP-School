<?php
$rad_byte = "<p>En ny\n rad</p>";
$nyRadByte = nl2br($rad_byte);
// nl2br() tar en sträng som innehåller radbrytningar (som \n, vilket är en ny rad i texten) och konverterar dessa radbrytningar till HTML <br>-taggar.
echo $nyRadByte;
?>
