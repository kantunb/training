<!doctype html>
<html lang="fr">

<head>
    <title>Whisky Bar</title>
    <!-- requiredd meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

                    <form class="form-group" enctype="multipart/form-data" action="./post/create.php" method="POST">
                        <fieldset class="p-3">

                            <legend>Ajouter un whisky</legend>

                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input type="text" class="form-control" name="name" id="" aria-describedby="name" value="test_nom" placeholder="" required>
                                <!-- <small id="name" class="form-text text-muted"></small> -->
                            </div>

                            <div class="form-group">
                                <label for="category">Categorie</label>
                                <select name="category" id="" class="ml-3 aria-describedby=" category" required>
                                    <option value="">select</option>
                                    <option value="blend" selected>Blended Malt</option>
                                    <option value="single malt">Single Malt</option>
                                    <option value="bourbon">Bourbon</option>
                                    <option value="rye">Rye</option>
                                    <option value="tennessee">Tennessee</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for=" distillery">Distillerie</label>
                                <input type="text" class="form-control" name="distillery" id="" aria-describedby="Distillerie" value="test_distillerie" required>
                            </div>

                            <div class="form-group">
                                <label for="bottled">Date de mise en bouteille</label>
                                <input type="number" class="form-control" name="bottled" id="" min="1800" max="2100" aria-describedby="Date de mise en bouteille" value="1800" required>
                                <small id="date_bouteille" class="form-text text-muted">Ex : 2010</small>
                            </div>

                            <div class="form-group">
                                <label for="stated_age">Âge</label>
                                <input type="number" class="form-control" name="stated_age" id="" min="0" max="200" aria-describedby="Âge" value="0" required>
                                <small id="age_bouteille" class="form-text text-muted">Ex : 15</small>
                            </div>

                            <div class="form-group">
                                <label for="strength">Degré d'alcool</label>
                                <input type="number" class="form-control" name="strength" id="" min="30" max="80" step="0.01" aria-describedby="Degré d'alcool" value="20" required>
                                <small id="degree_bouteille" class="form-text text-muted">Ex : 42,5</small>
                            </div>

                            <div class="form-group">
                                <label for="flavor">Arômes</label>
                                <ul class="form-check">
                                    <li>
                                        <input type="checkbox" class="form-check-input" name="flavor[]" id="yellow_fruit" value="yellow_fruit" aria-describedby="Arômes" value="test_aromes">
                                        <label class="form-check-label" for="yellow_fruit">Fruit jaune</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="form-check-input" name="flavor[]" id="smoke" value="smoke" aria-describedby="Arômes" value="test_aromes">
                                        <label class="form-check-label" for="smoke">Fumé</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="form-check-input" name="flavor[]" id="peat" value="peat" aria-describedby="Arômes" value="test_aromes">
                                        <label class="form-check-label" for="peat">Tourbe</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="form-check-input" name="flavor[]" id="cereal" value="cereal" aria-describedby="Arômes" value="test_aromes">
                                        <label class="form-check-label" for="cereal">Céréales</label>
                                    </li>
                                </ul>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" id="" minlength="6" aria-describedby="Description"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="rate">Note</label>
                                <select name="rate" id="" class="ml-3 aria-describedby=" Note" required>
                                    <option value="">select</option>
                                    <option value="0" selected>0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>

                            <input type="hidden" name="MAX_FILE_SIZE" value="1000000000" />

                            <div class="form-group">
                                <label for="image">Photo</label>
                                <input type="file" class="form-control-file" name="image" id="" class="ml-3" aria-describedby="Photo">
                            </div>

                            <div class="form-group">
                                <input class="btn btn-primary mt-4" type="submit" value="Ajouter un whisky">
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php include './partial/footer.php' ?>
    </footer>
    <?php include './partial/scriptCall.php' ?>
</body>

</html>