<?php

class Bdd
{

    private $bdd;

    function __construct()
    {

        $dsn = 'mysql:dbname=pizzajm;host=127.0.0.1:3308';
        $dbUser = 'root';
        $dbPwd = '';

        try {
            $this->bdd = new PDO($dsn, $dbUser, $dbPwd);
        } catch (PDOException $e) {

            echo $e->getMessage();
        }
    }

    function insertAvisClient($nom, $commentaire, $note)
    {
        $sql ="Insert into avisclient (Av_nom, Av_commentaire, Av_note) VALUES (:nom, :commentaire, :note) ";
        $re = $this->bdd->prepare($sql);
        $re->execute([":nom" => $nom, ":commentaire"=> $commentaire, ":note" => $note]);
    }


    function getNomsEntrepots()
    {

        $sql = "SELECT nom_entrepot FROM entrepots;";
        $rq = $this->bdd->prepare($sql);
        $rq->execute();
        return $rq->fetchAll();
    }

    function getProduits()
    {

        $sql = "SELECT fk_produit as id,
         concat(substr(nom_fournisseur,1,3),substr(nom_categorie,1,3), fk_produit) as reference, 
         nom_produit AS nom, 
         prix_ht_produit AS prixht,
         description_produit AS description, 
         categories.nom_categorie AS categorie, 
         marques.nom_marque AS marque ,
         stocks.*
         FROM produits 
         JOIN categories ON fk_categorie_produit= id_categories 
         JOIN marques ON fk_marque_produit = id_marques
         JOIN stocks  on fk_produit = id_produit 
         JOIN fournisseurs on fk_fournisseur_produit = id_fournisseurs;";
        $rq =  $this->bdd->prepare($sql);
        $rq->execute();
        return $rq->fetchAll();
    }

    function getVerifLogin($email, $mdp){

        $sql= "SELECT role_libelle
                FROM users
                JOIN roles ON idroles= fk_role
                WHERE email_user=:email and password_user=:mdp";
        $re = $this->bdd->prepare($sql);
        $re->execute([":email" => $email, ":mdp"=>$mdp]);
        return $re->fetch();

    }

    function getAvisClients()
    {
        $sql = "SELECT * FROM avisclient;";
        $rq = $this->bdd->prepare($sql);
        $rq->execute();
        return $rq->fetchAll();
    }

    function publishContactRequest($email, $message) {
        $sql = "INSERT INTO contact (Co_email, Co_message) VALUES (:email, :message);";
        $rq = $this->bdd->prepare($sql);
        $rq->execute([":email" => $email, ":message" => $message]);
    }

}