<?php

$db_username = 'xxx';
$db_password = 'xxx';
$db_name     = 'xxx';
$db_host     = 'xxx';
// $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
    //    or die('could not connect to database');

    try {
        $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
        // $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connect > ok !"
    } catch (PDOEception $e) {
        echo $e;
    }
?>