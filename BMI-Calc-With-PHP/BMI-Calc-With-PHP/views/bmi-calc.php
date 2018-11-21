<?php
/**
 * Created by PhpStorm.
 * User: MD. Fakhruddin Gazzali
 * Date: 21-Nov-18
 * Time: 11:38 AM
 */
$formIsSubmitted = isset($_GET['calculate']);
if($formIsSubmitted)
{
    $rule = $_GET['rule'];
    $height = $_GET['height'];
    $weight = $_GET['weight'];

    $output = getBMI($rule,$height,$weight);
}
else
    $output = include_once "bmi-calc-form.php";
return $output;

function getBMI($rule, $height, $weight)
{
    if($rule == 'metric')
        $bmi = $weight /( 2 * $height);
    else
        $bmi = ( ($weight * 2.2) /(2 * ($height * 39.37)) ) * 703;

    $response = "<p> Your BMI is <b>$bmi</b> according to <b>$rule</b> method</p>";
    return $response;
}