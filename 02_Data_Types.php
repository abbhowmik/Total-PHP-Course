<?php
/* php data types
1. String
2. Integer
3. Float 
4. Boolean 
5. Object 
6. Array
7. NULL
*/

// String- Sequence of character
$name = "Harry";
$friend = "Ashis";
echo "$name is a friend of $friend";
echo "<br>";

// Integer - Non decimal number
// Float - Decimal point number
// Boolean - Can be either true or false
$x = true;
$y = false;
echo $x;
echo "<br>";
echo var_dump($x);
echo "<br>";
echo var_dump($y);

// array - Used to store multiple values in a single variable
$friend = array("ashis", "arjun", "rohan", "rahul");
echo "<br>";

echo var_dump($friend);
echo "<br>";
echo $friend[0];
echo "<br>";
echo $friend[1];
echo "<br>";
echo $friend[2];
echo "<br>";
echo $friend[3];
