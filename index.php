    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Lecteur RFID</title>
        <link href="css/styles.css" rel="stylesheet" />
    </head>

    <body>
        <?php
        if (isset($_SESSION['username']) == true) {
        ?>
            <!-- Navigation-->

            <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
                <div class="container">
                    <a class="navbar-brand js-scroll-trigger" href="#page-top">Lecteur RFID</a>
                </div>
            </nav>

            <!--Page d'accueil-->
            <div class="masthead bg-primary text-white text-center">
                <div class="container d-flex align-items-center flex-column">
                    <!--Avatar Image-->
                    <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="" />
                    <!-- Récupération données de la carte-->
                    <h1 class="masthead-heading text-uppercase mb-0">Nom Prénom</h1>
                    <!-- Barres blanches divisées-->
                    <div class="divider-custom divider-light">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-line"></div>
                    </div>
                    <!-- Données de la carte sous les barres-->
                    <p class="masthead-subheading font-weight-light mb-0">Age</p>
                    <p class="masthead-subheading font-weight-light mb-0">Classe</p>
                </div>
            </div>
        <?php
        } else {
            include("404.html");
        }
        ?>
    </body>

    </html>