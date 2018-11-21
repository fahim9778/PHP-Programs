<?php
/**
 * Created by PhpStorm.
 * User: MD. Fakhruddin Gazzali
 * Date: 19-Nov-18
 * Time: 8:39 PM
 */
//checking for any error
error_reporting(E_ALL);
ini_set("Display Errors",1);
// start of main code
include_once "classes/page_data.class.php"; // including page_data class
$pageData = new page_data();    // creating new object of page_data()
$pageData->title = "HTML Forms with PHP";   // setting title
$pageData->content = include_once "views/navigation.php"; // setting content of navbar
$pageData->content .= "<div>... and a form here</div>";     // concatenating div for form

// Dynamic navigation starts here
$navigationIsClicked = isset($_GET['page']);    // click to get page info into superglobal $_GET array as index
if($navigationIsClicked)    // checking if a link' been clicked
    $fileToLoad = $_GET['page'];    // load the clicked link via 'page' attribute
else
    $fileToLoad = "search";     // default page to show (here's 'search')
$pageData->content .= include_once "views/$fileToLoad.php";     // include the clicked link in the content
// Dynamic navigation ends here
$page = include_once "templates/page.php";      // adding main page template
echo $page;     // displaying page