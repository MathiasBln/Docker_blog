<?php 
    require_once 'config.php'; 

    if(!empty($_POST['username']) && !empty($_POST['password']))
    {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        $check = $bdd->prepare('SELECT username, password FROM user WHERE username = ?');
        $check->execute(array($username));
        $data = $check->fetch();
        $row = $check->rowCount();
        
        if($row == 0){             
            $insert = $bdd->prepare('INSERT INTO user(username, password, token) VALUES(:username, :password, :token)');
            $insert->execute(array(
                'username' => $username,
                'password' => $password,
                'token' => bin2hex(openssl_random_pseudo_bytes(64))
            ));
            header('Location:../index.php');
            die();
        }else{ header('Location: ../inscription.php?reg_err=already'); die();}
    }