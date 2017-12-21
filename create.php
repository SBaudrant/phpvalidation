<?php

if( !isset($_COOKIE['loged']) || !($_COOKIE['loged']!="true"))  {
  header('Location: //192.168.33.10/login.php');
  exit();
}

$msg = '';

if (isset($_POST['title'])) {
    include_once ('../engine.php');
    file_put_contents("../" . $_POST['title'] . ".html", $_POST['content']);

    file_put_contents("../" . $_POST['title'] . ".html", render_template("../" . $_POST['title'] . ".html", $_POST['title']));

    $msg .= "Page " . $_POST['title'] . ".html created";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Pages</title>
    <link href="https://fonts.googleapis.com/css?family=Vast+Shadow" rel="stylesheet">
    <link rel="stylesheet" href="/main.css">
</head>
<body>

<h1>Page creation</h1>

<<<<<<< HEAD
<a href="/back/list.php">List / delete pages</a>
=======
<a href="/back/list.php">List/delete pages</a>
>>>>>>> b3ad9db1e7a668046912a06a1cf10ee5c71f5ecb

<p><?= $msg ?></p>

<form action="" method="post">
    <input type="text" name="title" placeholder="title">
    <textarea name="content" id="content" placeholder="Content (.template)" cols="50" rows="14"></textarea>
    <input type="submit">
</form>
<h1>Readme</h1>
<iframe src="/readme.html" width="100%" height="300px"></iframe>
</body>
</html>
