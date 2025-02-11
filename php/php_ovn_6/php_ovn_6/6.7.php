<?php
$txt = "text"; 
$nytxt = md5($txt);
echo "<p>" . $nytxt. "</p>";

// md5() används för att skapa en MD5-hash av en given sträng. En hash är en unik representation (en förkortad kod) av en inmatad sträng.
// andra liknande funktioner, sha1() , hash() , password_hash()
?>
