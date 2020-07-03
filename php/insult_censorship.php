<?php
$insultes = ['con', 'merde', 'connard', 'salope', 'salop', 'pute'];
$sentence = (string)strtolower(readline("Saisissez une phrase: "));

/* Possibilité d'utiliser str_repeat, mais développement d'une fonction pour l'entrainement */

function convertInsulte($insulte) {
    $lengthInsulte = strlen($insulte);
    $convertResult = null;
    for ($i=0; $i < $lengthInsulte ; $i++) {
        $convertResult = $convertResult . "*";
    }
    return $convertResult;
}

if(!empty($sentence)) {
    foreach ($insultes as $insulte) {
        $searchInsulte = strstr($sentence, $insulte);
        convertInsulte($insulte);
        if($searchInsulte) {
            $sentence = ucfirst(str_replace($insulte, convertInsulte($insulte), $sentence)) . "\n";
        }
    }   
} else {
    exit('Vous n\'avez rien saisi' . "\n");
}


echo $sentence;
