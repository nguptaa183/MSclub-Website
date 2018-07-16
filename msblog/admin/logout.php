<?php ob_start(); ?>
<?php session_start(); ?>

<?php


$_SESSION['username']= NULL;
$_SESSION['user_firstname']= NULL;
$_SESSION['user_lastname']= NULL;
$_SESSION['user_email']= NULL;
$_SESSION['user_role']= NULL;

header("Location: ../blog.php");



?>
