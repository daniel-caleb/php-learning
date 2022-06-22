<?php
//Index Arrays
$names=array("Caleb","Gitonga","Lorato","Don","Desmond","Mercedes","Audi", "Kshs.31,500,000");{
    //changing a 'value' inside an array
    $names[3]="Erick";
    echo "My name is $names[3]";
    echo "<br>";
    echo "I drive a $names[6]";
}
echo "<br>";
echo "<hr>";
$num=array(13,33,545,656,776,53,43,677,66,78,87);{
    echo $num[3]*$num[2];
    echo "<hr>";
}

//Associated Arrays

$position=array("Kenya"=>"1","Nigeria"=>"2","South Africa"=>"3","Egypt"=>"4","Morocco"=>"5");
    echo "South Africa -  ".$position["South Africa"];

