<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions</title>
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
    <h1><?php echo "Les Conditions"; ?></h1>

    <?php
        $isPremium = false;
        $age = 20;

        if ($isPremium) {
            echo "<h2>Vous êtes Premium</h2>";
        } else {
            echo "<h2>Créer un compte Premium</h2><button>Cliquez pour créer un compte</button>";
        }

        switch ($age) {
            case 1 : 
                echo "1";
                break;
            case 2 : 
                echo "2";
                break;
            case 3 : 
                echo "3";
                break;
            case 4 : 
                echo "4";
                break;
            case 5 : 
                echo "5";
                break;
            default : 
                echo "default";
                break;

        }


    ?>
</body>
</html>



<?php

?>