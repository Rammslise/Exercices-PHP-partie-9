<?php
$month = date('m');
$year = date('Y');
if (isset($_POST['monthList']) && isset($_POST['yearList'])) {
    $month = $_POST['monthList'];
    $year = $_POST['yearList'];
}
$arrayMonths = array('', 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name= "viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <title>Les dates, exercice 8</title>
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
                    <div class="card-header">Partie 9 - TP</div>
                    <div class="card-body">
                        <h4 class="card-title">Consigne</h4>
                        <p class="card-text">Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année.</p>                  
                    </div>
                </div>
            </div>  
        </div>
        <div class="row justify-content-center">
            <form method="POST" action="index.php">
                <select name="monthList" id="monthList">                        
                    <?php
                    foreach ($arrayMonths as $indexDetail => $monthDetail) {
                        if ($indexDetail != 0) {
                            ?>
                            <option value="<?= $indexDetail ?>"><?= $monthDetail ?></option>
                            <?php
                        }
                    }
                    ?>
                </select>
                <select name="yearList" id="yearList">
                    <?php for ($y = 2019; $y >= 2010; $y--) { ?>
                        <option value="<?= $y ?>"> <?= $y ?></option>
                    <?php } ?>
                </select>
                <input class="btn btn-success p-0 mb-5" type="submit" value="Envoyer" />
            </form>
        </div>
        <div class ="row justify-content-center">
            <div class ="col-6 header">
                <div>
                    <img id="prev" src="assets/img/leftArrow.png" height="40px" width="40px" style="float:left;">
                    <img id="next" src="assets/img/rightArrow.png" height="40px" width="40px" style="float:right;">
                </div>
                <div id="content">        
                </div>
            </div>
        </div>

        <script src = "assets/js/jquery-3.4.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="assets/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
        <script src="assets/js/script.js"></script>     
        <script type="text/javascript">
            jQuery(function ($) {
                let month = <?= $month; ?>;
                let year = <?= $year; ?>;
                $(document).ready(function () {
                    $("#content").load("calendar.php?month=" + month + "&year=" + year + "");

                });

                $("#prev").click(function () {
                    month--;
                    if (month < 1) {

                        year--;
                        month = 12;
                    }
                    $("#content").load("calendar.php?month=" + month + "&year=" + year + "");
                });

                $("#next").click(function () {
                    month++;
                    if (month > 12) {

                        year++;
                        month = 1;
                    }

                    $("#content").load("calendar.php?month=" + month + "&year=" + year + "");
                });
            });
        </script>
    </body>
</html>