<?php
$arr1 = array("Fulano", "Cicrano", "Deltrano", "Maltrano");
$arr2 = [1, 2, 3, 4];

$arr3 = array($arr1, $arr2);

echo $arr3[0][2];
echo "<br>";
echo $arr3[1][2];
