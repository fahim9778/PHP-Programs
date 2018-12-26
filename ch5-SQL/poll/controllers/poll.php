<?php
/**
 * Created by PhpStorm.
 * User: MD. Fakhruddin Gazzali
 * Date: 23-Dec-18
 * Time: 2:38 PM
 */
//complete code for poll.class.php.php
include_once "models/poll.class.php";   // getting class 'poll'
$poll = new poll($db);     // declaring new object of class of 'poll'; pass PDO object as argument
$newQuestion = $poll->getPollQuestion(); //getting poll question

if (isset($_COOKIE['voted']))   //check if the user has already voted by cookies
{
    echo "You already voted  ".$_COOKIE['voted'];

}

else
{
    $isPollSubmitted =  isset($_POST['user-input']);    //check if the form was submitted
    if ($isPollSubmitted)   //if the form is just submitted
    {
        $input = $_POST['user-input'];  //take the casted vote
        $voteSubmitted = $poll->updatePoll($input);  //and update the result
        echo "Thanks for your Vote. You voted $input";
        if ($voteSubmitted == false) // if any query result couldn't be updated
        {
            echo "Sorry, Something went Went wrong"; // show this & stop execution.
            exit();
        }
        else
            setcookie('voted', $input, time()+30*24*60*60, '/'); // otherwise set cookies for 30 days(in seconds);



        /*if (isset($_COOKIE['voted']))
        {
            echo $_COOKIE['voted'];
        }*/
    }
    else
    {
        $pollAsHTML = include_once "views/poll-html.php";   // getting and creating view of poll result from views folder
        echo $pollAsHTML;
    }

}
return showPollData();


function showPollData()
{   global $poll;
    $pollResult = $poll->showPollData();
    return "<h1>Poll results</h1>
            <ul>
            <li>$pollResult->yes said yes</li>
            <li>$pollResult->no said no</li>
            </ul>";
}