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
<<<<<<< HEAD
=======
    <style>body{background: url("https://www.eastcottvets.co.uk/uploads/Animals/gingerkitten.jpg") repeat}</style>
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
>>>>>>> b3ad9db1e7a668046912a06a1cf10ee5c71f5ecb
    <link href="https://fonts.googleapis.com/css?family=Vast+Shadow" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
</head>
<body id="snow">

<h1>Coucou, je suis l'index</h1>

<<<<<<< HEAD

=======
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
>>>>>>> b3ad9db1e7a668046912a06a1cf10ee5c71f5ecb
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
