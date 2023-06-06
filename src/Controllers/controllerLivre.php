<?php

require_once '../Models/data.php';

$livre = new Livre(1, "Harry Pother", "J.K Rowling", "science fiction", "02/11/2022");

$id = $livre->getId();
$titre = $livre->getTitre();
$acteur = $livre->getAuteur();
$genre = $livre->getGenre();
$date = $livre->getDate();

echo "Le livre " . $titre . " est un livre " . $genre . " écris par $acteur " . "le " . $date . "<br><br>";
