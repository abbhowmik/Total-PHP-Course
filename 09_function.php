<?php


function processMarks($marksArr)
{
    $sum = 0;
    foreach ($marksArr as $value) {
        $sum  = $sum + $value;
    }
    return $sum;
}
function averageMarks($marksArr)
{
    $sum = 0;
    $count = 1;
    foreach ($marksArr as $value) {
        $sum  = $sum + $value;
        $count++;
    }
    return $sum / $count;
}

$ashisBhowmik = [34, 56, 45, 78, 89];
$aMarks = processMarks($ashisBhowmik);
$avgMarks = averageMarks($ashisBhowmik);

$rohanDas = [65, 23, 12, 90, 89];
$rMarks = processMarks($rohanDas);
$rvgMarks = averageMarks($rohanDas);

echo "Total marks Scored by Ashis out of 500 is $aMarks<br>";
echo "The average marks of Ashis out of 100 is $avgMarks <br>";
echo "Total marks Scored by Rohan out of 500 is $rMarks <br>";
echo "The average marks of Rohan out of 100 is $rvgMarks <br>";
