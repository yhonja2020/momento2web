<?php
    if(isset($_GET['id'])){
        include_once('db_connection.php');
        $id = $_GET['id'];
    $sql = "DELETE FROM diary WHERE id = {$id}";
    $resul = $conn->query($sql);

    

    header("location: index.php");

    }


?>