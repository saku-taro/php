<?php
$a = 10;
$b = 10;
$c = 5;
$d = 5;

$answer1 = $b + $b;
$answer2 = $a + $b + $b;
$answer3 = $answer1 < $a;
$answer4 = $answer2 > $a;
$answer5 = $a % $c;

echo $answer1;
echo "<br />";
echo $answer2;
echo "<br />";
echo $answer3;
echo "<br />";
echo $answer4;
echo "<br />";
echo (++$a);
echo "<br />";
echo ($b++);
echo "<br />";
echo (--$c);
echo "<br />";
echo ($d--);
echo "<br />";
