<?php
/**
 * Created by PhpStorm.
 * User: MD. Fakhruddin Gazzali
 * Date: 20-Nov-18
 * Time: 8:13 PM
 */
//complete code for associative array example
$my['name'] = "Gazzali";
$my['birthyear'] = 1997;
$my['height'] = "158.5cm";

$out = "<pre>"; // declaring "<pre>"formatted tag
$out .= print_r($my, true); // printing all the elements of $my array
$out .= "</pre>";

echo $out;