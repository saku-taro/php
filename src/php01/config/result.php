<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
print "私の名前は、" . $name;
echo "<br />";
$radio = htmlspecialchars($_POST['radio'], ENT_QUOTES);
print "ご注文商品は、" . $radio;
echo "<br />";
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);
print "注文数は" . $number;
