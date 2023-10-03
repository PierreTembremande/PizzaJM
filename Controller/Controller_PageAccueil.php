<?php
require_once(dirname(__DIR__) . "/Model/Bdd.php");

$bdd= new Bdd();
$avis=$bdd->getAvisClients();

require_once(dirname(__DIR__) . "/View/View_PageAccueil.php");

// $entrepots=$bdd->getNomsEntrepots();