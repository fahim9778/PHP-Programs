<?php
/**
 * Created by PhpStorm.
 * User: MD. Fakhruddin Gazzali
 * Date: 22-Nov-18
 * Time: 7:09 PM
 */
// complete code for index.php
// reporting error if any
error_reporting(E_ALL);
ini_set("display_errors", 1);

// main code
include_once "classes/page_data.class.php";
$pageData = new page_data(); // (new) declaring via custom class 'page_data' from classes folder.

//$pageData = new stdClass(); // (old) declaring a new anonymous class object
$pageData->addCSS('css/layout.css');    // adding css for layout from 'css' folder
$pageData->addCSS('css/navigation.css'); //adding css for navigation from 'css' folder
$pageData->addCSS('css/img.css');   //adding css for image gallery from 'css' folder
$pageData->addScript('js/lightbox.js'); //adding Javascript from 'js' folder
$pageData->title = "Dynamic Image Gallery";  // setting title name;
$pageData->content = include_once "views/navigation.php"; // setting content to page_data() class object

//Getting user clicking info
$userClicked = isset($_GET['page']);
if($userClicked)
    $fileToLoad = $_GET['page']; // on-click a page get the page name
else
    $fileToLoad = "gallery";    // default page is gallery
$pageData->content .= include_once "views/$fileToLoad.php";     // concatenating & linking to the clicked file
$page = include_once "templates/page.php";      // load main page.
echo $page;



