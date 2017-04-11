<?php
 error_reporting(1);
 ini_set('display_errors', 'On');
//@ob_start();

//error_reporting(E_ERROR | E_PARSE);

 
session_start();



define('SITE_ROOT',dirname(__FILE__) . '/');
define ('UPLOAD',SITE_ROOT.'upload/');
define ('PROFILES',SITE_ROOT.'profile/');
define('ADMIN_TITLE','Admin ::-:: ISPER ::-:: ');
define('ADMIN_HEADING','Welcome to Eon Access ');
 
define('WEB_ROOT','http://' . $_SERVER["HTTP_HOST"] .'/eonaligner/');
define ('UPLOADD',WEB_ROOT.'upload/');
define('ADMIN',SITE_ROOT.'admin/');
define ('PROFILEE',WEB_ROOT.'profile/');
 


$servername = "localhost";
$username = "root";
$password = "";
$dbname="testdb";

 
$conn = mysqli_connect($servername, $username,$password);
if (!$conn) {
    die('Could not connect: ' . mysqli_error());
}
//echo "connected";exit;
mysqli_select_db($conn,$dbname);



?>
