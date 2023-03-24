<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/homepages.style.css" />
    <script src="/public/scripts/index.js" defer></script>
    <title>Document</title>
    </header>
<body>
    <header>
        <h1>docteurCat</h1>
        <?= isset($_SESSION['user']) ? "Bienvenue </strong>{$_SESSION['user']['pseudo']}</strong>" : '' ?>
        <nav>
            <ul>
              
                <a href="/accueil">accueil</a>  
             
                            <?php if (!isset($_SESSION['user'])) { ?>
                                <a href="/register">s'inscire</a>
                                <a href="/login" >se connecter</a>
                            <?php } else { ?> 
                                <li><a href="/forum">forum</a></li>
                                <a href="/modifmail">modifier mail</a>
                                <a href="/modifpassword">modifier password</a>
                                <a href="/modif">modifier pseudo</a>
                                <a href="/disconnect">déconnexion </a>
                                <a href="/supprimer">supprimer compte utilisateur </a>
                                <div id="infoUser">
                                <img src="/public/assets/image/import/<?= $_SESSION['user']['avatar'] ?>" alt="avatar de <?= $_SESSION['user']['pseudo'] ?>" style="max-width: 50px;"/>
                                <p ><?= $_SESSION['user']['pseudo'] ?></p>
                            </div>
                            <?php } ?> 
            </ul>
        </nav>
    </header>
    <section>
        <?= $content ?>
    </section>
     <!-- Scripts -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <footer>
        &copy; bouwsan
    </footer>
</body>
</html>