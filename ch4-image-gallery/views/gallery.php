<?php
/**
 * Created by PhpStorm.
 * User: MD. Fakhruddin Gazzali
 * Date: 22-Nov-18
 * Time: 7:06 PM
 */
//full code to show gallery
return showImages(); //function to show image gallery

function showImages()
{
    $out = "<h1>Image Gallery</h1>
            <ul id='images'>";

    $folder = 'img';    // setting the folder name
    $filesInFolder = new DirectoryIterator($folder);    //Iterating through the 'img' directory
    while ($filesInFolder->valid())     // as long as there're valid files in the folder, continue iteration
    {
        $file = $filesInFolder->current();      //get the current file's all info
        $fileName = $file->getFilename();       //now, just get the current file name only.
        $src = "$folder/$file";

        /* get MIME type of the current file*/
        $fileInfo = new Finfo(FILEINFO_MIME_TYPE);      // return mime type ala mimetype extension
        $mimeType = $fileInfo->file($src);

        if($mimeType == 'image/jpeg' || $mimeType == 'image/png' || $mimeType == 'image/gif' || $mimeType == 'image/tiff')  // if the file is of possible one of these images
        {
            $out .= "<li><a href='$src' data-lightbox='mygallery' data-title='$fileName'><img src= '$src' ></a></li>";   // only then add it to the list with lightbox-data property
        }

        $filesInFolder->next();     // now move to the next file in the 'img' folder
    }

    $out .= "</ul>";
    return $out;
}


