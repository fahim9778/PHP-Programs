<?php
/**
 * Created by PhpStorm.
 * User: MD. Fakhruddin Gazzali
 * Date: 06-Dec-18
 * Time: 12:57 PM
 */
// Form to upload images
return "<h1>Upload New Images</h1>
<form method='post' action='index.php?page=upload' enctype='multipart/form-data'>
    <lebel>Find an image to upload</lebel>
    <input type='file' name='image-data' accept='image/jpeg, image/png, image/gif'>
    <input type='submit' name='new-image' value='Upload'>
</form>";
