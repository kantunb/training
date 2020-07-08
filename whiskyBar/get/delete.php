<?php

include '../partial/createDb.php';
include '../partial/navbar.php';

var_dump($_POST);

var_dump($_GET);

$id = $_GET['id'];

var_dump($id);

// die;

$request =  "DELETE FROM whiskies WHERE (id = $id)";
$response = $bdd->prepare($request);
$response->execute();

// $request = "SELECT * FROM whiskies";
// $response = $bdd->prepare($request);
// $response->execute();
// $whiskies = $response->fetchAll(PDO::FETCH_ASSOC);


// header('Location: ../index.php');
?>