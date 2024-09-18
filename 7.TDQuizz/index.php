<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TD QUIZZ</title>
</head>
<body>
    <h1>TD QUIZZ</h1>

    <form method="post" action="quizz.php">
        <p>1 + 1 = ?</p>
        <input type="radio" id="1" name="question1" value="1"/><label for="1">1</label>
        <input type="radio" id="2" name="question1" value="2"/><label for="2">2</label>
        <input type="radio" id="3" name="question1" value="3"/><label for="3">3</label>
        <hr>
        <p>6 * 2 = ?</p>
        <input type="radio" id="12" name="question2" value="12"/><label for="12">12</label>
        <input type="radio" id="22" name="question2" value="22"/><label for="22">22</label>
        <input type="radio" id="32" name="question2" value="32"/><label for="32">32</label>
        <hr>
        <input type="submit" name="Valider" >
</form>
    
</body>
</html>