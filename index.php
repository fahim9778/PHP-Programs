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
$pageData = new stdClass(); // declaring a new anonymous class object
$pageData->title = "My Portfolio";
$pageData->content = include_once "views/navigation.php"; // setting content in pagedata object to navigations page inside views folder
//changes end here
$page = include_once "templates/page.php"; // linking pages
echo $page;

