<?php 
    require_once 'config.php'; 

    if(!empty($_GET['id']))
    { 
        $id = intval($_GET['id']);
    
        $insert = $bdd->prepare('DELETE FROM post WHERE post.post_id = :id');
        $insert->execute(array(
            ':id' => $id,
        ));
        header('Location:../blog.php');
        die();
    }