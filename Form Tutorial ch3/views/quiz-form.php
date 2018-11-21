<?php
/**
 * Created by PhpStorm.
 * User: MD. Fakhruddin Gazzali
 * Date: 20-Nov-18
 * Time: 10:24 AM
 */
return "
<form method = 'post' action = 'index.php?page=quiz'>
    <p>Is it fun to learn PHP?</p>
    <select name = 'answer'>
        <option value='yes'>Yes, it is</option>
        <option value='no'>Nope, it isn't</option>
    </select>
    <input type='submit' name='quiz-submitted' value='post'> <!-- get the answer and pass it  -->
</form>";