<?php
   define('HOST','localhost');
   define('USER', 'root');
   define('PASS', '');
   define('BASE', 'cadastro');

   $connection = new mysqli(HOST, USER, PASS, BASE);

   if ($connection->connect_error) {
    die($connection->connect_error);
   }