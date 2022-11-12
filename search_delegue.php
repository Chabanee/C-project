<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/62db0d33ce.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style_search_delegue.css">
    <link rel="shortcut icon" href="Imgs/Logo_site/CESiiTonStage2.png" type="images/png"/>
    <script src="jquery-3.6.0.min_SOMA.js"></script>
    <script src="script_search_delegue.js"></script>
    <title>Page de recherche d'un delegue</title>
</head>
<body>

    <?php

        require_once 'database.php';

        $search=$bdd->query('SELECT * FROM delegue');

        $row = $search->rowCount();

        $name_delegue = $_GET["name_delegue"];
        $surname_delegue = $_GET["surname_delegue"];
        $center_delegue = $_GET["center_delegue"];
         
        if(isset($name_delegue) && isset($surname_delegue) && isset($center_delegue)) {
            if(!empty($name_delegue) && !empty($surname_delegue) && !empty($center_delegue)) {
                $name_delegue = htmlspecialchars($name_delegue);
                $surname_delegue = htmlspecialchars($surname_delegue);
                $center_delegue = htmlspecialchars($center_delegue);
                         
                $search = $bdd->query('SELECT * FROM delegue WHERE nom_delegue LIKE "%'.$name_delegue.'%" AND prenom_delegue LIKE "%'.$surname_delegue.'%" AND centre_delegue LIKE "%'.$center_delegue.'%"');
            } else {
                echo 'Veuillez remplir tous les champs';
            }
        } else {
            // echo 'Veuillez remplir tous les champs';
        }
    ?>

    <header>

    <div id="icons">
        <img src="Imgs/Logo_site/CESiTonStage.png" alt="Logo du site web CESiTonStage" id="logo">


        <div id="symbols">
            <i class="fa-solid fa-heart"></i>
            <i class="fa-solid fa-envelope" id="msg_icon"></i>
            <i class="fa-solid fa-user"></i>
            <i class="fa-solid fa-arrow-right-from-bracket" id="deco_icon"></i>
        </div>
    </div> 

    <div id="ligne1">
        <hr>
    </div>

    <div id="bar_inside">

        <i class="fa-solid fa-house" id="home"></i>    
    
        <p id="stage">Stage</p>

        <p id="alternance">Alternance</p>

    </div>

    <div id="ligne2">
        <hr>
    </div>

    </header>

    <article>

        <section id="start">
            <h1 id="welcome">Bienvenue sur l'espace de recherche d'un délégué !</h1>

            <div id="welcome_words">
                <p>Cet espace vous permet de rechercher les différents délégués enregistrés jusqu'ici.
                </p>
                <p> Pour ce faire, il vous suffit de taper le <strong>nom</strong>, le <strong>prénom</strong> et le <strong>centre</strong> du 
                    délégué concerné pour voir ces informations s'afficher sur la page.
                </p>
            </div>
        </section>

        <!-- action="search_traitement_delegue.php" -->
        <section id="global_search_bar">
            <form method="get">
                <input type="text" name="name_delegue" id="naame_delegue" placeholder="Nom du délégué...">
                <input type="text" name="surname_delegue" id="surnaame_delegue" placeholder="Prénom du délégué">
                <input type="text" name="center_delegue" id="ceenter_delegue" placeholder="Centre du délégué...">
                <button type="submit">Rechercher</button>
            </form>
        </section>

        <section id="informations">
            <?php

                if($row == 1) {

                } else {
                    echo 'Aucun utilisateur trouvé !';
                }

                while($data = $search->fetch()) {
                    $id_delegue = $data['id_delegue'];
                    $nom_delegue = $data['nom_delegue'];
                    $prenom_delegue = $data['prenom_delegue'];
                    $centre_delegue = $data['centre_delegue'];
                    $permissions = $data['permissions_delegue'];
                        
                    // echo $id_delegue."<br/>";
                    // echo $nom_delegue."<br/>";
                    // echo $prenom_delegue."<br/>";
                    // echo $centre_delegue."<br/>";
                    // echo $permissions."<br/>";
                    ?>
                    <p> id = <?=$id_delegue."<br/>"." ".$nom_delegue." ".$prenom_delegue." "."<br/>".$centre_delegue." | ".$permissions."<br/>";?></p> 
                    <?php
                }
            ?>
        </section>

    </article>

    <footer>

        <p>2022 &copy; Tous droits réservés.</p>
        <a href="https://www.cesi.fr/mentions-legales/">Mentions légales</a>

    </footer>

</body>
</html>




