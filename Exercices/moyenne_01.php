<?php

// Calculer la moyenne des valeurs suivantes, pensez à les ranger dans une collection type array et pensez à utiliser les fonctions
// que l'on a vu ce soir
/*
Alan 13
Sandrine 17
Claire 18
Romain 14
Antoine 13
Sophie 18.5
*/

$notes = [11, 12, 14];
/*
$notes = [
    0 => 11,
    1 => 12,
    2 => 14
];

*/
$sum = array_sum($notes );
echo $notes[1];
echo '<br />';
echo $sum;

echo '<br />';

$students = [
    'Alan' => 13, // key => value 
    'Sandrine' => 17,
    'Claire' => 18,
    'Romain' => 14,
    'Antoine' => 13,
    'Sophie' => 18.5
];

var_dump($students);

// accéder à la valeur dont la clé est Sandrine
echo $students['Sandrine'];
$sum = array_sum($students );

echo '<br />';
echo $sum;

$st_notes = [13, 17, 18, 14, 13, 18.5];
$sum = array_sum( $st_notes );

echo '<br />';
echo $sum;

// Calculons maitenant la moyenne

$sum = array_sum($students);
$nb = count($students);

$average_brut = $sum / $nb ;
$average_round = round( $sum / $nb, 1);

echo "<p>Moyenne brut $average_brut , moyenne arrondi : $average_round  </p>";