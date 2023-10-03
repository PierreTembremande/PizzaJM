<?php
require_once(dirname(__DIR__) . "/Model/Bdd.php");

$bdd= new Bdd();

if (isset($_POST['commentaire'])) {
  $sendAvisErr = false;
  $sendAvisMessage = "";

  if (empty($_POST['nom'])) {
    $sendAvisErr = "Vous devez rentrer un nom !";
  } else if (empty($_POST['note'])) {
    $sendAvisErr = "Vous devez rentrer une note !";
  }

  try {
    $sendAvis = $bdd->insertAvisClient($_POST['nom'], $_POST['commentaire'], $_POST['note']);
    $sendAvisMessage = "Votre avis a bien été envoyé, merci 🙂 !";
  } catch (\Throwable $th) {
    $sendAvisErr = "Une erreur est survenue lors de l'envoi de votre avis !";
  }
}

$avis=$bdd->getAvisClients();

require_once(dirname(__DIR__) . "/View/View_PageAccueil.php");

// $entrepots=$bdd->getNomsEntrepots();