<?php
include('ConnectBDD.php'); // On include le fichier contenant la connexion à la Base de données

class user
{
    private $_db;
    private $_login;
    private $_password;


    public function __construct($db)
    {
        $this->_db = $db;
    }
    public function Connexion($login, $password)
    {   // Permet à l'utilisateur de se connecter au site
        $con = $this->_db->prepare("SELECT * FROM user WHERE username = $login AND mdp = $password"); // Requête qui vérifie les informations de l'utilisateur lors de sa connexion
        $con->execute([$login, $password]);
        $con = $con->fetch();
        // on envoi les informations de la requête dans les variables de la classe pour le traitement
        $this->_id = $con['id_user'];
        $this->_login = $con['username'];
        $this->_password = $con['mdp'];
    }
    public function compare($login, $password)
    {   // Retourne true si le Login et le Mot de passe sont correct sinon retourne false

        if ($login == $this->_login) {

            if ($password == $this->_password) {

                return true;
            }
        }
        return false;
    }
    public function getId()
    {
        return $this->_id;
    }
    public function getLogin()
    {
        return $this->_login;
    }

    public function getPassword()
    {
        return $this->_password;
    }
}
