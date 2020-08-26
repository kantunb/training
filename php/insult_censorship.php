<?php

/**
 * Description : Replace the letters of the insulte found by stars
 * 
 * @param string
 * 
 * @return string 
 */
function convertInsulte(string $insulte) : string
{
    $lengthInsulte = strlen($insulte);
    $firstLetter = substr($insulte, 0, 1);
    $convertResult = $firstLetter . str_repeat("*", ($lengthInsulte - 1));
    return $convertResult;
}

/**
 * @return void
 */
function continueOrExit() : void
{
    $repeatFunction = (string) readline("Voulez-vous saisir une autre phrase (o / n)?");

    if ($repeatFunction === "o") {
        insultCensorship();
    } else if ($repeatFunction === "n") {
        exit;
    } else {
        echo ("La réponse est incorrecte, veuillez recommencer." . "\n");
        continueOrExit();
    }
}

/**
 * Description : Parse the $insultes array to compare with the $sentence and convert it in $censoredSentence
 * 
 * @return void
 */
function insultCensorship() : void
{
    $insultes = ['con', 'merde', 'connard', 'salope', 'salop', 'batard', 'tg', 'pute'];
    $sentence = (string) strtolower(readline("Saisissez une phrase: "));
    if (!empty($sentence)) {
        $censoredSentence = $sentence;
        $noInsulte = 0;
        foreach ($insultes as $insulte) {
            // $searchInsulte = strstr($censoredSentence, $insulte);
            $searchInsulte = preg_match("~\b$insulte\b~", $censoredSentence);
            if ($searchInsulte) {
                convertInsulte($insulte);
                $censoredSentence = str_replace($insulte, convertInsulte($insulte), $censoredSentence) . "\n";
            } else {
                $noInsulte += 1;
            }
        }
        if($noInsulte === count($insultes)){
            echo ("Votre phrase ne comporte pas d'insultes répertoriées" . "\n");
        } else {
            echo ($censoredSentence);
        }
    } else {
        echo ("Vous n'avez rien saisi" . "\n");
        insultCensorship();
    }
    continueOrExit();
}

insultCensorship();
