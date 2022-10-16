<?php 
    require_once 'relation/config.php'; 
    
    if(!empty($_GET['id']))
    { 
        $id = intval($_GET['id']);
    
        $insert = $bdd->prepare('SELECT * FROM post WHERE post.post_id = :id');
        $insert->execute(array(
            ':id' => $id,
        ));
        $post = $insert->fetch();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/css/uikit.min.css" />

</head>
<body>
    <h1>Update</h1>

    <form action="relation/update_traitement.php?id=<?php echo $post['post_id'];?>" method="post">
        <div>
            <textarea  rows="7" cols="53" type="text" name="post" placeholder="Texte ...." required="required" autocomplete="off"><?= $post["post"]?></textarea>
        </div>
        <div">
            <button type="submit">Updater</button>
        </div>   
    </form>


    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit-icons.min.js"></script>

</body>
</html>