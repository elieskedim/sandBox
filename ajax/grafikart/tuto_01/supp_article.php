<?php
require_once"bdd.php";


if(isset($_GET['id'])){
    if($_GET['id'] == 1){
        die('OK');
    }else{
        die('not Ok');
    }
    $bdd->query('DELETE FROM articles WHERE id_article =' . $_GET['id'] . '');
    header("Location: index.php");
    exit();
}else{
    header("Location: index.php");
    exit();
}


?>