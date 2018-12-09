<?php
/**
 * Created by PhpStorm.
 * User: MD. Fakhruddin Gazzali
 * Date: 22-Nov-18
 * Time: 7:07 PM
 */
// code for uploading images
$fileIsUploaded = isset($_GET['new-image']);    // check if file is uploaded via upload-form
if($fileIsUploaded)
    $output = upload();    // calling function 'upload'
else
    $output = include_once "views/upload-form.php";     // if not, then run to default
return $output;

//new function to control upload mechanism
function upload()
{
    $out = "<pre>print_r($_FILES, true)</pre>";

    return $out;
}