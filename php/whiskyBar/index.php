<?php

include './partial/createDb.php';

$request = "SELECT * FROM whiskies";
$response = $bdd->prepare($request);
$response->execute();
$whiskies = $response->fetchAll(PDO::FETCH_ASSOC);

//var_dump($whiskies);



?>

<!doctype html>
<html lang="fr">

<head>
    <?php include './partial/head.php' ?>
</head>

<body>

    <header>
        <?php include './partial/navbar.php' ?>
    </header>

    <main>

        <?php include './partial/jumbotron.php' ?>

        <div class="album bg-light">
            <div class="container">
                <div class="row">

                    <?php foreach ($whiskies as $whisky) : ?>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <div class="card-body">
                                    <h3><?= $whisky['name'] ?></h3>
                                    <ul>
                                        <li>Catégorie : <?= $whisky['category'] ?></li>
                                        <li>Distillerie : <?= $whisky['distillery'] ?></li>
                                        <li>Âge : <?= $whisky['stated_age'] ?></li>
                                        <li>Mise en bouteille en :<?= $whisky['bottled'] ?></li>
                                        <li>Alcool : <?= $whisky['strength'] ?></li>
                                        <li>Arôme : <?= $whisky['flavor'] ?></li>
                                        <li>Description : <?= $whisky['description'] ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>

    </main>
    <footer>
        <?php include './partial/footer.php' ?>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>