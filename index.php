<!-- création des deux tableaux -->
<?php
$listeSimple = ["Pommes", "Poires", "Oranges", "Légumes", "Haricots verts", "Tomates", "Autres", "Gâteaux", "Bonbons", "Savon"];

$listeComplexe = [
    "Fruits" => ["Pommes", "Poires", "Oranges"],
    "Légumes" => ["Haricots verts", "Tomates"],
    "Autres" => ["Gâteaux", "Bonbons", "Savon"]

];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listes de courses</title>
</head>

<body>
    <!-- liste simple -->
    <h2>Liste Simple:</h2>
    <ul>
        <?php foreach ($listeSimple as $index => $value) { ?>
            <li>
                <?php echo $value; ?>
            </li>
        <?php } ?>

    </ul>

    <!-- liste complexe -->
    <h2>Liste Complexe:</h2>

    <?php foreach ($listeComplexe as $title => $list) { ?>

        <p> <?php echo $title . ":" ?> </p>


        <ul>
            <?php foreach ($list as $index => $value2) { ?>

                <li><?php echo $value2; ?></li>

            <?php } ?>
        </ul>
    <?php } ?>




</body>

</html>