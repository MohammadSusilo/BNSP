<?php
    // $server = "localhost";
    // $user = "root";
    // $password = "";
    // $nama_database = "db_beasiswa";
    // $db = mysqli_connect($server, $user, $password, $nama_database);

    $db_host        = 'localhost';
    $db_user        = 'root';
    $db_pass        = '';
    $db_database    = 'db_beasiswa'; 
    $db_port        = '3307';
    $db = mysqli_connect($db_host,$db_user,$db_pass,$db_database,$db_port);

    if(!$db){
        die("Aplikasi tidak dapat terhubung dengan database: " .
        mysqli_connect_error());
    }
?>
