<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refugio Aviar</title>

    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <nav class="navegador_desktop">
        <ul class="list_nav_desktop">
            <li class="element_nav">
                <a href="index.php">
                    Areas
                </a>
            </li>

            <li class="element_nav">
                <a href="profecionales.php">
                    Equipo
                </a>
            </li>

            <li class="element_nav">
                <a href="aves.php">
                    Aves
                </a>
            </li>

            <?php if(!isset($_SESSION['profesional'])): ?>
                <li class="element_nav">
                    <a href="./login.php">
                        In
                    </a>
                </li>
            <?php else: ?>
                <li class="element_nav">
                    <a href="./logout.php">
                        Out
                    </a>
                </li>
            <?php endif ?>
        </ul>
    </nav>

    <div class="main">


