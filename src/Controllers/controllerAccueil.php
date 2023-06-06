<?php

require_once '../Models/data.php';

function informationLivre($id0, $titre0, $auteur0, $genre0, $date0)
{

    $livre = new Livre($id0, $titre0, $auteur0, $genre0, $date0);

    $id = $livre->getId();
    $titre = $livre->getTitre();
    $acteur = $livre->getAuteur();
    $genre = $livre->getGenre();
    $date = $livre->getDate();

    echo "<ul><li>Le livre " . $titre . " est un livre " . $genre . " écris par $acteur " . "le " . $date . "</li></ul><br><br>";
}

informationLivre(1, "Olissone-production", "David Alexandre", "Comédie", "23/05/2001");
informationLivre(2, "Clip de rap", "Thérèse Dune", "Musique", "06/12/2014");
informationLivre(3, "Rageux", "Fabien Fattore", "action", "30/01/2023");
informationLivre(4, "Clo ", "Fabien Fattore", "Comédie", "23/05/2001");
informationLivre(5, "tu es tilté boubou", "Sardoche", "Comédie", "23/05/2001");
