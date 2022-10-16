<?php
    session_start();
    require_once 'relation/config.php';

    if(!isset($_SESSION['user']))
        header('Location:index.php');
    
    $check = $bdd->prepare('SELECT * FROM user WHERE token = ?');
    $check->execute(array($_SESSION['user']));
    $data = $check->fetch();

    $check = $bdd->prepare('SELECT * FROM post p INNER JOIN user u WHERE p.userId = u.id ORDER BY `date` DESC');
    $check->execute();
    $posts = $check->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/css/uikit.min.css" />

    <title>Blog</title>
</head>
<body>
    <h1>Bonjour ! <?php echo $data['username']?> </h1>
    <a href="relation/logout.php">Logout</a>

    <form action="relation/post.php" method="post">
        <div class="uk-margin">
            <textarea rows="7" cols="53" type="text" name="post" placeholder="Texte ...." required="required" autocomplete="off"></textarea>
        </div>
        <div class="uk-margin">
            <button type="submit" class="uk-button uk-button-primary">Poster</button>
        </div>   
    </form>

    <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>

    <?php foreach($posts as $post):?>
        <div class="uk-card uk-card-default uk-card-body ">
            <h3 class="uk-card-title"><?= $post["username"] ?></h3>
            <p><?= $post["post"] ?></p>
            <?php if($post["userId"] === $data['id']):?>
                <a href="update.php?id=<?php echo $post['post_id'];?>">Modifier</a>
                <a class="uk-form-danger" href="relation/delete.php?id=<?php echo $post['post_id'];?>">Supprimer</a>
            <?php endif?>

        </div>
    <?php endforeach; ?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit-icons.min.js"></script>

</body>
</html>