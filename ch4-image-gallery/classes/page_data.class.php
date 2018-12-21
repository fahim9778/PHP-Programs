<?php
/**
 * Created by PhpStorm.
 * User: MD. Fakhruddin Gazzali
 * Date: 18-Nov-18
 * Time: 9:06 PM
 */
class page_data{
    public $title = "";
    public $content = "";
    public $css = "";
    public $embeddedCSS = "";
    public $scriptElements = "";
    public $footer = "<div id='footer'><center>©2018 testPHPme. Some rights reserved</center></div>";

    //function to add css to specific pages
    public function addCSS($href)
    {
        $this->css .= "<link href=$href rel='stylesheet' />";
    }

    /**
     * function to add JS scripts in HTML pages
     * @param $src string : where the JS source is kept
     */
    public function addScript($src)
    {
        $this->scriptElements .= "<script src ='$src'></script>";
    }
}
