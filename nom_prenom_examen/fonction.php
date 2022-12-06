<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Fonction</title>
</head>
<body>
<!--Traitement-->

    <?php
        # ne marche pas aussi apparement :/
        function diviseurs($diviseurs, $nb){
            $i = 1;
            $diviseurs = "";
            while ($i <= $nb){
                if ($nb % $i = 0){
                    $diviseurs = $diviseurs . $i . " ";
                }
                    $i = $i . 1;
            }
        }

        /*
            Il y a une erreur d'accolade mais je ne comprend pas c'est laquelle

            function triangle($C1, $C2, $C3){

            if ($C1 >= $C2) && ($C1 >= $C3){
                $Pg = $C1;
                $Cote2 = $C2;
                $Cote3 = $C3;
            }
        
            elseif ($C2 >= $C1)&&($C2  >= $C3){
            
                $Pg = $C2;
                $Cote2 = $C1;
                $Cote3 = $C3;
        
            }
            else {
                $Pg = $C3;
                $Cote2 = $C1;
                $Cote3 = $C2;
            }
            if ($Pg<$Cote2 . $Cote3) {
                if ($Pg^2 = $Cote2^2 . $Cote3^2) {
                }
                elseif ($Cote2 = $Cote3) {
                    $Message = "Triangle rectangle isocèle";
                }
                else {
                    $Message ="Triangle rectangle";
                }

            }
            
            else {
                $Message = "Ces dimensions ne peuvent être celles d'un triangle";
                }
            
            }
        */
    
    




    ?>

<!--Affichage-->
</body>
        <p> Le nombre <?= $nb = 725 ?> a <?= diviseurs($diviseurs, $nb) ?> comme diviseurs </p>
</html>