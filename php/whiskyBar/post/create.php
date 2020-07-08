<?php

include '../partial/createDb.php';
include '../partial/navbar.php';

var_dump($_POST);

var_dump($_FILES);


$nomOrigine = $_FILES['image']['name'];
$filename = pathinfo($nomOrigine)['filename'];
$extension = pathinfo($nomOrigine)['extension'];
$upload_dir = '../img';
$newName =  '/' . $_POST['name'] . '-' . uniqid() . '.' . $extension;
$authorisedExtension = ['jpg', 'jpge', 'png'];


if (!$_FILES['image']['error']) {
        if (in_array($extension, $authorisedExtension)) {
                move_uploaded_file($_FILES['image']['tmp_name'], $upload_dir . $newName);
        }
        else {
                echo 'Format pas autorisé';
        }
}

// die;

$request =  "INSERT INTO whiskies (name, category, distillery, bottled, stated_age, strength, flavor, description, rate, image)
            VALUES ( :name, :category, :distillery, :bottled, :stated_age, :strength, :flavor, :description, :rate, :image)";
$response = $bdd->prepare($request);
$response->execute([
        'name'          => $_POST['name'],
        'category'      => $_POST['category'],
        'distillery'    => $_POST['distillery'],
        'bottled'       => $_POST['bottled'],
        'stated_age'    => $_POST['stated_age'],
        'strength'      => $_POST['strength'],
        'flavor'        => implode(';', $_POST['flavor']),
        'description'   => $_POST['description'],
        'rate'          => $_POST['rate'],
        'image'         => $newName,

]);

// $request = "SELECT * FROM whiskies";
// $response = $bdd->prepare($request);
// $response->execute();
// $whiskies = $response->fetchAll(PDO::FETCH_ASSOC);


// header('Location: ../index.php');
?>

<?php
// $nomOrigine = $_FILES['monfichier']['name'];
// $elementsChemin = pathinfo($nomOrigine);
// $extensionFichier = $elementsChemin['extension'];

//         $repertoireDestination = dirname(__FILE__) . "/";
//         $nomDestination = "fichier_du_" . date("YmdHis") . "." . $extensionFichier;

//         if (move_uploaded_file(
//                 $_FILES["monfichier"]["tmp_name"],
//                 $repertoireDestination . $nomDestination
//         )) {
//                 echo "Le fichier temporaire " . $_FILES["monfichier"]["tmp_name"] .
//                         " a été déplacé vers " . $repertoireDestination . $nomDestination;
//         } else {
//                 echo "Le fichier n'a pas été uploadé (trop gros ?) ou " .
//                         "Le déplacement du fichier temporaire a échoué" .
//                         " vérifiez l'existence du répertoire " . $repertoireDestination;
//         }
?>