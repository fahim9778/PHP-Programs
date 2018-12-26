<?php
/**
 * Created by PhpStorm.
 * User: MD. Fakhruddin Gazzali
 * Date: 23-Dec-18
 * Time: 2:50 PM
 */
$dataFound = isset($pollData);
if ($dataFound == false)
{
    trigger_error("views/poll-html.php needs an $pollData object"); //triggering custom error message
}

/* The
significant difference is that the fetchObject() will automatically create a new StdClass object and return it. Property
names of the created StdClass object are identical to the table column names. */
/* hence the 'pollData' now have the values from 'playground' database.*/

return "<aside id ='poll'>
    <form action='index.php' method='post'>
        <p>$pollData->pollQuestion</p>
        <select name='user-input'>
            <option value='yes'>Yes, it is.</option>
            <option value='no'>No, it is not</option>
        </select>
        <!--<input type='radio' name='yes' value='yes'> Yes, it is <br>
        <input type='radio' name='no' value='no'> No, it is NOT <br>
        -->
        <input type='submit' value='POST'>
    </form>
    <h1>Poll Results</h1>
    <ul>
        <li>$pollData->yes said YES</li>
        <li>$pollData->no said NO</li>
    </ul>
</aside>";