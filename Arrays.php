<?php

//--- Array in Php ex - 1 (index Arrays)
$name = array("sonu","karishma","reena","nitin");
echo count($name);
echo "<br>";
//---Arrays in php ex - 2 (index Arrays)
$name = array("sonu","karishma","reena","nitin");
$arrlength = count($name);
for($x = 0; $x < $arrlength; $x++) {
  echo "Index Number [$x] ",$name[$x];
  echo "<br>";
}
// Arrays in php ex. 3 (Associative Arrays)
$marks = array("Hindi"=>"45","English"=>"50","Math"=>"65","Sst"=>"70");
echo "<h1>karishma has got". $marks['Math'] ." marks.";

//Arrays in php ex. 4 (multidimensional Arrays)
$mobile = array(
    array("<br>Nokia", 15000,3),
    array("Samsung",20000,2),
    array("sony",25000,4),
    array("vivo",40000,6), 
    


);
for($row = 0; $row<4;$row++){
    for($col = 0; $col<3;$col++){
        echo $mobile[$row][$col];
        echo "|";

    }
    echo "<br>";
}