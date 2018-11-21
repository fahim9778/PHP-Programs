<?php
/**
 * Created by PhpStorm.
 * User: MD. Fakhruddin Gazzali
 * Date: 21-Nov-18
 * Time: 11:42 AM
 */
return "<form name = 'any' method='get' action='bmi-calc.php'>
    <select name = 'rule'>
        <option value='metric'>Metric</option>
        <option value='uk-us'>UK-US</option>
    </select>
    <br>
    <input type='number' step='0.50' name='height' placeholder='Enter Height'> <!-- box for height -->
    <input type='number' step='0.01' name='weight' placeholder='Enter Weight'> <!-- box for weight -->
    <input type='submit' name='calculate' value='Submit'>
</form>";