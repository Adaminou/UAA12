<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <title>Page d'accueil</title>
</head>
    <nav>
        <div class="blocMenu flexContainer justify-content-center">
            <div class=>
            <a href="index.php">Home</a>
            <a href="fonction.php">Fonction</a>
            <a href="#">Contact</a>
            </div>
        </div>
    </nav>
    </div>
    <div class=blocMain>
    <form method="post" action="index.php" class="flexContainer justify-content-center">
        <fieldset>
                <legend>Vos informations</legend>
                    <div>
                        <p> Nom </p>
                        <input type="text" id="nom" name="nom" placeholder="Nom">
                    </div>
                    <div>
                    <p> Prenom : </p>
                    <input  type="text" id="prenom" name="prenom" placeholder="Prénom">
                    </div>
                    <div>
                        <p> Email : </p>
                        <input type="email" id="email" name="email" placeholder="Email"> 
                    </div>
                    <div>
                        <p> Numero de téléphone: </p>
                        <input type="text" id="num" name="num" placeholder= "Numéro de téléphone"> 
                
                    </div>
        </fieldset>
        <fieldset>
                    <legend>Votre commande</legend>
                    <div>
                        <p> Choissisez parmi les possibilités </p>
                        <select id="possibilite">
                            <optgroup label="Hardware">
                                <option>Ecran</option>
                                <option>Souris</option>
                                <option>Clavier</option>
                                <option>RAM</option>
                                <option>Disque dur</option>
                            </optgroup>
                            <optgroup label="Software">
                                <option>Office 365</option>
                                <option>Packet Tracer</option>
                                <option>Google workspace</option>
                            </optgroup>
                        </select>
                    </div>
                    <div>
                        <p> La quantité souhaitées : </p>
                        <input type="number" id="qSouhaitee" name="qSouhaitee">
                    </div>
                    <div>
                        <p> Facture choisie </p>
                    <div>
                        <label for="mail"> Par mail </label>
                        <input type="checkbox" id="mail" name="mail"> 
                    </div>
                    <div>
                        <label for="papier"> Par papier  </label>
                        <input type="checkbox" id="papier" name="papier">
                    </div>
                    </div>
                    <div>
                        <p> Remarques supplémentaires </p>
                        <textarea name="message" rows="5" cols="30" placeholder= "votre message"> </textarea>
                    </div>
                    
                
        </fieldset>
    </form>
    </div>
<body>
    
</body>
</html>