<?php

/**
 * Exercise
 *
 *    Essayez de compter le nombre de 1 dans le tableau $data en le parcourant 
 *
 *  */

$results = [];

$data = [1, 1, 201, 3, 4, 87, 809, 115, 6, 106, 9, 9, 10, 11, 12, 14, 48, 48, 51, 51, 1, 1, 1, 51, 3, 3, 3, 51, 51, 51, 51, 51, 0];

print_r('<pre>');
print_r($data);
print_r('<pre/>');


print_r('<pre>');
print_r(count($data));
print_r('<pre/>');

// Parcourir le tableau 

// start $i = 0; condition d'arrêt; pas pour avancer
print_r('<pre>');
for ($i = 0; $i < 100; $i = $i + 1) {
    print_r($i);
    print_r('<br />');
}
print_r('<pre/>');

// Affichez la 3eme valeur de $data array PHP

print_r('<pre>');
print_r($data[2]); // 2 c'est l'indice du tableau donc on accède à la 3eme valeur
print_r('<pre/>');


// Affichez la 6eme valeur de $data array PHP

print_r('<pre>');
print_r($data[5]);
print_r('<pre/>');

// Affichez la 13eme valeur de $data array PHP

print_r('<pre>');
print_r($data[12]);
print_r('<pre/>');

// Affichez la 7eme valeur de $data array PHP

print_r('<pre>');
print_r($data[6]);
print_r('<pre/>');


// Affichez la 10eme valeur de $data array PHP

print_r('<pre>');
print_r($data[9]);
print_r('<pre/>');


// Parcourir $data simplement ! 

echo "<ul>";
for ($i = 0; $i < count($data); $i = $i + 1) {
    echo "<li>" . $data[$i] . "</li>"; // concaténation avec . pour rassembler une chaîne de caractères avec une variable
}
echo "</ul>";


$data_02 = [11, 18, 19, 9, 11, 100, 78, 876, 11];
