<?php
/**
 * Created by PhpStorm.
 * User: MD. Fakhruddin Gazzali
 * Date: 21-Dec-18
 * Time: 12:07 PM
 */
/* This page redirects you to the correct Twitter page, if your link with '/statuses' redirects you to erroneous  page*/

/* for example: if you have a link like : https://twitter.com/statuses/1074703625392455681 and clicking it gives you a
Twitter page saying "Sorry, that page doesn’t exist!" , then you can resolve the correct redirection by the following code*/

/* CAUTION: this page CAN'T redirect to the deleted tweet. Deleted Tweet page always show "Sorry, that page doesn’t exist!"
EVEN after this following method*/

$getOldLink = "<!DOCTYPE html>    <! -- getting old link (e.g.: https://twitter.com/statuses/SomeRandomTweetID. this 'SomeRandomTweetID' is generated by Twitter.com while post a Tweet  -->
<head>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel=\"icon\" type=\"image/png\" href=\"favicon-32x32.png\" sizes=\"32x32\" />
    <link rel=\"icon\" type=\"image/png\" href=\"favicon-16x16.png\" sizes=\"16x16\" />
    <title>
        TweetTaps
    </title>
</head>
<body>
<a href='index.php'><img src='TweetTapsLogo.png' alt='TweetTapsLogo'/></a>
<div id='input-form'>
Enter Twitter Tweet link from Trello SUMO 64 boards and Press 'ENTER' to Redirect
<form action='index.php' method='get' target='_blank'>
    <input type='text' name='oldLink' placeholder=example: https://twitter.com/statuses/123456789' >
    <input type='submit' name='submit' value='GO'>
    <input type='reset' value='Clear Field'>
</form>
</div>
<style>

body{
    background-color: black;
    color: aliceblue;
    font-family: 'Trebuchet MS', Helvetica, sans-serif;
}

img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 25%;
}
#input-form{
  margin-top: 5%;
  justify-content: center;
  text-align: center;
}

h2,h3
{
  text-align: center;
}
input[type=text] {
  width: 15rem;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 50%;
  height: 15%;
}
input[name=oldLink]
{
  text-align: center;
}
input[type=submit]{
  display: none;
}
input[type=reset]{
  display: inline-grid;
  background: #4E9CAF;
  padding: 10px;
  text-align: center;
  border-radius: 5px;
  color: white;
  font-weight: bold;
}
</style>
</body>
</html>";
echo $getOldLink;   // show the form

if(isset($_GET['submit'])) {
    if(empty($_GET['oldLink']))
    {
        echo "<h3 style='color: orange'>Enter a valid Twitter link</h3>";
        exit();
    }
    $oldLink = $_GET['oldLink'];
    $newLink = substr_replace($oldLink, 'user/', 20,0); // adding 'user/' after  https://twitter.com/
    /* now https://twitter.com/statuses/SomeRandomTweetID converted to
    https://twitter.com/user/statuses/SomeRandomTweetID */

    echo "<a href='$newLink' target='_blank'>$newLink</a>";
    header("location:$newLink");    // redirecting to the converted correct page.
    exit();
}