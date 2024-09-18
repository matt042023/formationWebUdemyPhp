<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucles</title>
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
    <h1><?php echo "Les Boucles"; ?></h1>

    <?php
        $isPremium = false;
        $age = 20;

        $tab = [8, 12, 9, 14, 26, 72];
        var_dump($tab);

        for($i=0 ; $i<count($tab) ; $i++) {
            $tab[$i]++;
            echo $i . "=" . $tab[$i] . "<br>";
        }
        
        foreach ($tab as $nb) {
            echo $nb . "<br>";
        }

        $cpt = 0;
        while ($cpt <=10 ) {
            $cpt++;
            echo "test <br>";
        }


    ?>
</body>
</html>



<?php

?>