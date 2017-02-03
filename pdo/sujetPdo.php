<?php

function getAllSujet(){
    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $response=$connection->query('SELECT * FROM sujet');
        $lesSujets=$response->fetchAll();
        return $lesSujets;
        $connection=null;
        }
    catch (PDOException $e) {
        echo 'Échec lors de la récupération des sujets : ' . $e->getMessage();
    }
}

function createSujet($titre,$description){
    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('INSERT INTO sujet(titre, description,date_creation) VALUES(:titre,:description,:date_creation)');
        $requete->bindValue(':titre', $titre, PDO::PARAM_STR);
        $requete->bindValue(':description', $description, PDO::PARAM_STR);
        $requete->bindValue(':date_creation', date('Y-m-d'));
        $requete->execute();
        $connection=null;
        }
    catch (PDOException $e) {
        echo 'Échec lors de la création d un sujet : ' . $e->getMessage();
    }
}

function like($id){
    try{
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('update sujet set nb_interet=nb_interet+1 where id=:id') ;
        $requete->bindValue(':id', $id);
        $requete->execute();
        $connection=null;
        }
    catch (PDOException $e) {
        echo 'Échec lors de la création d un sujet : ' . $e->getMessage();
    }
}

function dislike($id){
    try{
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('update sujet set nb_signalement=nb_signalement+1 where id=:id') ;
        $requete->bindValue(':id', $id);
        $requete->execute();
        $connection=null;
        echo 'Merci de votre avertissement.L auteur du commentaire sera sanctionner après examen du texte';
        }
    catch (PDOException $e) {
        echo 'Échec lors de la création d un sujet : ' . $e->getMessage();
    }
}
