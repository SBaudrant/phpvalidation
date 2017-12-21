<?php

$dir = opendir('.');

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
    <title>Accueil</title>
    <link href="https://fonts.googleapis.com/css?family=Vast+Shadow" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
</head>
<body id="snow">

<h1>Coucou, je suis l'index</h1>


<br>
<nav>
    <ul class="luniqueUl">
        <?php

        foreach ($pages as $page) {
            echo "<li>";
            echo "<a style='display: inline' href='/$page'>$page</a>";
            echo "</li>";
        }

        ?>
    </ul>
</nav>
<main>

<!--    <img src="https://www.eastcottvets.co.uk/uploads/Animals/gingerkitten.jpg" alt="a kitten">-->
</main>

</body>
</html>
