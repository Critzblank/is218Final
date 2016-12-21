<?php
ob_start();
session_start();

//set timezone
date_default_timezone_set('Europe/London');

//database credentials
define('DBHOST','sql2.njit.edu'); 
define('DBUSER','jc675'); 
define('DBPASS','Wu4OCSwRp'); 
define('DBNAME','jc675'); 

//application address
define('DIR','https://web.njit.edu/~jc675/is218/Final/');
define('SITEEMAIL','jc675@njit.edu');

try {

	//create PDO connection
	$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

//include the user class, pass in the database connection
include('classes/user.php');
include('classes/phpmailer/mail.php');
$user = new User($db);
?>
