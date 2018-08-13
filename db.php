<?php

    ob_start();
    session_start();

   $servername = 'localhost';
   $username = 'root';
   $password = '';
   $databasename = 'kewal_acb-car';

    // $servername = 'localhost';
    // $username = 'kewal1';
    // $password = 'emy5y8yzy';
    // $databasename = 'kewal_acb-car';


    $connection = new mysqli($servername, $username, $password, $databasename);

    if($connection->connect_error) {
        die('Error');
    }


