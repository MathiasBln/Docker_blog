<?php 
    try 
    {
        $engine = "mysql";

        $host = "db";

        $dbName = "tp_blog";

        $username = "root";

        $password = "root";

        $bdd = new PDO("$engine:host=$host;dbname=$dbName", $username, $password);;
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }