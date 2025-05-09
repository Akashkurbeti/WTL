<?php
// 1. if, else if, else
$score = 85;

if ($score >= 90) {
    echo "Grade: A\n";
} elseif ($score >= 80) {
    echo "Grade: B\n $score<br>";
} else {
    echo "Grade: C or below\n";
}

// 2. switch
$day = "Wednesday";

switch ($day) {
    case "Monday":
        echo "Start of the week\n";
        break;
    case "Wednesday":
        echo "Midweek day\n $day<br>";
        break;
    case "Friday":
        echo "Almost weekend!\n";
        break;
    default:
        echo "Just another day\n";
}

// 3. while loop
$count = 1;
while ($count <= 3) {
    echo "While loop count: $count <br>\n";
    $count++;
}

// 4. do-while loop
$count = 1;
do {
    echo "Do-While loop count: $count<br>\n";
    $count++;
} while ($count <= 3);

// 5. for loop
for ($i = 1; $i <= 3; $i++) {
    echo "For loop iteration: $i <br>\n";
}

// 6. foreach loop
$fruits = ["Apple", "Banana", "Cherry"];
foreach ($fruits as $fruit) {
    echo "Fruit: $fruit\n <br>";
}
?>
