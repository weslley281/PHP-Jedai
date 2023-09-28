<?php
$arr1 = array("Fulano", "Cicrano", "Deltrano", "Maltrano");

$arr2 = array("a" => "Fulano", "b" => "Cicrano", "c" => "Deltrano", "d" => "Maltrano");

foreach ($arr1 as $key => $value) {
    echo "$key: $value <br>";
}

echo "___________________________________ <br>";

foreach ($arr2 as $key => $value) {
    echo "$key: $value <br>";
}

echo "___________________________________ <br>";

$total = count($arr1);

for ($i = 0; $i < $total; $i++) {
    echo $arr1[$i] . "<br>";
}
