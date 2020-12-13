<?php
session_start();
include('ConnectBDD.php');
include('classUser.php');
if (isset($_POST['co'])) {

    $username = $_POST['username'];
    $mdp = $_POST['mdp'];
    if (!empty($username) and !empty($mdp)) {
        $coUser = new user($db,$username,$mdp); //le mot de passe est correct, on crée l'objet user
        $db = $coUser->Connexion($username,$mdp);
      
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


?>