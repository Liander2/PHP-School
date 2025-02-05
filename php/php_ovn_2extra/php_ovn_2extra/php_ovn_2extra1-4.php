<?php
// Task 1
$text = "tomosarts future crypto site";
echo "Antal tecken i strängen: " . strlen($text), "<br>";

// Task 2
$new_text = str_replace("future", "PAST", $text);
echo $new_text, "<br>";

// Task 3 
$str1 = "Future";
$str2 = "future";
if (strcasecmp($str1, $str2) == 0) {
    echo "Strängarna är lika.<br>";
} else {
    echo "Strängarna är inte lika.<br>";
}

// Task 4
$filename = "tomosarts.txt";
$content = str_repeat("Detta är exempeltext för Tomosarts.\n", 500);
file_put_contents($filename, $content);
echo "Filen '$filename' har skapats med exempeltext.<br>";
if (file_exists($filename)) {
    $file = fopen($filename, "r"); // Öppna filen i läsläge ("r")
    $content = fread($file, filesize($filename)); // Läs hela filen
    fclose($file); // Stäng filen

    echo nl2br($content); // Skriv ut innehållet med radbrytningar
} else {
    echo "Filen '$filename' hittades inte.";
}

?>

