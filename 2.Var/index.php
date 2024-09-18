<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
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
    <h1><?php echo "Les Variables"; ?></h1>
    <?php
    $nom = "Anthony";
    $age = 30;
    $isPremium = TRUE;

    echo "<p>" . $nom . "</p>";
    echo "<p>" . $age . "</p>";
    echo "<p>Ton nom est $nom</p>";

    $age++;
    $age += 5;
    $age = $age + 4;

    echo "<p>Tu as $age ans</p>";

    $tab = [95, 10, 9, 12];
    var_dump($tab);

    $tab[4] = 16;
    var_dump($tab);

    array_push($tab, 21);
    var_dump($tab);

    array_pop($tab);
    var_dump($tab);

    $tab[2] = 30;

    echo $tab[1];

    sort($tab);
    var_dump($tab);

    echo count($tab);




    ?>

</body>

</html>