<?php
/**
 * Created by PhpStorm.
 * User: MD. Fakhruddin Gazzali
 * Date: 19-Nov-18
 * Time: 10:19 PM
 */
$quizIsSubmitted = isset($_POST['quiz-submitted']);
if($quizIsSubmitted)
{
    $answer = $_POST['answer'];
    $output = showQuizResponse($answer);
}
else
    $output = include_once "quiz-form.php"; // code for quiz via quiz-form.php
return $output;

function showQuizResponse($answer)
{
    $response = "<p>
    You clicked $answer<br>
    <a href='index.php?page=quiz'> Want ro try again?</a>
</p>";
    return $response;
}