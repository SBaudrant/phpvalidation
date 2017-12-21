<?php

$GLOBALS['inList'] = false;
$GLOBALS['blockDepth'] = 0;

function render_template($fileName, $title)
{
    $rendered = '<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css?family=Norican" rel="stylesheet">
<meta charset="UTF-8">
<title>' . $title . '</title>
<link rel="stylesheet" href="/main.css">
<link href="https://fonts.googleapis.com/css?family=Vast+Shadow" rel="stylesheet">
<style>
    div{padding: 5px 10px; border-radius: 5px}
    body{font-family: \'Norican\', cursive;background: url("https://www.eastcottvets.co.uk/uploads/Animals/gingerkitten.jpg") repeat}
</style>
</head>
<body>
<nav>
<a href="/">Accueil</a></nav>';
    $template = fopen($fileName, 'r');

    while (!feof($template)) {
        $line = fgets($template);

        $rendered .= interpretor($line);
    }

    if ($GLOBALS['inList']) {
        $rendered .= '</ul>';
        $GLOBALS['inList'];
    }

    if ($GLOBALS['blockDepth'] > 0) {
        for ($i = 0; $i < $GLOBALS['blockDepth']; $i++) {
            $rendered .= "</div>";
        }
    }

    $rendered .= '</body></html>';

    fclose($template);
    return $rendered;
}

function interpretor($line)
{
    $html = '';
    $regex = '/^(\S*)( , (.*))?$/';

    if (strlen($line) > 2) {
        $lineIdenity = substr($line, 0, 3);

        if ($GLOBALS['inList'] && $lineIdenity !== '-- ') {
            $html .= '</ul>';
            $GLOBALS['inList'] = false;
        }

        switch ($lineIdenity) {
            case '-- ':
                if (!$GLOBALS['inList']) {
                    $html .= '<ul>';
                    $GLOBALS['inList'] = true;
                }
                $html .= "<li>" . substr($line, 3) . "</li>";
                break;

            case '___';
                $html .= '<hr>';
                break;

            case 'bl ';
                preg_match($regex, trim(substr($line, 3)), $matches, PREG_OFFSET_CAPTURE, 0);

                if (count($matches) >= 3) { // if matches longer than 3 ==> we have a color
                    $html .= "<div style='background-color:" . $matches[1][0] . " ;color: " . $matches[3][0] . ";'>";
                } elseif (count($matches) >= 1) { // else we don't.
                    $html .= "<div style='background-color:" . $matches[1][0] . ";'>";
                } else {
                    $html .= "<div>";
                }

                $GLOBALS['blockDepth']++;
                break;

            case 'end';
                if ($GLOBALS['blockDepth'] > 0) {
                    $html .= '</div>';
                    $GLOBALS['blockDepth']--;
                }
                break;

            case 'i: ';
                preg_match($regex, trim(substr($line, 3)), $matches, PREG_OFFSET_CAPTURE, 0);
                if (count($matches) >= 3) {
                    $html .= "<img src='" . $matches[1][0] . "' alt='" . $matches[3][0] . "'>";
                } elseif (count($matches) >= 1) {
                    $html .= "<img src='" . $matches[1][0] . "' alt='" . $matches[1][0] . "'>";
                }
                break;

            case 'l: ';
                preg_match($regex, trim(substr($line, 3)), $matches, PREG_OFFSET_CAPTURE, 0);

                if (count($matches) >= 3) { // if matches longer than 3 ==> we have a text
                    $html .= "<a href='" . $matches[1][0] . "'>" . $matches[3][0] . "</a>";
                } else { // else we don't.
                    $html .= "<a href='" . $matches[1][0] . "'>" . $matches[1][0] . "</a>";
                }
                break;

            case '#1 ';
                $html .= "<h1>" . substr($line, 3) . "</h1>";
                break;

            case '#2 ';
                $html .= "<h2>" . substr($line, 3) . "</h2>";
                break;

            case '#3 ';
                $html .= "<h3>" . substr($line, 3) . "</h3>";
                break;

            case '#4 ';
                $html .= "<h4>" . substr($line, 3) . "</h4>";
                break;

            case '#5 ';
                $html .= "<h5>" . substr($line, 3) . "</h5>";
                break;

            case '#6 ';
                $html .= "<h6>" . substr($line, 3) . "</h6>";
                break;

            case 'ct ';
                $html .= "<p style='text-align: center'>" . substr($line, 3) . "</p>";
                break;

            default;
                $html .= "<p>$line</p>";

                break;
        }


    } else {
        $html .= "<br>";
    }
    return $html;
}