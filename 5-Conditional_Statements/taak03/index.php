<?php
$test1 = 3;
$test2 = 6;

if($test1 == $test2){
    echo "gelijk <br>";

}
else{
    echo "niet gelijk <br>";
}
if($test1 != $test2){
    echo "De variabelen zijn ongelijk <br>";
}
else{
    echo "De variabelen zijn niet ongelijk <br>";
}
if($test1 === $test2){
    echo "Variabelen zijn identiek <br>";
}
else{
    echo "Variabelen zijn niet volledig identiek <br>";
}
if($test1 > $test2){
    echo "Test 1 is groter dan test 2 <br>";
}
else{
    echo "Test 1 is niet groter dan test 2 <br>";
}
if($test1 < $test2){
    echo "test 1 is kleiner dan test 2 <br>";

}
else{
    echo "Test 1 is niet kleiner dan test 2 <br>";
}
if( $test1 >= $test2){
    echo "Test 1 is groter of gelijk aan test 2 <br>";

}
else{
    echo "Test 1 is niet groter of gelijk aan test 2 <br>";
}
if($test1 <= $test2){
    echo "Test 1 is kleiner of gelijk aan test 2 <br>";

}
else{
    echo "test 1 is niet kleiner of gelijk aan test 2 <br>";
}
?>