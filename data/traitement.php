<?php 
    session_start();

    $method = $_SERVER['REQUEST_METHOD'];
    $password = 12345;
    $username = 'letecode';


    if($method == "POST"){
        if(isset($_POST['username']) and isset($_POST['password'])) {
            if($_POST['username'] == $username and $_POST['password'] == $password) {
                echo "Vous êtes conncté";

                // creation de la session
                $_SESSION['username'] = $username;
                $_SESSION['password'] = md5($password);
                $_SESSION['connected'] = true;

                //creation de cookies
                setcookie('connected_user', $username, [
                    'expires' => time() + 365 * 24 * 3600,
                    //'secure' => true,
                    //'httponly' => true
                ]);


                header('Location: ../index.php');
            } else {
                echo 'You are not connected';
            }
        } else {
            echo "Entrez tout les champs";
        }
    }

    
?>