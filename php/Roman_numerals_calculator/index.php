<?php

// Convertir les chiffres romains en chiffres arabes
    // TODO : faire un tableau à parcourrir plutot qu'un switch

// Réaliser le calcul en chiffres arabes

// Convertir le résult en chiffres romains

$valRom = "LXXIV";
$valArab = 2444;
$resultRom = '';
$resultArab = 0;

$valeurs = [
    "M"     => 1000,
    "CM"    => 900,
    "D"     => 500,
    "CD"    => 400,
    "C"     => 100,
    "XC"    => 90,
    "L"     => 50,
    "XL"    => 40,
    "X"     => 10,
    "IX"    => 9,
    "VIII"  => 8,
    "VII"   => 7,
    "VI"    => 6,
    "V"     => 5,
    "IV"    => 4,
    "III"   => 3,
    "II"    => 2,
    "I"     => 1
];

foreach ($valeurs as $chiffreRomain => $chiffreArabe) {
    while (strpos($valRom, $chiffreRomain) === 0) {
        echo ($valRom."<br>");
        $resultArab += $chiffreArabe;
        $valRom = substr($valRom, strlen($chiffreRomain));
    }
}

echo $resultArab ."<br>";

// foreach ($valeurs as $chiffreRomain => $chiffreArabe) {
//     $chiffreArabe = strval($chiffreArabe);
//     echo ($valArab."<br>");
//     while (strpos($valArab, $chiffreArabe, -(strlen($valArab))) === 0) {
//         $resultRom .= $chiffreRomain;
//         $valArab = substr($valArab, strlen($chiffreArabe));
//     }
// }

$valArabArray = array_map('intval', str_split($valArab));
var_dump($valArabArray);

$reversedValArabArray = array_reverse($valArabArray);

$multi = 1;
$valArabArray2 = [];
foreach($reversedValArabArray as $v){
    $v *= $multi;
    $valArabArray2 += ["$multi" => $v];
    $multi *= 10;
}
var_dump($valArabArray2);

$valArabArray2 = array_reverse($valArabArray2);

var_dump($valArabArray2);

// Recherche d'un entier
function resultatEntier($chiffre1, $chiffre2){
    is_int($chiffre1 / $$chiffre2);
    return;
}

// foreach($valeurs as $chiffreRomain => $chiffreArabe) {
//     foreach($valArabArray2 as $valArab) {
//         $resultEntier = is_int($valArab / $chiffreArabe);
//         if($resultEntier > 0) {
//             $number = str_repeat($chiffreRomain, $resultEntier);
//             $resultRom[] = $number;
//         } 
//     }
    // $resultRom = strrev($resultRom);
// }
// foreach ($valeurs as $chiffreRomain => $chiffreArabe) {
//     $chiffreArabe = strval($chiffreArabe);
// }

/**
 * On reprend le tableau de valeur et on compare chaque cellule à son contenu
 */

foreach($valeurs as $chiffreRomain => $chiffreArabe) {
    $resultEntier = floor($valArab / $chiffreArabe);
    while(($valArab - $chiffreArabe >= 0)){
        $number = str_repeat($chiffreRomain, $resultEntier);
        $resultRom .= $number;
        $valArab -= $chiffreArabe * $resultEntier;
    }
}

var_dump($resultRom);

