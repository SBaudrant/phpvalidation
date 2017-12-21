<?php

if( !isset($_COOKIE['loged']) || !($_COOKIE['loged']!="true"))  {
  header('Location: //192.168.33.10/login.php');
  exit();
}

if (isset($_POST['page'])) {
    unlink("../" . $_POST['page']);
}

$dir = opendir('..');

$pages = [];

while (($file = readdir($dir)) !== false) {
    if (strpos($file, '.html')) {
        array_push($pages, $file);
    }
}

closedir($dir);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List pages</title>
    <link href="https://fonts.googleapis.com/css?family=Vast+Shadow" rel="stylesheet">
    <link rel="stylesheet" href="/main.css">
</head>
<body>

<h1>Page list</h1>

<a href="/back/create.php">Create a page</a>

<br>
<ul class="lightrope">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
</ul>
<br>

<?php

foreach ($pages as $page) {
    echo "<div class='underTheGuirlande'>";
    echo "<a style='display: inline' href='/$page'>$page</a>";
    ?>
    <form method="post" style="display: inline">
        <input type="hidden" name="page" value="<?= $page ?>">
        <input type="submit" value="X">
    </form>
    <?php
    echo "</div>";
}

?>

</body>
</html>
