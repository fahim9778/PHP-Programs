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
    $pageData = new page_data();
    $pageData->title = "BMI calc with PHP";

    /*$navigationIsClicked = isset($_GET['page']);    // click to get page info into superglobal $_GET array as index
    if($navigationIsClicked)    // checking if a link' been clicked
        $fileToLoad = $_GET['page'];    // load the clicked link via 'page' attribute
    else*/
        $fileToLoad = "bmi-calc";
    $pageData->content = include_once "views/$fileToLoad.php";     // include the clicked link in the content

    $page = include_once "templates/page.php";      // adding main page template
    echo $page;     // displaying page
