<?php 
    session_start();
    require_once 'config.php';

    if(!empty($_POST['username']) && !empty($_POST['password']))
    {
        $username = htmlspecialchars($_POST['username']); 
        $password = htmlspecialchars($_POST['password']);
        
        $username = strtolower($username);

        $check = $bdd->prepare('SELECT username, password, token FROM user WHERE username = ?');
        $check->execute(array($username));
        $data = $check->fetch();
        $row = $check->rowCount();
        
        if($row > 0)
        {
            if($password === $data['password'])
            {
                $_SESSION['user'] = $data['token'];
                header('Location: ../blog.php');
                die();
            }else{ header('Location: ../index.php?login_err=password'); die(); }
        }else{ header('Location: ../index.php?login_err=already'); die(); }
    }else{ header('Location: ../index.php'); die();}