<?php 
   require('./includes/config.inc.php');
   $_SESSION['user_id'] = 1;
   $_SESSION['user_admin'] = true;
   require(MYSQL);
   include('includes/header.html'); 
?>

<h3>Welcome</h3>
<p class="lead">Welcome to knowledge is power, a site dedicated to keeping you up-to-date on the web security and programming information you need to know.</p>

<?php 
   include('includes/footer.html');
?>