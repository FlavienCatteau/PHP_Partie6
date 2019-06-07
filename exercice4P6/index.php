<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice4P6</title>
    </head>
    <body>
        <header>
            <div class="jumbotron text-center">
                <h1 class="display-3 text-center">Exercice 4 partie 6</h1>
                <p class="lead text-center">Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?language=PHP&server=LAMP</p>
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
                <a href="index.php?langage=PHP&serveur=LAMP"><button>Afficher</button></a><br/>
                <?php
                if (isset($_GET['langage']) && isset($_GET['serveur'])) { // On a le langage et le serveur
                    echo 'Le langage est en ' . $_GET['langage'] . ' sur un serveur sous ' . $_GET['serveur'] . ' !';
                } else { // Il manque des paramètres, on avertit le visiteur
                    echo 'Il faut renseigner un langage et un serveur !';
                }
                ?>
            </div>
        </main>
    </body>
</html>
