<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="w-50 m-auto mt-5">
            <?php 
                if(isset($_SESSION['connected']) and $_SESSION['connected'] == true) {
                    ?>
                    <div class="border">
                        <span class="p-2 m-3 text-success">Vous êtes connecté</span>
                        <h1>Bonjour, <?php echo $_SESSION['username']; ?></h1>

                        <h2>Bonjour <?php echo isset($_COOKIE['connected_user']) ? $_COOKIE['connected_user'] : "Null"; ?>, from cookie</h2>
                        <a href="logout.php">Déconnxion</a>
                    </div>
                    <?php
                } else {
                    ?>
                    <form action="data/traitement.php" method="POST">
                        <h1>Connexion</h1>
                        <input type="text" class="form-control mb-3" name="username" placeholder="Enter username">
                        <input type="password" class="form-control " name="password" placeholder="Password">
                        <button type="submit" class="btn btn-primary mt-2">Envoyer</button>
                    </form>
                    <?php
                }
            
                ?>
        </div>
    </div>
</body>
</html>