<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name= "viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <title>Les dates, exercice 6</title>
    </head>   
    <body>  
        <!--Le header de mon site -->
        <header>
            <div class="row">                
                <div class="col-3">
                    <img src="assets/img/totoro.jpeg" class="img-fluid. max-width: 100%; height: auto;" alt="totoro" /> 
                </div>
                <div class="col-6">
                    <blockquote class="blockquote text-center">
                        <p class="p-4 mb-0">“Comme ils sont étranges ces jours où la joie de vivre est programmée dans les calendriers.”</p>
                        <footer class="blockquote-footer">...Mon Calendrier PHP...</footer>
                    </blockquote>
                </div>
                <div class="col-3">
                    <img src="assets/img/phpLogo.png" class="img-fluid. max-width: 100%; height: auto;" alt="phpLogo"/>
                </div>
            </div>
        </header>
        <!--Ici j'inclus un "fil d'ariane" afin de naviguer entre les différents exercices -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Php Partie 9 - Les dates</li>
            <li class="breadcrumb-item active"><a href="../exercice1/index.php">Ex.1</a></li>
            <li class="breadcrumb-item active"><a href="../exercice2/index.php">Ex.2</a></li>
            <li class="breadcrumb-item active"><a href="../exercice3/index.php">Ex.3</a></li>
            <li class="breadcrumb-item active"><a href="../exercice4/index.php">Ex.4</a></li>
            <li class="breadcrumb-item active"><a href="../exercice5/index.php">Ex.5</a></li>
            <li class="breadcrumb-item active"><a href="../exercice6/index.php">Ex.6</a></li>
            <li class="breadcrumb-item active"><a href="../exercice7/index.php">Ex.7</a></li>
            <li class="breadcrumb-item active"><a href="../exercice8/index.php">Ex.8</a></li>
            <li class="breadcrumb-item active"><a href="../TP/index.php">TP</a></li>
        </ol>
        <div class="row justify-content-center">
            <div class="col-3">
                <div class="card border-primary mb-3" style="max-width: 20rem;">
                    <div class="card-header">Partie 9 - Exercice 6</div>
                    <div class="card-body">
                        <h4 class="card-title">Consigne</h4>
                        <p class="card-text">Afficher le nombre de jour dans le mois de février de l'année 2016.</p>                  
                    </div>
                </div>
            </div>  
        </div>
        <div class="row justify-content-center">
            <div class="col-3">
                <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
                    <div class="card-header">Partie 9 - Exercice 6</div>
                    <div class="card-body">
                        <h4 class="card-title">Réponse</h4>
                        <p class="card-text">
                            <?php
                            //cal_days_in_month — Retourne le nombre de jours dans un mois, pour une année et un calendrier donné, ici le calendrier grégorien, le mois, l'année.
                            $febDays = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
                            //on détermine la langue d'affichage de la variable.
                            setlocale(LC_TIME, 'fr_FR.utf8');
                            echo 'Il y a eu ' . $febDays . ' jours en février 2016.';
                            ?>
                        </p>
                        <!--Seconde façon de faire (en php) :
                        //'t' récupère le nombre de jours dans le mois qu'on renseigne dans mktime.
                        $days_number = date('t', mktime(0,0,0,2,1,2016));
                        echo $days_number;
                        -->
                    </div>
                </div>
            </div>
        </div>
        <script src = "assets/js/jquery-3.4.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="assets/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
        <script src="assets/js/script.js"></script>            
    </body>
</html>