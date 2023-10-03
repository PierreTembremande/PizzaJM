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
        $sql = "Insert into avisclient (Av_nom, Av_commentaire, Av_note) VALUES (:nom, :commentaire, :note) ";
        $re = $this->bdd->prepare($sql);
        $re->execute([":nom" => $nom, ":commentaire" => $commentaire, ":note" => $note]);
    }

    function getAvisClients()
    {
        $sql = "SELECT * FROM avisclient;";
        $rq = $this->bdd->prepare($sql);
        $rq->execute();
        return $rq->fetchAll();
    }

    function publishContactRequest($email, $message)
    {
        $sql = "INSERT INTO contact (Co_email, Co_message) VALUES (:email, :message);";
        $rq = $this->bdd->prepare($sql);
        $rq->execute([":email" => $email, ":message" => $message]);
    }
}
