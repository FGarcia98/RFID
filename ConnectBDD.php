<?php
    try
    {   // Connexion à la Base de données ;port=3306
        $db = new PDO('mysql:host=localhost;dbname=userRFID','root', '');
    }
    catch(exception $erreur)
    {   // Retourne ce message s'il y a une erreur lors de la connexion à la BDD
        echo "Erreur de connexion a la BDD";
    }  
?>