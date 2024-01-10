<?php

require_once('Ad.php');
require_once('Vacancy.php');
require_once('Article.php');

$articleOne = new Article("Kilian rocks!", "Atleast that's what he thinks.", false);
$articleTwo = new Article("Kilian sucks!", "Sounds better!", true);

$ad = new Ad("Free Kilians for sale.", "If you need a slave, get one here!");

$vacancy = new Vacancy("Be a Kilian.", "Ever wanted to be your own Kilian ? Join the movement!");

$content = [$articleOne, $articleTwo, $ad, $vacancy];

foreach ($content as $item) {
    echo $item->showTitle();
    echo "<br>";
    echo $item->getText();
    echo "<br>";
}