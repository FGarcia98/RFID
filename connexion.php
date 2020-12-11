<?php
session_start();
include('ConnectBDD.php');
if (isset($_POST['co'])) {

    $username = $_POST['username'];
    $mdp = $_POST['mdp'];
    if (!empty($username) and !empty($mdp)) {
        $con = $db->prepare("SELECT * FROM user WHERE username = ? AND mdp = ?"); // Requête qui vérifie les informations de l'utilisateur lors de sa connexion
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
    }
}
?>





<head>
    <link href="css/styleCon.css" rel="stylesheet" />
    <meta charset="UTF-8">

</head>
<?php
if (!isset($_SESSION['username'])) {


?>

    <body>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <div id="contact_form">
            <div class="container">
                <div class="frame">
                    <div class="nav">
                        <ul class"links">
                            <li class="signin-active"><a class="btn">Sign in</a></li>
                        </ul>
                    </div>
                    <div>
                        <form class="form-signin" action="" method="POST" name="form">
                            <label>Username</label>
                            <input class="form-styling" type="text" name="username" placeholder="username" />
                            <label>Password</label>
                            <input class="form-styling" type="text" name="mdp" placeholder="password" />

                            <input type="submit" name="co">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>




<?php
} else {

    include("index.php");
}

if (isset($erreur)) {
    echo '<h1><font color="red" style="center">' . $erreur . '</font></h1>';
}
?>