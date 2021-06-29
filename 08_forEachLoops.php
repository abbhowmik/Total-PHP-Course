<?php
echo "Welcome to the tutorial of forEach tutorial";
echo "<br>";

$arr = array("Bananas", "apple", "bread", "Mangos");
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i];
    echo "<br>";
}
// better way to do this method is forEach Loops mentioned in below
foreach ($arr as $value) {
    echo $value;
    echo "<br>";
}
