<?php
//Fail ~~ 0-30
//Credit ~~ 31-50
//Pass ~~ 50-75
//Distinction ~~ 75-100
$marks=36;

switch ($marks){
        case ($marks>0 && $marks<30);
            echo "Ukona Ujinga";
            break;

        case ($marks>=30 && $marks<50);
            echo "Ukona jokes nani...";
            break;

        case ($marks>=50 && $marks<75);
            echo "Umejaribu";
            break;

        case ($marks>=75 && $marks<100);
            echo "Pass";
            break;

        default;
            echo "Invalid";
}
