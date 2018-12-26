<?php
/**
 * Created by PhpStorm.
 * User: MD. Fakhruddin Gazzali
 * Date: 23-Dec-18
 * Time: 2:38 PM
 */
//complete code for poll.class.phpss.php
include_once "models/poll.class.php";   // getting class 'poll'
$poll = new poll($db);     // declaring new object of class of 'poll'; pass PDO object as argument
$isPollSubmitted =  isset($_POST['user-input']);    //check if the form was submitted
if ($isPollSubmitted)   //if the form is just submitted
{
    $input = $_POST['user-input'];  //take the casted vote
    $poll->updatePoll($input);  //and update the result
}
$pollData = $poll->getPollData();   //getting polldata
$pollAsHTML = include_once "views/poll-html.php";   // getting and creating view of poll result from views folder
return $pollAsHTML;