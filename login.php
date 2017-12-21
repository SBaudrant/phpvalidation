<?php

if(isset($_POST["answer"] && trim($_POST["answer"])!="" && isset($_POST["keyQstn"] && isset($_POST["keySubject"] ){
  if($_POST["answer"] == $answerList[$_POST["keySubject"]][$_POST["keyQstn"]]){
    echo "connecté";
  }
}

$questionList = array( "inconnus" => array("Avec télémagouille on ...","Stéphanie de ...","Cela ne nous ...") );
$answerList = array("inconnus"=> array("s'en met plein les fouilles","Monaco","regarde pas"));



$keySubject = array_rand($questionList);
$keyQstn = array_rand($questionList[$keySubject]);
$qstn = $questionList[$keySubject][$keyQstn];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN</title>
    <link href="https://fonts.googleapis.com/css?family=Vast+Shadow" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="login-page">
    <div class="form">
      <form class="login-form" method='post'>
        <p>Indice : <?=$keySubject ?></p>
        <p> <?=$qstn ?></p>
        <input type="text" name="answer" placeholder="Réponse"/>
        <input type="hidden" name="keyQstn" value="<?=$keyQstn?>">
        <input type="hidden" name="keySubject" value="<?=$keySubject?>">
        <button>login</button>
      </form>
    </div>
  </div>
</body>
