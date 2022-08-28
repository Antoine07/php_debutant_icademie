<?php 
for ($count = 0; $count < 100 ; $count = $count + 1);

echo $count . "\n";

// Exercice 
/**
 * Faire la somme des nombres pairs
 */

$numbers = [ 1,2,3,4];
$sum = 0;
for ($i = 0; $i < count($numbers) ; $i = $i + 1){
    $sum = $numbers[$i];
}

echo $sum . "\n";


$numbers = [ 1,2,3,4];
$sum = 0;
foreach ($numbers as $number){
    $sum = $sum + $number;
}

echo $sum . "\n";
