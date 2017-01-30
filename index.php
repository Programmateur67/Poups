<!DOCTYPE html>
<html lang="fr">
    <?php include 'Includes/head.php'; ?>
    <body class="container background">
        <div class="col-xs-8 col-xs-offset-2 middle jumbotron">
            <h1 class="text-center">Bienvenue sur Poups !</h1>
            <h3>Est-ce que vous avez idée de ce qu'est que Poupser ?<br/> Non, Mais vous n'allez pas tarder...</h3>
            <form class="well">
                <legend>Pour commencer veuillez vous connecter :</legend>
                <label for="mail">Votre e-mail </label>:
                <input type="email" class="form-control" placeholder="xyz@exeample.com" name="mail"  id="mail"/>
                <label for="pass" class="margin-top-form">Mot de passe : </label>
                <input type="password" class="form-control" placeholder="Il doit être tenu secret" name="pass" id="pass"/>
                <input type="checkbox" name="stayconnected" id="stayconnected" class="margin-top-form"/>
                <label for="stayconnected" class="margin-top-form">Rester connecté</label>
                <label for="submit"></label>
                <input type="submit" class="form-control btn btn-success" name="submit" id="submit"/>
            </form>
            <p class="text-center">Pas encore inscrit ? Il ne manquait plus que ça !</p>
            <a href="Gestions/inscription.php" class="btn form-control btn-warning">Inscription</a>
        </div>
    </body>
    <?php include 'Includes/scripts.php' ?>
</html>