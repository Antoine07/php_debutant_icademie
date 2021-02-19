<?php
// Les variables
// string
$name = "Alan";
$name = $name . " Phi";

echo $name;
echo "<br />";

// int entier
$note = 17;

// $note <- $note + 0.5
$note = $note + 0.5 ; // float

// collection de valeurs 
//        0   1    2
$notes = [14, 15, 18]; // type array

// sans la notion 
$note1 = 14;
$note2 = 15;
$note3 = 18;

// Comment on peut faire la somme des valeurs $notes 

// accéder aux valeurs de ma collection ici c'est un tableau
echo $notes[0];
echo "<br />";
echo $notes[1];
echo "<br />";
echo $notes[2];
echo "<br />";

// On veut ajouter ou push une valeur à nos notes 
$notes[] = 16;

var_dump($notes);

echo "<br />";
// script complexe à mettre en place
$average_v1 = ($notes[0] + $notes[1] + $notes[2] + $notes[3]) / 4;
echo "Average 1 : $average_v1";
echo "<br />";

// script dynamique
$average_v2 = array_sum($notes) / count($notes);
echo "Average 2 : $average_v2";
echo "<br />";

