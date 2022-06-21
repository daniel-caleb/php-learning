<?php
//While...loop
$num=25;
$num1=10;
//increasing
while ($num1<25){
    echo "Increase $num1 <br>";
    $num1+=2;
}
echo "<hr>";

//decreasing
while ($num>10){
    echo "Nambari yangu ni $num <br>";

    $num-=2;
}
echo "<hr>";
//Do..While loop
//increment
$num3=15;

do{
    echo "My number is $num3 <br>";
    $num3++;
}
while($num3>25);
//decrement
echo "<hr>";

do{
    echo "My number is $num3 <br>";
    $num3--;
}
while($num3>25);
echo "<hr>";
//for loop
//increment
$nambari=20;
$nambari2=30;

for ($nambari=40; $nambari<200; $nambari+=20){
    echo "Nambari ni $nambari <br>";
}
echo "<hr>";
//decrement
for ($nambari2=180; $nambari2>20; $nambari2-=30){
    echo "Lorato likes $nambari2 <br>";
}

