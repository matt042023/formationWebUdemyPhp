<?php  require "./math.php";?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions</title>
    <style type="text/css">
        body {
            background-color: #f5f5f5;
            font-size: 20px;
            font-family: Arial, sans-serif;
            margin: 2em;
        }
    </style>
</head>
<body>
    <?php include "menu.html" ?>
    <h1><?php echo "Les Fonctions"; ?></h1>

    <?php

        $res = add(5,5);
        $res2 = add(8,12);
        $res3 = $res + $res2;

        echo $res . "<br>";
        echo $res2 . "<br>";
        echo $res3 . "<br>";

        $nom = "mamadou,ndiaye,toto,matt,angelique,marie";
        $liste_nom = explode(",",$nom);

        var_dump($liste_nom);
        print_r($liste_nom);
        echo ucfirst($liste_nom[0]) . "<br>";
        echo $liste_nom[0] . "<br>";

        $file = "shfdhdsqlkqfds.jpeg";
        echo substr($file,0,-5) . "<br>";
        $file2 = "dfh dufh udfy muzdfy.jpeg";
        echo str_replace(" ","-",$file2) . "<br>";
        echo str_replace(" ", "-", substr($file2,0,-5)) . "<br>"; // str_replace ( ce qu'on recherche ,  par quoi on le remplace , la variable concernée )
        
    ?>
</body>
</html>



<?php

?>