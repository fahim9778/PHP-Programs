<?php
/**
 * Created by PhpStorm.
 * User: MD. Fakhruddin Gazzali
 * Date: 23-Dec-18
 * Time: 2:30 PM
 */
// complete for poll.class/index.php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );
//load model
include_once "models/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->title = "PHP/MySQL site poll example";
/* MySQL connectivity starts here */
// database credentials
$dbInfo = "mysql:host=localhost;dbname=playground";
$dbUser = "root";
$dbPassword = "";
// connecting the database
try{
    // trying to connect database by the above credentials
    $db = new PDO($dbInfo, $dbUser, $dbPassword);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$pageData->content .= "<h1>We're Connected</h1>";
}
catch (Exception $exception) // if the connection trial fails then load this
{
    $pageData->content .= "<h1>Connection failed!<p>$exception</p></h1>";
}
$pageData->content .= include_once "controllers/poll.php"; // to load poll.class controller
//load view so model data will be merged with the page template
$page = include_once "views/page.php";
//output generated page
echo $page;