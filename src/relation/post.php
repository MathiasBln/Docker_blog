<?php 
    session_start();
    require_once 'config.php'; 

    if(!empty($_POST['post']))
    { 
        $check = $bdd->prepare('SELECT * FROM user WHERE token = ?');
        $check->execute(array($_SESSION['user']));
        $user = $check->fetch();
    
        $date = new DateTime();

        $insert = $bdd->prepare('INSERT INTO post(post, `date` ,userId) VALUES(:post, :date ,:userId)');
        $insert->execute(array(
            'post' => $_POST["post"],
            'date' => $date->format('Y/m/d'),
            'userId' => $user['id']
        ));
        header('Location:../blog.php');
        die();
    }