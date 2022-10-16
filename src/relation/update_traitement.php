<?php 
    require_once 'config.php'; 

    if(!empty($_POST['post']))
    { 
        $date = new DateTime();
        $id = intval($_GET['id']);

        $insert = $bdd->prepare('UPDATE post SET post = :post, date = :date WHERE post_id = :id');
        $insert->execute(array(
            'post' => $_POST["post"],
            'date' => $date->format('Y/m/d'),
            'id' => $id,
        ));
        header('Location:../blog.php');
        die();
    }