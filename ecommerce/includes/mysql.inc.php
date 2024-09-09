<?php 

   //Constants for acessing the database
   define('DB_USER', 'root');
   define('DB_PASSWORD', '');
   define('DB_HOST', 'localhost');
   define('DB_NAME', 'emmerce');

   //Connect to database
   $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

   //Establish the charset
   mysqli_set_charset($dbc, 'utf8');

   //Defining a function for making data safe to use in queries
   function escape_data($data){
    global $dbc;

    //Strip the estra slashes if magic quotes is on
    //if(get_magic_quotes_gpc()) $data = stripslashes($data);

    //return a trimmed, secure version of the data
    return mysqli_real_escape_string($dbc, trim($data));
   }//End escape_data() function