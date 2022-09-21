<?php 
$numbers = [];
while (count($numbers) <= 15) {
    $number = rand(1,99);
    if (!in_array($number, $numbers))
    $numbers[] = $number;
}

echo '<pre>' . var_export($numbers, true) . '</pre>';
