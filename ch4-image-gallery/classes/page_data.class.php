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

    //function to add css to specific pages
    public function addCSS($href)
    {
        $this->css .= "<link href=$href rel='stylesheet' />";
    }
}
