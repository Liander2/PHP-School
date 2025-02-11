<?php
$url = "prakticum.fi";
if (strstr($url, "http://") === false) {
    $url = "http://" . $url;
}

echo "<p>" . $url . "</p>";
?>
