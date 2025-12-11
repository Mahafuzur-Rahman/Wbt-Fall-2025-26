<?php
echo "<h2>1. Area & Perimeter of Rectangle</h2>";
$length = 10;
$width = 5;
$area = $length * $width;
$perimeter = 2 * ($length + $width);
echo "Area = $area<br>";
echo "Perimeter = $perimeter<br><br>";


echo "<h2>2. VAT Calculation (15%)</h2>";
$amount = 1000;
$vat = 0.15 * $amount;
echo "VAT = $vat<br><br>";


echo "<h2>3. Odd or Even</h2>";
$num = 7;
if ($num % 2 == 0) {
    echo "$num is Even<br><br>";
} else {
    echo "$num is Odd<br><br>";
}


echo "<h2>4. Largest Among Three Numbers</h2>";
$a = 10; $b = 25; $c = 18;
if ($a >= $b && $a >= $c) {
    echo "Largest = $a<br><br>";
} elseif ($b >= $a && $b >= $c) {
    echo "Largest = $b<br><br>";
} else {
    echo "Largest = $c<br><br>";
}


echo "<h2>5. Odd Numbers Between 10 and 100</h2>";
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
echo "<br><br>";


echo "<h2>6. Search Element in Array</h2>";
$numbers = [3, 8, 12, 20, 25, 30];
$search = 20;
$found = false;

foreach ($numbers as $num) {
    if ($num == $search) {
        $found = true;
        break;
    }
}
echo $found ? "$search found in array<br><br>" : "$search NOT found<br><br>";


echo "<h2>7. Shapes</h2>";

echo "<b>A)</b><br>";
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
echo "<br>";

echo "<b>B)</b><br>";
for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}
echo "<br>";

echo "<b>C)</b><br>";
$letter = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $letter . " ";
        $letter++;
    }
    echo "<br>";
}