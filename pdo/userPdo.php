<?php
function checkLogin($login,$pwd){
    try{
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $response=$connection->query('SELECT COUNT(*) FROM user WHERE login=:login AND pwd=:pwd');
        $requete->bindValue(':login', $login, PDO::PARAM_STR);
        $requete->bindValue(':pwd', $pwd, PDO::PARAM_STR);;
        $connection=null;
    } catch (PDOException $e) {
        echo ('Echec lors de la connexion : user ou mdp incorrect') . $e->getMessage();
    }
}
?>

