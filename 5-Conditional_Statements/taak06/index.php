<?php

$var1 = 3;
$var2 = 7;
$var3 = 14

if($var1 < 10 && $var1 > 5) {
    echo "het getal zit tussen de 10 en de 5! <br>";
} else {
    echo "het getal is groter dan 10 of kleiner dan 5! <br>";
}
if($var2 < 10 || $var2 > 5){
    echo "het getal is tussen de 10 en de 5! <br>";
} else { 
    echo "het getal is groter dan 10 of kleiner dan 5! <br>";
}
if ($var3 < 10 xor $var3 > 5){
    echo "het getal is tussen de 10 en de 5! <br>";

}else {
    echo "het getal is groter dan 10"
}
?>