<?php

$nambari1=25;
$nambari2=50;
$nambari3=100;
$anonymous=75;
// if Condition
if ($nambari1<56){
    echo "Yes it is true";
}
echo "<br>";
echo "<br>";

//if...else Condition
if ($anonymous>$nambari2){
    echo "Above Average";
}
else{
    echo "Below Average";
}
echo "<br>";
echo "<br>";

//if...elseif...else Condition
$t=date("H");
if ($t<12){
    echo "Good Morning!";
}
elseif ($t<17){
    echo "Good Afternoon!";
}
else{
    echo "Good Evening!";
}
echo "<br>";
echo "<hr>";
//Fail ~~ 0-30
//Credit ~~ 31-50
//Pass ~~ 50-75
//Distinction ~~ 75-100
$marks=-76;
if ($marks>0 && $marks<30){
    echo "Fail";
}
elseif ($marks>=30 && $marks<50){
    echo "Credit";
}
elseif ($marks>=50 && $marks<75){
    echo "Distinction";
}
elseif ($marks>=75 && $marks<100){
    echo "Pass";
}
else{
    echo "Invalid";
}

