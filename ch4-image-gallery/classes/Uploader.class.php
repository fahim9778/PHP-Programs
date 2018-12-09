<?php
/**
 * Created by PhpStorm.
 * User: MD. Fakhruddin Gazzali
 * Date: 09-Dec-18
 * Time: 1:41 PM
 */

class Uploader
{
    private $fileName;
    private $fileData;
    private $destination;

    /**
     * Uploader constructor.
     * @param $key string : upload form's name attribute
     */
    public function __construct($key)
    {
        $this->fileName = $_FILES[$key]['name'];    // setting filename
        $this->fileData = $_FILES[$key]['tmp_name'];    // setting temporary file name
    }

    /**
     * function to set saving Directory to $destination
     * @param $folder string : where to save files
     */
    public function saveIn($folder)
    {
        $this->destination = $folder;
    }

    /**
     * function to set save that uploaded file
     * @return true on success to save file to that destination folder
     */
    public function save()
    {
        $folderIsWritable = is_writable($this->destination);    //checking if the destination directory writable
        if($folderIsWritable)
        {
            $saveTo = "$this->destination/$this->fileName";     // set saving directory
            move_uploaded_file($this->fileData, $saveTo);       // moving the uploaded file
            $sucess = true;
        }
        else    // if the directory lacks permission to write files
        {
            trigger_error("Cannot write to $this->destination");    // trigger an error
            $sucess = false;
        }
        return $sucess;
    }
}