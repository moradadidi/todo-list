<?php
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=todo','root','moradadidicapo');
    }
    catch (PDOException $e){
        echo "<p>Ereur: ".$e->getMessage();
        die();
    }
?>