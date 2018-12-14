<?php

//Use this to connect to Progga's database so we do not need to type this in all files

        $host = 'localhost';
        $user = 'proggadeb';
        $pw = '';
        $database = 'proggadeb';

        $db = new mysqli($host, $user, $pw, $database);
        if ($db->connect_errno)
        {
                echo "Connect failed: ". $db->connect_error;
                exit();
        }
?>
