<?php

//           0    1   2   3  4   5
$st_notes = [13, 17, 18, 14, 13, 18.5];

// Exercice 
/*
    Ajoutez 1 à chaque note du tableau $st_notes
*/

var_dump($st_notes);

// on a ecrase la valeur se trouvant à l'indice 0 par une autre valeur
// $st_notes[0] = "Bonjour tout le monde";

echo '<br />';

var_dump($st_notes);

//que l'on met là <-  valeur ici
$st_notes[0]      =   $st_notes[0] + 1 ;

echo '<br />';

var_dump($st_notes);

$st_notes[1] = $st_notes[1] + 1 ;
$st_notes[2] = $st_notes[2] + 1 ;
$st_notes[3] = $st_notes[3] + 1 ;
$st_notes[4] = $st_notes[4] + 1 ;
$st_notes[5] = $st_notes[5] + 1 ;

echo '<br />';

var_dump($st_notes);

echo "<br />";


// On peut généraliser cette approche à l'aide des boucles pour rendre le code plus dynamique 
          // 0    1   2   3  4   5
$st_notes = [13, 17, 18, 14, 13, 18.5, 15, 11];

// $i = 0 le premier pas, condition d'arret, la longueur du pas
for($i = 0; $i < count($st_notes); $i = $i + 1){
    $st_notes[$i] = $st_notes[$i] + 1 ;
}

echo '<br />';

var_dump($st_notes);

echo "<br />";