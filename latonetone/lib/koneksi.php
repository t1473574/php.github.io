<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', 'tia56789');
    define('DB', 'latonetone');
    $conn = new mysqli(HOST,USER,PASS,DB);
    if ($conn){
       // echo "Connected to database";
    }else{
        echo "Not connected to database";
    }

?>