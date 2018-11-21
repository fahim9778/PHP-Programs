<?php
/**
 * Created by PhpStorm.
 * User: MD. Fakhruddin Gazzali
 * Date: 21-Nov-18
 * Time: 11:30 AM
 */
// check for errors
error_reporting(E_ALL);
ini_set("display_errors",1);

// main code for bmi-calc
include_once "classes/page_data.class.php"; // including page_data class
$pageData = new page_data(); // declaring new object of page_data type
$pageData->title = "BMI calc with PHP";     // setting title
$pageData->content = include_once "views/bmi-calc.php"; // adding bmi-calc form

$page = include_once "templates/page.php";  // adding main page template
echo $page;     // displaying page
