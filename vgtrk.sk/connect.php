<?php
    $db_host = "127.0.0.1";
    $db_login = "neonovvlad";
    $db_password = "Vgtrk125a125";
    $db_name = "neonovvlad";
    $db_port = "3308";
    $mysqli = new mysqli ($db_host, $db_login, $db_password, $db_name, $db_port);
    $query_set = "SET NAMES 'utf8'";
    $mysqli -> query($query_set);

    session_start();
    if(isset($_POST['out'])) {
        unset($_SESSION['id']);
        session_destroy();
    }
    if(isset($_POST['back'])) {
        header("location: adminpanel.php");
    }
?>