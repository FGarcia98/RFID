<?php
include('ConnectBDD.php'); // On include le fichier contenant la connexion à la Base de données

class user
{
    private $_db;
    private $_username;
    private $_mdp;


    public function __construct($db,$mdp,$username)
    {
        $this->_db = $db;
        $this->_mdp = $mdp;
        $this->_username = $username;
    }
    public function Connexion($username, $mdp)
    {   // Permet à l'utilisateur de se connecter au site
        $con = $this->_db->prepare("SELECT * FROM user WHERE username = ? AND mdp = ?"); // Requête qui vérifie les informations de l'utilisateur lors de sa connexion
        $con->execute(array($username, $mdp));
        $userexist = $con->rowCount();

        if ($userexist == 1) {
            $userinfo = $con->fetch();
            $_SESSION['id_user'] = $userinfo['id_user'];
            $_SESSION['username'] = $userinfo['username'];
            $_SESSION['mdp'] = $userinfo['mdp'];
        } else if ($userexist == 0) {
            $erreur = "Mauvais mail ou mot de passe !";
        }
        if (isset($erreur)) {
            echo '<h1><font color="red" style="center">' . $erreur . '</font></h1>';
        }
    }
   
   
   
}
