<!DOCTYPE html>
<html lang="fr">
    <?php include '../Includes/head2.php'; ?>
    <body id="body" class="container background">
        <div class="col-xs-8 col-xs-offset-2 middle jumbotron">
            <h1 class="text-center">Inscription sur Poups !</h1>
            <h3>Il est temps de s'y mettre, allez Poupsons !</h3>
            <form action="add_inscription.php" method="post" class="well">
                <legend>Partie virtuelle : </legend>
                <label for="pseudo">Votre pseudonyme : </label>
                <input type="text" class="form-control" placeholder="BetaBoy" name="pseudo"  id="pseudo"/>
                <label for="mail" class="margin-top-form">Votre adresse e-mail :</label>
                <input type="email" name="email" id="email" placeholder="xyz@exeample.com" class="form-control"/>
                <label for="mdp" class="margin-top-form">Votre mot de passe :</label>
                <input type="password" name="pass" id="mdp" placeholder="Il est conseillé de ne pas utiliser le même mot de passe partout..." class="form-control"/>
                <label for="remdp" class="margin-top-form">Confirmez votre mot de passe :</label>
                <input type="password" name="repass" id="remdp" class="form-control" placeholder="Il est conseillé d'utiliser un mot de passe complexe comme : #Zxeb58e3E!"/>
                <label for="submit"></label>
                <legend>Partie réelle : </legend>
                <label for="nom">Votre nom : </label>
                <input type="text" class="form-control" placeholder="Mitsubishi" name="nom"  id="nom"/>
                <label for="prenom" class="margin-top-form">Votre prénom :</label>
                <input type="text" name="prenom" id="prenom" placeholder="Jagora" class="form-control"/>
                <label for="numprive" class="margin-top-form">Votre numéro privé :</label>
                <input type="tel" name="numprive" id="numprive" placeholder="07 85 46 29 10" class="form-control"/>
                <label for="adress" class="margin-top-form">Votre adresse :</label>
                <input type="text" name="adress" id="adress" placeholder="2A avenue des Platanes 65402 Paris" class="form-control"/>
                <label for="birth" class="margin-top-form">Indiquez votre date de naissance :</label>
                <input type="date" name="datebirth" id="birth" class="form-control"/>
                <label for="submit"></label>
                <input type="submit" class="form-control btn btn-success" name="submit" id="submit"/>
            </form>
            <p>Vu que ce site est uniquement, pour ma famille un tel formulaire paraît inadapté. Mais tout est utile !</p>
            <a href="../Secondaires/explainDATA.php">Explication de l'utilité et de l'utilisitaion des données</a>
        </div>
    </body>
    <?php include '../Includes/scripts2.php' ?>
</html>