<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Formulaire</title>
    <style type="text/css">
        body {
            background-color: #f5f5f5;
            font-size: 20px;
            font-family: Arial, sans-serif;
            margin: 2em;
        }
        input {
            width: 250px;
            height: 40px;
        }
    </style>
</head>
<body>
    <h1>Les Formulaire</h1>

    <form method="post" action="form.php">
        <input type="text" name="nom" placeholder="nom">
        <input type="text" name="msg" placeholder="Message">
        <br><br>
        <input type="submit" name="valider">
    </form>
 
    <?php
    /*
    if ($_GET["nom"] != "") {
        echo "Bonjour " . $_GET["nom"];
    }
    */

?>
</body>
</html>