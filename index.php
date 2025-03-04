<?php
$x = 10;
$y = 7;
echo"Exercise 1:" . "<br>" ;
echo "$x + $y = " . ($x + $y) . "<br>";
echo "$x - $y = " . ($x - $y) . "<br>";
echo "$x * $y = " . ($x * $y) . "<br>";
echo "$x / $y = " . ($x / $y) . "<br>";
echo "$x % $y = " . ($x % $y) . "<br>" . "<br>";

echo"Exercise 2:" . "<br>";
$month = date('F', time()); 
if ($month == "August") {
    echo "It's August, so it's really hot.";
} else {
    echo "Not August, so at least not in the peak of the heat." . "<br>" . "<br>";
}

echo"Exercise 3:" . "<br>";
for ($i = 1; $i <= 12; $i++) {
    echo "$i * $i = " . ($i * $i) . "<br>";
}
echo "<br>"; 

echo"Exercise 4:" . "<br>";
echo "<table border='1' cellpadding='5'>";
for ($i = 1; $i <= 7; $i++) {
    echo "<tr>";

    for ($j = 1; $j <= 7; $j++) {
        echo "<td>" . ($i * $j) . "</td>"; 
    }
    echo "</tr>";
}
echo "</table>";
?>