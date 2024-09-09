
<?php 
   require("includes/config.inc.php");
   require(MYSQL);
   require_once('./includes/form_functions.inc.php');
   $page_title = 'Register';
?>

<h3>Register</h3>
<form action="register.php" method="post" accept-charset="utf-8">
    <?php 
       create_form_input('first_name', 'text', 'First Name', $reg_errors);
       create_form_input('last_name', 'text', 'Last Name', $reg_errors);
       create_form_input('username', 'text', 'Desired Username', $reg_errors);
       echo '<span class="help-block"> Only letters and numbers are allowed.</span>';

       create_form_input('email', 'email', 'Email Address', $reg_errors);
       create_form_input('pass1', 'password', 'Password', $reg_errors);
       echo '<span class="help-block"> Must be at least 6 characters long, with at last one lowercase letter, one Uppercase  letter,  and one number.</span>';

       create_form_input('pass2', 'password', 'Confirm Password', $reg_errors);
    ?>
    <input type="submit" name="submit-button" value="Next &rarr;" id="submit-button" class="btn-default"/>
</form>