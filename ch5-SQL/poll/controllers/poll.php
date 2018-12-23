<?php
/**
 * Created by PhpStorm.
 * User: MD. Fakhruddin Gazzali
 * Date: 23-Dec-18
 * Time: 2:38 PM
 */
//complete code for poll.class.phpss.php
include_once "models/poll.class.php";   // getting class 'poll'
$poll = new poll();     // declaring new object of class of 'poll'
$pollData = $poll->getPollData();   //getting polldata
$polView = include_once "views/poll-html.php";      // getting and creating view of poll result from views folder
return $polView;