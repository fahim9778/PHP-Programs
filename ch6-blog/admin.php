<?php
/**
 * Created by PhpStorm.
 * User: MD. Fakhruddin Gazzali
 * Date: 04-Jan-19
 * Time: 2:43 PM
 */

//complete code for blog/admin.php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );
include_once "models/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->title = "PHP/MySQL blog demo";
$pageData->addCSS("css/blog.css");
//$pageData->content = "<h1>YES!</h1>";
$pageData->content = include_once "views/admin/admin-nav.php";   //load navigation for admin
// connecting mysql database 'litblog'
$dbInfo = "mysql:host=localhost;dbname=litblog";
$dbUser = "root";
$dbPassword = "";
try{
    $db = new PDO($dbInfo, $dbUser, $dbPassword);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$pageData->content .= "<h1>Yes! We'are connected</h1>";
}
catch (Exception $exception)
{
    $pageData->content .= "<h1>Connection Failed!<p>$exception</p></h1>";
}

// check if any admin-nav is clicked
$navIsClicked = isset($_GET['page']);
if ($navIsClicked) //is clicked
{
    $controller = $_GET['page'];    //then, navigate to that controller
}
else
    $controller = 'entries';    //or, load a default controller
$pageData->content .= include_once "controllers/admin/$controller.php";
$page = include_once "views/page.php";
echo $page;