<?php
// Task 6
$day = "Wednesday"; 

switch ($day) {
    case "Monday":
        echo "Start the week with a workout in the Gym."; // Måndag
        break;
    case "Tuesday":
        echo "Go for a run in the park."; // Tisdag
        break;
    case "Wednesday":
        echo "Attend a yoga class."; // Onsdag
        break;
    case "Thursday":
        echo "Play football with friends."; // Torsdag
        break;
    case "Friday":
        echo "Relax and watch a movie."; // Fredag
        break;
    case "Saturday":
        echo "Go hiking in the mountains."; // Lördag
        break;
    case "Sunday":
        echo "Spend the day with family and friends."; // Söndag
        break;
    default:
        echo "Invalid day."; // Om inget matchar
        break;
}
?>
