<?php
// Task 1
$i = 3; 
if ($i >= 2) {
    echo "<p>The variable \$i is greater than or equal to 2.</p>";
}

// Task 2
$kalle_profession = "coder";
if ($kalle_profession == "coder") {
    $result = "Kalle is a coder.";
} elseif ($kalle_profession == "welder") {
    $result = "Kalle is a welder.";
} elseif ($kalle_profession == "chef") {
    $result = "Kalle is a chef.";
} else {
    $result = "Don’t know what Kalle does.";
}
echo "<p>$result</p>";

// Task 3
switch ($kalle_profession) {
    case "coder":
        $result = "Kalle is a coder.";
        break;
    case "welder":
        $result = "Kalle is a welder.";
        break;
    case "chef":
        $result = "Kalle is a chef.";
        break;
    default:
        $result = "Don’t know what Kalle does.";
}
echo "<p>$result</p>";

// Task 4
$x = 5; 
if ($x > 2 && $x < 10) {
    echo "<p>The variable \$x is greater than 2 and less than 10.</p>";
}

// Task 5
echo "<p> " . date('D') . ".</p>";

// Task 6
$today = date("D");
if ($today == "Fri") {
    echo "<p>Today is Friday.</p>";
} elseif ($today == "Sat") {
    echo "<p>Today is Saturday.</p>";
} elseif ($today == "Sun") {
    echo "<p>Today is Sunday.</p>";
} elseif ($today == "Mon") {
    echo "<p>Today is Monday.</p>";
} elseif ($today == "Tue") {
    echo "<p>Today is Tuesday.</p>";
} elseif ($today == "Wed") {
    echo "<p>Today is Wednesday.</p>";
} elseif ($today == "Thu") {
    echo "<p>Today is Thursday.</p>";
} else {
    echo "<p>Invalid value.</p>";
}
?>