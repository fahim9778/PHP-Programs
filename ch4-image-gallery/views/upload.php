<?php
/**
 * Created by PhpStorm.
 * User: MD. Fakhruddin Gazzali
 * Date: 22-Nov-18
 * Time: 7:07 PM
 */
// code for uploading images
include_once "classes/Uploader.class.php";
$fileIsUploaded = isset($_POST['new-image']);    // check if file is uploaded via upload-form
if($fileIsUploaded)
    $output = upload();    // calling function 'upload'
else
    $output = include_once "views/upload-form.php";     // if not, then run to default
return $output;

//new function to control upload mechanism
function upload()
{
    $uploader = new Uploader("image-data");     // creating new Uploader class' object
    $uploader->saveIn("img");   // setting 'img' as the folder name
    $fileUploaded = $uploader->save();  // attempting to save
    if($fileUploaded)
    {
        $out = "<h1>File Uploaded successfully</h1>";
    }
    else
        $out = "<h1>Something went wrong</h1>";
    return $out;
}