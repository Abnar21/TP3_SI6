<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>TP 3 SI6</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/starter-template.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">TP 3 SI6</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <!--
                Un lien devient actif avec la classe active sur la balise li correspondante
                Vous devez activer le bon lien
            -->
            <li><a href="index.php?action=forum">Forum</a></li>
            <li><a href="index.php?action=contact">Contact</a></li>
            <li><a href="index.php?action=admin">Admin</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
        
                    <?php
                    require 'resources/helper.php';
                    require 'pdo/sujetPdo.php';
                    include 'resources/config.php';
                     // test sur l'existance du paramètre action d'l'URL
                    if(isset($_GET["action"]))
                    {
                            // récupartion de l'action passée dans l'url
                            $action=$_GET["action"];
                            // test de la valeur de la variable
                            switch ($action) {
                                case "accueil":
                                    include 'public/accueil.php';
                                    break;
                                case "signal":
                                    dislike($_GET["id"]);
                                    sleep(5);
                                    include 'public/accueil.php';
                                    break;
                                case "update":
                                    include'public/update.php';
                                    break;
                                case "like":
                                    like($_GET["id"]);
                                    sleep(5);
                                    include 'public/accueil.php';
                                    break;
                                case "forum":
                                    /*try
                                    {
                                        $connection = new PDO('mysql:host=localhost;dbname=tp3_si6;charset=utf8', 'root', '');
                                        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                        $response=$connection->query('SELECT * FROM sujet');
                                        $lesSujets=$response->fetchAll();
                                        
                                        $connection=null;
                                        include 'public/forum.php';
		                    }
                                    catch (PDOException $e) {
                                    echo 'Échec lors de la récupération des sujets : ' . $e->getMessage();
                                    }
                                   */
                                    $lesSujets= getAllSujet();
                                    include 'public/forum.php';
                                    
                                    break;
                                case "contact":
                                    include 'public/contact.php';
                                    break;
                                case "admin":
                                    $lesSujets= getAllSujet();
                                    include 'public/admin.php';
                                    break;
                                case "create":
                                    include 'public/create.php';
                                    break;
                                case "createStore":
                                    try
                                    {
                                        /*$connection = new PDO('mysql:host=localhost;dbname=tp3_si6;charset=utf8', 'root', '');
                                        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                        $requete = $connection->prepare('INSERT INTO sujet(titre, auteur, description, date_creation) VALUES(:titre,:auteur,:description,:date_creation)');
                                        $requete->bindValue(':titre', $_POST["titre"], PDO::PARAM_STR);
                                        $requete->bindValue(':auteur, $_POST["auteur"], PDO::PARAM_STR);
                                        $requete->bindValue(':description', $_POST["description"], PDO::PARAM_STR);
                                        $requete->bindValue(':date_creation', date('Y-m-d'));
                                        $requete->execute();
                                        $connection=null;*/
                                     createSujet($_POST["titre"], $_POST["description"]);
		                    }
                                    catch (PDOException $e) {
                                    echo 'Échec lors de la récupération des sujets : ' . $e->getMessage();
                                    }
                                    header('Location: index.php?action=forum');  
                                    break;
                                default:
                                    include 'public/accueil.php';
                                    break;
                            }
                    }
                    else
                    {
                         include 'public/accueil.php';
                    }
                   ?>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-3.1.1.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

  </body>
</html>
