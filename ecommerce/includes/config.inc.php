<?php 

//Define the $live and $contact_email variables
$live = false;
$contact_email = 'vemros7@gmail.com';

//Define the constants
define('BASE_URI', 'C:\xampp\htdocs\estudos\ecommerce\includes/');
define('BASE_URL', 'http://localhost/estudos/ecommerce/includes/');
define('MYSQL', BASE_URI . 'mysql.inc.php');

//start session
session_start();

//defining an error-handling function
function my_error_handler($e_number, $e_message, $e_file, $e_line){
    global $live, $contact_email;

    //creating a detailed error message
    $message = "An error occurred in script '$e_file' on line $e_line:\n$e_message\n";

    //Add the bracktrace information
    $message .="<pre>" .print_r(debug_backtrace(), true)."</pre>";
    /*$message .="<pre>" .print_r($e_vars, true) . "</pre>\n";*/

    //Show the error message in the browser if the site isn't live
    if(!$live){
        echo '<div class="error">'.nl2br($message).'</div>';
    }else{//if the site is live, send the error in an email
        error_log($message, 1, $contact_email, 'From: vemros7@gmail.com');

        //If the site is live, show a generic message, if the error isn't a notice
        if($e_number != E_NOTICE){
            echo '<div class="error">A system error occurred. We apologize for the inconvenience. </div>';
        }
    }//End of $live if-else
    return true;
}//End of my_error_handler() definition

//Apply the error handler
set_error_handler('my_error_handler');

if(!headers_sent()){
    function redirect_invalid_user($check='user_id', $destination='index.php', $protocol='http://'){
        if(!isset($_SESSION[$check])){
            $url = $protocol.BASE_URL.$destination;
            header("Location: $url");
            
            exit();
        }
    }
}else{
    include_once('./includes/header.html');
    trigger_error('You do not have permission to acess this page. Please login  and try again.');
    include_once('./includes/footer.html');
}