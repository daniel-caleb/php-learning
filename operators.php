<?php

//arithmetic operators
$num1=58;
$num2=19;
$num3="19";
echo $num2+$num1;
echo "<br>";
echo $num2-$num1;
echo "<br>";
echo $num2*$num1;
echo "<br>";
echo $num2/$num1;
echo "<br>";
echo $num2%$num1;
echo "<br>";
//checking if $num2 is equal to $num3
var_dump($num2==$num3);
echo "<br>";
//checking if $num3 and $num2 are equal and if yes, are they of the same data type?
var_dump($num3===$num2);
echo "<br>";
//using (and) operator
var_dump($num2>=$num3 && $num2<$num1);
echo "<br>";
//using (or) operator
var_dump($num2>=$num3 || $num2<$num1);
echo "<br>";


