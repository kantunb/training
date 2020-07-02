<?php
$insultes = ['con', 'merde'];
$sentence = (string)strtolower(readline("Saisissez une phrase: "));

// if(!empty($sentence)) {
//     foreach ($insultes as $insulte) {
//         $searchInsulte = strpbrk($insulte, $sentence);
//         if($searchInsulte) {
//             $sentence = ucfirst(str_replace($insulte, '*', $sentence) . "\n");
//         }
//     }   
// } else {
//     exit('Vous n\'avez rien saisi' . "\n");
// }

if(!empty($sentence)) {
    foreach ($insultes as $insulte) {
        $searchInsulte = strstr($sentence, $insulte);
        if($searchInsulte) {
            $sentence = str_replace($insulte, '*', $sentence) . "\n";
        }
    }   
} else {
    exit('Vous n\'avez rien saisi' . "\n");
}


echo $sentence;
