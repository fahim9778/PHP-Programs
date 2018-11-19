<?php
/**
 * Created by PhpStorm.
 * User: MD. Fakhruddin Gazzali
 * Date: 14-Nov-18
 * Time: 11:36 AM
 */
// complete code for index.php
// reporting error if any
error_reporting(E_ALL);
ini_set("display_errors", 1);

// main code
include_once "classes/page_data.class.php";
$pageData = new page_data(); // (new) declaring via custom class 'page_data' from classes folder.

//$pageData = new stdClass(); // (old) declaring a new anonymous class object
$pageData->title = "My Portfolio";  // setting title name;
$pageData->content = include_once "views/navigation.php"; // setting content to page_data() class object
$pageData->css = "<link href='css/layout.css' rel='stylesheet' />"; // CSS stylesheet added from css folder
//changes end here

// URL variable starts here
$navigationIsSet = $_GET['page'];   // Click to get page URL via variable 'page' in $_GET['page url'] superglobal array
if ($navigationIsSet)   // checking if a page has been clicked
    $fileToLoad = $_GET['page'];    //get the clicked page's URL value
else
    $fileToLoad = 'skills';     // default page view
$pageData->content .= include_once "views/$fileToLoad.php"; // concatenate URL in the content
//URL variable ends here

//new code below: dynamic style added below;
$pageData->embeddedCSS = "
<style>
nav a[href *= '?page=$fileToLoad']{
padding:3px;
background-color:white;
border-top-left-radius:3px;
border-top-right-radius:3px;
}
</style>";
echo "$pageData->embeddedCSS"; // now this works :D

$page = include_once "templates/page.php"; // linking pages
echo $page;

