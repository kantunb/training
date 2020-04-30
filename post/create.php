<?php

var_dump($_POST);

include '../partial/createDb.php';

$request =  "INSERT INTO whisky (name, category, distillery, bottled, stated_age, strength, flavor, description, rate, image)
            VALUES ( :name, :category, :distillery, :bottled, :stated_age, :strength, :flavor, :description, :rate, :image)";
$response = $bdd->prepare($request);
$response->execute([
        'name'          => $_POST['name'],
        'category'      => $_POST['category'],
        'distillery'    => $_POST['distillery'],
        'bottled'       => $_POST['bottled'],
        'stated_age'    => $_POST['stated_age'],
        'strength'      => $_POST['strength'],
        'flavor'        => $_POST['flavor'],
        'description'   => $_POST['description'],
        'rate'          => $_POST['rate'],
        'image'         => $_POST['image'],

]);

$request = "SELECT * FROM whisky";
$response = $bdd->prepare($request);
$response->execute();
$whisky = $response->fetchAll(PDO::FETCH_ASSOC);

// var_dump($whisky);

header('Location: index.php');
?>
