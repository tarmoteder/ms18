<?php

// arvud
$nr1 = 2;
$nr2 = 8;
$nr3 = 3.14;

// stringid
$str1 = "a";
$str2 = "b";
$str3 = "2";

//tõeväärtus
$diff = false;

//massiiv
$colors = array ("punane","sinine","kollane");

echo "<h1>Teretulemast PHP imelisse maailma</h1>";

//tegevused numbritega

echo $nr1+$nr2."<br>";

/*
Mitme realine 
kommentaar
*/

// tegevused stringidega
echo $str1.$str2."<br>";

// ytõeväärtus ja võrdlused

if ($diff == true) {
    echo "Tingimus on täidetud!<br>";
} else {echo "Tingimus ei ole täidetud!<br>";}

if ($str3 == $nr1){
    echo "On identsed<br>";
} else {echo "Kõik on halvasti!<br>";}

// tegevused massiividega

echo $colors[0];

for ($i = 0; $i < count($colors); $i++){
    echo $colors[$i]."<br>"; }
    
echo "kohal!";

?>