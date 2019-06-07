<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice3P6</title>
    </head>
    <body>
        <header>
            <div class="jumbotron text-center">
                <h1 class="display-3 text-center">Exercice 3 partie 6</h1>
                <p class="lead text-center">Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?startDate=2/05/2016&endDate=27/11/2016</p>
            </div>
            <div class="container-fluid text-center">
                <a href="../exercice1P6/index.php"><button class="button">Exercice 1</button></a>
                <a href="../exercice2P6/index.php"><button class="button">Exercice 2</button></a>
                <a href="../exercice3P6/index.php"><button class="button">Exercice 3</button></a>
                <a href="../exercice4P6/index.php"><button class="button">Exercice 4</button></a>
                <a href="../exercice5P6/index.php"><button class="button">Exercice 5</button></a>
                <a href="../exercice6P6/index.php"><button class="button">Exercice 6</button></a>
            </div>
        </header>
        <main>
            <div class="php text-center">
                <a href="index.php?startDate=2/05/2016&endDate=27/11/2016"><button>Afficher</button></a><br/>
                <?php
                if (isset($_GET['startDate']) && isset($_GET['endDate'])) { // On a les dates
                    echo 'Début le ' . $_GET['startDate'] . 'et se termine le ' . $_GET['endDate'] . ' !';
                } else { // Il manque des paramètres, on avertit le visiteur
                    echo 'Il faut renseigner une date !';
                }   
                ?>
            </div>
        </main>
    </body>
</html>
