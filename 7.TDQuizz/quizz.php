<?php

echo '<a href="index.php">Recommencer</a>';

$reponse1 = strip_tags($_POST['question1']);
$reponse2 = strip_tags($_POST['question2']);

$score = 0;
if($reponse1 == 2){
    $score++;
}

if($reponse2 == 12){
    $score++;
}

echo '<h2>'.$score.' / 2</h2>';



?>